<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Users\UpdateProfileRequest;

class UserController extends Controller
{
    public function index(){
        return view('user.index')->with('users',User::all());
    }

    public function edit()
    {
        return view('user.edit')->with('user',auth()->user());
    }

    public function update(UpdateProfileRequest $request)
    {
        $user=auth()->user();

        $user->update([
          'name'=>$request->name,
          'about'=>$request->about

        ]);
        session()->flash('success','User Updated successfully!!');
        return redirect()->back();
    }
}
