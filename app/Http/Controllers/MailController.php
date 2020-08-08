<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PrescribeEmail;
use Illuminate\Support\Facades\Mail;
use App\User;

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
}
