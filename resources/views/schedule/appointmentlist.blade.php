@extends('layouts.admin')
@section('title')
 Appointments list
@endsection
@section('content')
<div class="card card-default">
	<div class="card-header">
		Appointment list
	</div>

	<div class="card-header">
	@if($appointments->count()>0)
	<table class="table">
		  <thead>
		  	<th>Id</th>
		  	<th>User Id</th>
		  	<th>Schedule Id</th>
			<th>Day</th>
            <th>Start time</th>
            <th>End Time</th>
		  </thead> 
		  <tbody>
		  	@foreach($appointments as $row)
		  	<tr>
           
		  	<td>{{$row->id}}</td>
		  	<td>{{$row->user_id}}</td>
            <td>{{$row->schedule_id}}</td>
			<td>{{$row->schedule->day}}</td>
            <td>{{$row->schedule->start_time}}</td>
            <td>{{$row->schedule->end_time}}</td>
				  
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No appointment are available</h3>
	@endif
    </div>


@endsection