<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Doctor\CreateDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use App\Type;
use App\Schedule;
use App\DoctorsRequest;
use PDF;
use App\Booking;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('verifyTypesCount')->only(['create','store']);
    }
    
    public function index()
    {
        $doctors=User::where('role','doctor')->get();
        return view('doctor.index')->with('doctors',$doctors);
    }

    public function viewAdminRequest(){

        $doctorsRequest=DoctorsRequest::where([
         'doctor_id'=>auth()->user()->id,
         'status'=>0

        ])->get();
       return view('doctor.viewrequest')->with('doctorsRequest',$doctorsRequest);
    }

    public function connectPatient($id){
         $user=User::all()->where('id',$id)->first();
         $user->requeststatus=1;
         $user->save();
         return redirect(route('chat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create')->with('types',Type::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDoctorRequest $request)
    {
        //upload the file to the storage
        $image=$request->file('image');
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->type_id=$request->type;
        $user->qualification=$request->qualification;
        $user->mobile=$request->mobile;
        $user->role='doctor';
        $user->image=$image_url;
        $user->save();

        session()->flash('success','Doctor add successfully!');

        return redirect(route('doctors.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::all()->where('id',$id)->first();
        return view('doctor.create')->with('doctor',$user)->with('types',Type::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, User $doctor)
    {
        $image=$request->file('image');

        if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($doctor->image!='image/user.png')
              unlink($doctor->image);

            $doctor->update([
                'name'=>$request->name,
                'type_id'=>$request->type,
                'qualification'=>$request->qualification,
                'mobile'=>$request->mobile,
                'image'=>$image_url,
                'address'=>$request->address
              ]);
            }
            else{

        $doctor->update([
            'name'=>$request->name,
            'type_id'=>$request->type,
            'qualification'=>$request->qualification,
            'mobile'=>$request->mobile,
            'address'=>$request->address
        ]);
        }
        session()->flash('success','Doctor updated successfully!');
        return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $doctor)
    {
        $doctor->delete();
        session()->flash('success','Doctor Deleted Successfully!');
        return redirect(route('doctors.index'));
    }

    public function book($id){
        $doctorSchedule=Schedule::where('doctor_id',$id)->get();
        $doctor=User::all()->where('id',$id)->first();
        return view('doctor.booking')
        ->with('doctor',$doctor)
        ->with('doctorSchedule',$doctorSchedule);
    }

    public function viewAppointListPdf(){
        $bookings=Booking::where('confirm','=',1)
        ->where('status','=',1)
        ->where('doctor_id','=',auth()->user()->id)
        ->get();

        $name=auth()->user()->name.''.auth()->user()->id.'.'.'pdf';
       // return view('doctor.test',compact('doctors'));
       $pdf = PDF::loadView('downloadpdf.appointmentlist',compact('bookings'));
  
        return $pdf->download($name);
       

    }
}
