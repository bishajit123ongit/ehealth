<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Booking;
use App\Http\Requests\Users\UpdateProfileRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.index')->with('users',User::all()->where('role','user'));
    }

    public function edit()
    {
        return view('user.edit')->with('user',auth()->user());
    }

    public function update(UpdateProfileRequest $request)
    {
        $user=auth()->user();
        $image=$request->file('image');

        if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($user->image!='image/user.png')
              unlink($user->image);

            $user->update([
                'name'=>$request->name,
                'about'=>$request->about,
                'image'=>$image_url,
                'mobile'=>$request->mobile,
                'address'=>$request->address
              ]);
            }
        else{

        $user->update([
          'name'=>$request->name,
          'about'=>$request->about,
          'mobile'=>$request->mobile,
          'address'=>$request->address
        ]);
        }
        session()->flash('success','User Updated successfully!!');
        return redirect()->back();
    }

    public function appoint(){
      $booking=Booking::where('status','=',1)
      ->where('user_id','=',auth()->user()->id)
      ->get();

      return view('user.appoint')->with('appointments',$booking);
    }

    public function changeConfirm($id){

      $booking=Booking::all()->where('id',$id)->first();
      if($booking->confirm==0){
          $booking->confirm=1;
      }
      else if($booking->confirm==1){
          $booking->confirm=0;
      }
      $booking->save();
      return redirect(route('appointment.index'));

  }

  public function changePassword(Request $request){
    $user=User::all()->where('id',auth()->user()->id)->first();
    

    if(Hash::check($request->oldpassword,$user->password)){
      if($request->newpassword==$request->retypenewpassword){
             $user->password=Hash::make($request->newpassword);
             $user->save();
       session()->flash('success','Password change successfully!');
        return redirect()->back();

      }
      else{
        session()->flash('error','New and retype new password not match!');
        return redirect()->back();
      }
    }
    else{
      session()->flash('error','Old password not match');
        return redirect()->back();
    }
  }
}
