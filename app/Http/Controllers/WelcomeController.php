<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Doctor;
use App\User;
use App\Feedback;
use App\Booking;

class WelcomeController extends Controller
{
    public function index()
    {

        $booking=new Booking();

        if(auth()->user()){
        $booking=Booking::where('doctor_id','=',auth()->user()->id)
        ->get();
        }
    	
       return view('welcome')
       ->with('doctors',User::where('role','doctor')->paginate(4))
       ->with('alldoctors',User::all()->where('role','doctor'))
       ->with('users',User::all()->where('role','user'))
       ->with('feedbacks',Feedback::all())
       ->with('bookings',$booking)
       ->with('types',Type::all());
    }

    public function typeByCategory(Type $type){
        $booking=new Booking();
        if(auth()->user()){
        $booking=Booking::where('doctor_id','=',auth()->user()->id)
        ->get();
        }

        return view('master.partials.type')
        ->with('feedbacks',Feedback::all())
        ->with('alldoctors',User::all()->where('role','doctor'))
        ->with('users',User::all()->where('role','user'))
        ->with('bookings',$booking)
        ->with('types',Type::all())->with('type',$type)->with('doctors',$type->user()->paginate(4));
    }
}
