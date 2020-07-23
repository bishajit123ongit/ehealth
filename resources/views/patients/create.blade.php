@extends('layouts.admin')

@section('content')

<div class="card card-default">
	<div class="card-header">
        Create request for send to admin
	</div>

    @if ($errors->any())
       <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
       </div>
     @endif

	<div class="card-body">
		<form action="{{route('patients.store')}}" method="POST">
			@csrf


			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" value="{{auth()->user()->name}}">
			</div>

            <div class="form-group">
				<label for="disease">Disease</label>
				<input type="text" name="disease" class="form-control" value="">
			</div>

            <div class="form-group">
				<label for="symtomps">Symtomps</label>
				<input type="text" name="symtomps" class="form-control" value="">
			</div>
            <div class="form-group">
				<label for="age">Age</label>
				<input type="text" name="age" class="form-control" value="">
			</div>

			<div style="padding-bottom:20px;" class="form-group">
				<button class="btn btn-success">
                <i class="fa fa-fast-backward" aria-hidden="true"></i>
						Send Request
			  </button>
			</div>
			
		</form>
	</div>
</div>

@endsection

