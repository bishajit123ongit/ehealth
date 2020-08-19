@extends('layouts.admin')
@section('title')
 View report
@endsection
@section('content')

<div class="card card-default">
	<div class="card-header">
		View reports
	</div>

	<div class="card-header">
       @foreach($reports as $row)
       <img style="width:700px; height:500px;margin-bottom:10px;" src="{{asset($row->image)}}" alt="">
       @endforeach
    </div>
    <div class="card-body">
      <div class="form-group">
      <form action="{{route('patients.suggestion',$report->id)}}" method="POST">
			@csrf
            
            <div class="form-group">
				<label for="suggestion">Suggestion</label>
				<textarea placeholder=Description class="form-control" name="description" id="description" cols="5" rows="3"></textarea>
			</div>

			<div style="padding-bottom:10px;" class="form-group">
				<button type="submit" class="btn btn-success">
                    <i style="margin-right:3px;"class="fa fa-plus-circle" aria-hidden="true"></i>
                    Send suggestion to the patient email
			  </button>
			</div>
			
		</form>
      </div>
    
    </div>
</div>

@endsection