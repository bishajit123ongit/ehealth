@extends('layouts.admin')

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
		  </thead> 
		  <tbody>
		  	@foreach($doctorsRequest as $row)
		  	<tr>
            <td>
              
			  @if($row->status==0)
			  <i style="margin-right:3px;" class="fa fa-times" aria-hidden="true"></i>
			  <a href="#">Approve</a>
                
                @else
				<i class="fa fa-check" aria-hidden="true"></i>
				<a href="#">Approved</a>
				
                @endif
               
            </td>
		  	<td>{{$row->patientRequest['id']}}</td>
            <td>{{$row->patientRequest->user['name']}}</td>
            <td>{{$row->patientRequest['age']}}</td>  
            <td>{{$row->patientRequest['disease']}}</td> 
            <td>{{$row->patientRequest['symtomps']}}</td> 
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No request are available from admin</h3>
	@endif


@endsection