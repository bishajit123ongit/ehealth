@extends('layouts.admin')

@section('title')
 Create Request
@endsection
@section('content')

<div class="card card-default">
	<div class="card-header">
		  Create request send to the doctor
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
		<form action="{{route('doctorsrequest.store')}}" method="POST">
			@csrf


			<div class="form-group">
				<label for="doctor_id">Doctor Id</label>
				<input type="text" name="doctor_id" class="form-control" value="">
			</div>

            <div class="form-group">
				<label for="patientrequest_id">Patient Request Id</label>
				<input type="text" name="patientrequest_id" class="form-control" value="">
			</div>

			<div class="form-group">
				<button class="btn btn-success">
						  <i style="margin-right:3px;"class="fa fa-plus-circle" aria-hidden="true"></i>
							 Send request to doctor
					  	
			  </button>
			</div>
			
		</form>
	</div>
</div>

@endsection

