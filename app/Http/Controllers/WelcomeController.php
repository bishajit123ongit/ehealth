<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Doctor;
use App\User;
use App\Feedback;

class WelcomeController extends Controller
{
    public function index()
    {
    	
       return view('welcome')
       ->with('doctors',User::where('role','doctor')->paginate(4))
       ->with('alldoctors',User::all()->where('role','doctor'))
       ->with('users',User::all()->where('role','user'))
       ->with('feedbacks',Feedback::all())
       ->with('types',Type::all());
    }

    public function typeByCategory(Type $type){

        return view('master.partials.type')->with('types',Type::all())->with('type',$type)->with('doctors',$type->user()->paginate(4));
    }
}
