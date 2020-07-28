<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Doctor\SendDoctorRequest;
use App\DoctorsRequest;
use App\PatientRequest;
use App\Doctor;
use App\User;

class DoctorsRequestController extends Controller
{
    public function createDoctorRequest(){
        return view('doctor.createrequest');
    }

    public function storeDoctorRequest(SendDoctorRequest $request){
     
       $doctor=User::all()->where('id',$request->doctor_id)->first();
       $patientRequest=PatientRequest::all()->where('id',$request->patientrequest_id)->first();

       if($doctor!=null)
       {
           if($patientRequest!=null)
           {
               if($patientRequest->status==1)
               {
                $doctorRequest=new DoctorsRequest();
                $doctorRequest->doctor_id=$request->doctor_id;
                $doctorRequest->patientrequest_id=$request->patientrequest_id;
                $doctorRequest->save();
               }
               else{
                session()->flash('error','Patients request does not approved,approve first then send request again!');
                return redirect()->back();
               }
            
           }
           else{
            session()->flash('error','The patient doesnot sent request!');
            return redirect()->back();
           }
        
       }
       else{
        session()->flash('error','The doctor is not available!');
        return redirect()->back();
       }

     

       session()->flash('success','Patients request successfully send to the doctor!');
       return redirect()->back();
    }
}
