<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Type;
use App\DoctorsRequest;
use App\Booking;

class DashboardController extends Controller
{
    public function index(){
        $current_month_users=User::where('role','user')->whereYear('created_at', Carbon::now()->year)
                        ->whereMonth('created_at', Carbon::now()->month)->count();
        $last_month_users=User::where('role','user')->whereYear('created_at', Carbon::now()->year)
                        ->whereMonth('created_at', Carbon::now()->subMonth(1))->count();
        $last_to_month_users=User::where('role','user')->whereYear('created_at', Carbon::now()->year)
                        ->whereMonth('created_at', Carbon::now()->subMonth(2))->count();

    	return view('dashboard.index')
    	->with('doctors',User::where('role','doctor'))
    	->with('users',User::where('role','user'))
    	->with('types',Type::all())
        ->with('doctorRequest',DoctorsRequest::all())
        ->with('bookings',Booking::where('status','=',1)->where('confirm','=',1)->get())
    	->with(compact('current_month_users','last_month_users','last_to_month_users'));
    }
}
