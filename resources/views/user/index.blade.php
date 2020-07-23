@extends('layouts.admin')

@section('content')

<div class="card card-default">
<div class="card-header">
		Users
</div>
<div class="card-body">
	@if($users->count() > 0)
	
        <table class="table">
		  <thead>
		  	<th>Id</th>
		  	<th>Name</th>
		  	<th>Email</th>
		  </thead> 
		  <tbody>
		  	@foreach($users as $user)
		  	<tr>
		  		<td>{{$user->id}}</td>
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