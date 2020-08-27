@extends('layouts.admin')


@section('title')
 View Request
@endsection

@section('content')
<div class="card card-default">
	<div class="card-header">
		Patient Requests
	</div>

	<div class="card-header">
	@if($doctorsRequest->count()>0)
	<table class="table">
		  <thead>
            <th>Status</th>
		  	<th>Patient Id</th>
            <th>Patient Name</th>
            <th>Patient Age</th>  
            <th>Patient Disease</th>
            <th>Patient Symtomps</th>
			<th>Action</th>
		  </thead> 
		  <tbody>
		  	@foreach($doctorsRequest as $row)
		  	<tr>
            <td>
              
			  <a href="{{route('connect.patient', $row->id)}}">Yes</a>
               
            </td>
		  	<td>{{$row->patientRequest['id']}}</td>
            <td>{{$row->patientRequest->user['name']}}</td>
            <td>{{$row->patientRequest['age']}}</td>  
            <td>{{$row->patientRequest['disease']}}</td> 
            <td>{{$row->patientRequest['symtomps']}}</td> 
			<td><a href="{{route('trash.doctor_request',$row->id)}}" class="btn btn-info btn-sm"><i class="fas fa-trash"></i></a></td>
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No request are available from admin</h3>
	@endif


@endsection