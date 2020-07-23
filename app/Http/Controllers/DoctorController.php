<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests\Doctor\CreateDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use App\Type;
use App\DoctorsRequest;

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
        return view('doctor.index')->with('doctors',Doctor::all());
    }

    public function viewAdminRequest(){

        $doctorsRequest=DoctorsRequest::where([
         'doctor_id'=>auth('doctor')->user()->id,
         'status'=>0

        ])->get();
       return view('doctor.viewrequest')->with('doctorsRequest',$doctorsRequest);
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
        $doctor=new Doctor();
        $doctor->name=$request->name;
        $doctor->email=$request->email;
        $doctor->password=Hash::make($request->password);
        $doctor->type_id=$request->type;
        $doctor->qualification=$request->qualification;
        $doctor->mobile=$request->mobile;
        $doctor->save();

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
    public function edit(Doctor $doctor)
    {
        return view('doctor.create')->with('doctor',$doctor)->with('types',Type::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $doctor->update([
            'name'=>$request->name,
            'type_id'=>$request->type,
            'qualification'=>$request->qualification,
            'mobile'=>$request->mobile
        ]);

     
        session()->flash('success','Doctor updated successfully!');
        if(auth('doctor')->user())
        return redirect()->back();
        return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        session()->flash('success','Doctor Deleted Successfully!');
        return redirect(route('doctors.index'));
    }
}
