@extends('layouts.admin')
@section('title')
 Requests
@endsection
@section('content')
<div class="card card-default">
	<div class="card-header">
		Patient Requests
	</div>

	<div class="card-header">
	@if($patientRequests->count()>0)
	<table class="table">
		  <thead>
            <th>Status</th>
		  	<th>Id</th>
		  	<th>User Id</th>
		  	<th>Disease</th>
            <th>Symtomps</th>
            <th>Age</th>
			<th></th>
		  </thead> 
		  <tbody>
		  	@foreach($patientRequests as $row)
		  	<tr>
            <td>
              
			  @if($row->status==0)
			  <i style="margin-right:3px;" class="fa fa-times" aria-hidden="true"></i>
			  <a href="{{route('patient.change-status',$row->id)}}">Approve</a>
                
                @else
				<i class="fa fa-check" aria-hidden="true"></i>
				<a href="{{route('patient.change-status',$row->id)}}">Approved</a>
				
                @endif
               
            </td>
		  	<td>{{$row->id}}</td>
		  	<td>{{$row->user->id}}</td>
            <td>{{$row->disease}}</td>
            <td>{{$row->symtomps}}</td>
            <td>{{$row->age}}</td>

			<td><a href="{{route('pateientrequest.destroy',$row->id)}}" class="btn btn-info btn-sm"><i class="fas fa-trash"></i></a></td>
				  
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No requests are available</h3>
	@endif


@endsection