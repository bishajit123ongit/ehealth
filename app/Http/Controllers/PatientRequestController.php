<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientRequest;
use App\Http\Requests\Patients\CreatePatientRequest;

class PatientRequestController extends Controller
{
    public function create(){
        return view('patients.create');
    }

    public function store(CreatePatientRequest $request){
        $patientRequest=new PatientRequest();
        $patientRequest->disease=$request->disease;
        $patientRequest->age=$request->age;
        $patientRequest->symtomps=$request->symtomps;
        $patientRequest->user_id=auth()->user()->id;
        $patientRequest->save();

        
        session()->flash('success','Patients request successfully send to the admin!');

        return redirect()->back();
    }

    public function changeStatus($id){
        $patientRequest=PatientRequest::all()->where('id',$id)->first();
        if($patientRequest->status==0){
        $patientRequest->status=1;
        }
        else if($patientRequest->status==1){
            $patientRequest->status=0;
        }

        $patientRequest->save();
        return redirect(route('patient-request.view'));
    }
}
