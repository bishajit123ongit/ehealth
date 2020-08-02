<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use PDF;
use App\User;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=Booking::where('doctor_id','=',auth()->user()->id)
        ->get();
        return view('schedule.appointment')->with('appointments',$booking);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        print_r($booking->schedule()->count());
        if($booking->schedule()->count()>0){
         session()->flash('error','Appointment cannot be deleted, because it has some schedule!');
         return redirect()->back();
        }
       $booking->delete();
        session()->flash('success','Appointments Deleted Successfully!');
        return redirect(route('bookings.index'));
    }

    public function viewBookingPdf($id){
       $bookings=Booking::all()->where('id',$id)->first();
       $doctor=User::all()->where('id',$bookings->doctor_id)->first();
       $user=User::all()->where('id',auth()->user()->id)->first();
      // return view('downloadpdf.booking',compact('bookings','doctor','user'));
       $pdf = PDF::loadView('downloadpdf.booking',compact('bookings','doctor','user'));
       $name=auth()->user()->name.''.auth()->user()->id.'.'.'pdf';
       print_r($name);
  
       return $pdf->download($name);
    }
}
