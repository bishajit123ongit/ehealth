<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PrescribeEmail;
use App\Mail\SuggestionEmail;
use App\Mail\BookingEmail;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Report;

class MailController extends Controller
{
    public function sendPrescribeEmail(Request $request){
        $user=User::all()->where('email',$request->email)->first();
 
        if($user==null || $request->email==auth()->user()->email){
            session()->flash('error','User not exists');
            return redirect()->back();
        }
        else{
            $data=[
                'name'=> $user->name,
                'prescription'=> $request->prescription,
                'test'=>$request->test,
                'doctor_name'=>auth()->user()->name,
                'qualification'=>auth()->user()->qualification
            ];
            Mail::to($user->email)->send(new PrescribeEmail($data));
            session()->flash('success','Prescription or test send successfully!');
            return redirect()->back();
        }
       // Mail::to('oviomps@gmail.com')->send(new PrescribeEmail($data));
    }

    public function sendSuggestion(Request $request,$id){
       $report=Report::all()->where('id',$id)->first();
       $user=User::all()->where('id',$report->user_id)->first();
       $data=[
        'name'=> $user->name,
        'doctorname'=>auth()->user()->name,
        'description'=>$request->description
    ];
       Mail::to($user->email)->send(new SuggestionEmail($data));
       session()->flash('success','Suggestion send to the patient email successfully!');
       return redirect()->back();
    }

    public static function sendBookingEmail($name,$email,$doctorname,$typename){
        $data=[
            'name'=> $name,
            'doctorname'=>$doctorname,
            'typename'=>$typename
        ];
         Mail::to($email)->send(new BookingEmail($data));
    }
}
