@extends('layouts.admin')
@section('title')
 Send Report
@endsection
@section('content')

<div class="card card-default">
	<div class="card-header">
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
		<form action="{{route('store.report')}}" method="POST" enctype="multipart/form-data">
			@csrf
            
            <div class="form-group">
				<label for="doctor_id">Doctor id</label>
				<input class="form-control" type="text" name="doctor_id">
			</div>

            <div class="form-group">
            <label for="images">Choose report</label>
            <input class="form-control" required type="file" class="form-control" id="images" name="images[]" multiple>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">
                    <i style="margin-right:3px;"class="fa fa-plus-circle" aria-hidden="true"></i>
                    Send report
			  </button>
			</div>
			
		</form>
	</div>
</div>

@endsection

