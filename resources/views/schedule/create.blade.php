@extends('layouts.admin')

@section('content')
<div class="card card-default">
	<div class="card-header">
		      @if(isset($schedule))
				 Update Schedule
			  @else
				 Add Schedule
		      @endif
	</div>
	<div style="padding-bottom: 30px;" class="card-body">
		<form action="{{isset($schedule) ? route('schedules.update',$schedule->id) :route('schedules.store')}}" method="POST">
			@csrf
			@if(isset($schedule))
			  @method('PUT')
			@endif
			<div class="form-group">
				<label for="day">Day</label>
				<input type="text" name="day" id="day" class="form-control" value="{{isset($schedule)? $schedule->day : ''}}">
			</div>
            <div class="form-group">
				<label for="date">Date</label>
				<input type="text" name="date" id="date" class="form-control" value="{{isset($schedule)? $schedule->date : ''}}">
			</div>

			<div class="form-group">
				<label for="start_time">Start Time</label>
				<input type="text" name="start_time" id="start_time" class="form-control" value="{{isset($schedule)? $schedule->start_time : ''}}">
			</div>

            <div class="form-group">
				<label for="end_time">End Time</label>
				<input type="text" name="end_time" id="end_time" class="form-control" value="{{isset($schedule)? $schedule->end_time : ''}}">
			</div>

			
			<div class="form-group">
				<button type="submit" class="btn btn-success">
					@if(isset($schedule))
					<i style="margin-right:3px;" class="fas fa-pen"></i>
  					   Update schedule
  					@else
					  <i style="margin-right:3px;"class="fa fa-plus-circle" aria-hidden="true"></i>
  					    Add schedule
  					@endif
				</button>
				
			</div>
		</form>
		</div>
	</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
	flatpickr('#start_time',{
		enableTime:true
    });
    flatpickr('#end_time',{
		enableTime:true
    });
    flatpickr('#date',{
		enableTime:true
	});
</script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection