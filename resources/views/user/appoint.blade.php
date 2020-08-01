@extends('layouts.admin')
@section('title')
 Appointment user
@endsection
@section('content')
<div class="card card-default">
	<div class="card-header">
		Appoint user
	</div>

	<div class="card-header">
	@if($appointments->count()>0)
	<table class="table">
		  <thead>
		  	<th>Id</th>
		  	<th>Schedule Id</th>
            <th>Day</th>
            <th>Date</th>
            <th>Start time</th>
            <th>End Time</th>
            <th>Confirmation</th>
		  </thead> 
		  <tbody>
		  	@foreach($appointments as $row)
		  	<tr>
		  	<td>{{$row->id}}</td>
            <td>{{$row->schedule_id}}</td>
            <td>{{$row->schedule->day}}</td>
            <td>{{$row->schedule->date}}</td>
            <td>{{$row->schedule->start_time}}</td>
            <td>{{$row->schedule->end_time}}</td>
            <td>
            @if($row->confirm==0)
                <i style="margin-right:3px;" class="fa fa-times" aria-hidden="true"></i>
                <a href="{{route('appointment.change-confirm',$row->id)}}">Confirm</a>
            
            @else
                <i class="fa fa-check" aria-hidden="true"></i>
                <a href="{{route('appointment.change-confirm',$row->id)}}">Confirmed</a>
            
                @endif
            </td>
				  
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No appointment for you!</h3>
	@endif
    </div>


@endsection