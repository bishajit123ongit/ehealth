@extends('layouts.admin')
@section('title')
 Users
@endsection
@section('content')

<div class="card card-default">
<div class="card-header">
		Users
</div>
<div class="card-body">
	@if($users->count() > 0)
	
        <table class="table table-dark">
		  <thead>
		  	<th>Id</th>
			<th>Profile Pic</th>
		  	<th>Name</th>
		  	<th>Email</th>
		  </thead> 
		  <tbody>
		  	@foreach($users as $user)
		  	<tr>
		  		<td>{{$user->id}}</td>
				<td><img style="width:45px;height:45px;border-radius:50%;" src="{{asset($user->image)}}" alt=""></td>
		  		<td>
		  			{{$user->name}}
		  		</td>
		  		<td>
		  		  {{$user->email}}
		  		</td>
		  		
		  	</tr>
		  	@endforeach
		  </tbody>
	
	@else
      <h3 class="text-center">No user yet</h3>
	@endif
</div>

</div>


@endsection