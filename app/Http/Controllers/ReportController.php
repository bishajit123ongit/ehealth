<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Report\SendReportRequest;
use App\Report;
use App\User;
use App\PatientRequest;
use App\DoctorsRequest;

class ReportController extends Controller
{
    public function create(){
        return view('report.create');
    }

    public function store(SendReportRequest $request){

        $doctor=User::all()->where('id',$request->doctor_id)->first();
        $patientRequests=PatientRequest::where('user_id',auth()->user()->id)->get();
        

        $isConversation=0;
        foreach($patientRequests as $patientRequest){
          $doctorRequest=DoctorsRequest::where('doctor_id',$request->doctor_id)
          ->where('patientrequest_id',$patientRequest->id)
          ->where('status',1)
          ->first();

          if($doctorRequest!=null){
            $isConversation=1;
          }
        }

        if($doctor!=null){

          if($isConversation==1){
            $images=array();
            if($files=$request->file('images')){
            foreach($files as $file){
    
            $image_name=hexdec(uniqid());
            $ext=strtolower($file->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            
            $upload_path='report/';
            $image_url=$upload_path.$image_full_name;
                
            $file->move($upload_path,$image_full_name);
            $images[]=$image_full_name;
            Report::insert( ['image'=> $image_url,
            'user_id'=>auth()->user()->id,
            'doctor_id'=>$request->doctor_id
            ]);
              }
            }
          }
          else{
            session()->flash('error','You was not connect this doctor!');
            return redirect()->back();
           }
          }
        else{
          session()->flash('error','Doctor doesnot exit!');
          return redirect()->back();
        }

       
        session()->flash('success','Report send successfully!');
        return redirect()->back();
    }


    public function index()
    {
        $reports=Report::where('doctor_id',auth()->user()->id)
        ->select('id','user_id')->groupBy('user_id')->get();

        return view('report.index')->with('reports',$reports);
    }

    public function show($id){
      $report=Report::all()->where('id',$id)->first();
      $user_report=Report::where('user_id',$report->user_id)
      ->where('doctor_id',$report->doctor_id)
      ->get();
      return view('report.view')->with('reports',$user_report)
      ->with('report',$report);
    }

    public function destroy($id){
      $report=Report::all()->where('id',$id)->first();
      $reportsByUserAndDoctor=Report::where('user_id',$report->user_id)
      ->where('doctor_id',$report->doctor_id)->get();
      foreach($reportsByUserAndDoctor as $re){
        unlink($re->image);
        $re->delete();
      }
      session()->flash('success','Report deleted successfully!');
      return redirect()->back();
    }

    public function contact(){
      return view('contact');
    }
}
