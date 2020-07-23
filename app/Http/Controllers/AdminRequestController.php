<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientRequest;

class AdminRequestController extends Controller
{
    public function viewRequest(){
        return view('request.index')->with('patientRequests',PatientRequest::all());
    }
}
