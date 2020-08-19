@extends('layouts.admin')
@section('title')
 Reports
@endsection
@section('content')

<div class="card card-default">
	<div class="card-header">
		View report for this patients
	</div>

	<div class="card-header">
	@if($reports->count()>0)
	<table class="table">
		  <thead>
            <th>Image</th>
		  	<th>Name</th>
		  	<th>Email</th>
		  	<th></th>
		  </thead> 
		  <tbody>
		  	@foreach($reports as $report)
		  	<tr>

              <td>
		  			<img style="width:45px;height:45px;border-radius:50%;" src="{{asset($report->user->image)}}" alt="">
		  	 </td>
		  		<td>{{$report->user->name}}</td>
                <td>{{$report->user->email}}</td>
               <td> 
			   <a href="{{route('report.view',$report->id)}}" class="btn btn-info btn-sm "><i class="far fa-eye"></i></a>
			   <a href="{{route('report.destroy',$report->id)}}" class="btn btn-info btn-sm"><i class="fas fa-trash"></i></a>
			   </td>

		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No reports, yet!</h3>
	@endif

@endsection