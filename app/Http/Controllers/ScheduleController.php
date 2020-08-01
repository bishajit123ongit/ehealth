<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Booking;
use App\Http\Requests\Schedule\CreateScheduleRequest;
use App\Http\Requests\Schedule\UpdateScheduleRequest;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$schedules=Schedule::where('doctor_id','=',auth()->user()->id)
        ->where('end_time','>=',now())
        ->get();*/
        $schedules=Schedule::where('doctor_id','=',auth()->user()->id)->get();
        return view('schedule.index')->with('schedules',$schedules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateScheduleRequest $request)
    {
        $schedule=new Schedule();
        $schedule->day=$request->day;
        $schedule->date=$request->date;
        $schedule->start_time=$request->start_time;
        $schedule->end_time=$request->end_time;
        $schedule->doctor_id=auth()->user()->id;


        $schedule->save();

        session()->flash('success','Schedule add successfully!');

        return redirect(route('schedules.index'));
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
    public function edit(Schedule $schedule)
    {
        return view('schedule.create')->with('schedule',$schedule);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $schedule->update([
            'day'=>$request->day,
            'date'=>$request->date,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time
        ]);

        session()->flash('success','Schedule updated successfully!');
        return redirect(route('schedules.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $bookings=Booking::where('schedule_id',$schedule->id)->get();
        foreach($bookings as $booking){
            $booking->delete();
        }
        $schedule->delete();
        session()->flash('success','Schedule Deleted Successfully!');
        return redirect(route('schedules.index'));
    }

    public function bookDoctor($id){

        $schedule=Schedule::all()->where('id',$id)->first();
        if(!auth()->user()->isUser()){
            session()->flash('error','Only patient can book doctor schedule!');
            return redirect()->back();
        }
        else{
            $booking = new Booking();
            $booking->user_id=auth()->user()->id;
            $booking->schedule_id=$schedule->id;
            $booking->doctor_id=$schedule->doctor_id;
            $booking->save();
            session()->flash('success','Booking request successfully send to the doctor!');
            return redirect()->back();

        }
    }


    public function appointmentList(){

        /*$schedules=Schedule::where('doctor_id','=',auth()->user()->id)
        ->where('end_time','>=',now())
        ->get();*/
          $booking=Booking::where('doctor_id','=',auth()->user()->id)
          ->where('confirm','=',1)
          ->get();
          return view('schedule.appointmentlist')->with('appointments',$booking);
    }

    public function changeStatus($id){

        $booking=Booking::all()->where('id',$id)->first();
        if($booking->status==0){
            $booking->status=1;
        }
        else if($booking->status==1){
            $booking->status=0;
        }
        $booking->save();
        return redirect(route('bookings.index'));

    }
}
