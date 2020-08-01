@extends('layouts.admin')
@section('title')
 Appointments
@endsection
@section('content')
<div class="card card-default">
	<div class="card-header">
		Appointment
	</div>

	<div class="card-header">
	@if($appointments->count()>0)
	<table class="table">
		  <thead>
            <th>Status</th>
		  	<th>Id</th>
		  	<th>User Id</th>
		  	<th>Schedule Id</th>
            <th>Start time</th>
            <th>End Time</th>
		  </thead> 
		  <tbody>
		  	@foreach($appointments as $row)
		  	<tr>
            <td>
              
			  @if($row->status==0)
			  <i style="margin-right:3px;" class="fa fa-times" aria-hidden="true"></i>
			  <a href="{{route('appointment.change-status',$row->id)}}">Accept</a>
                
                @else
				<i class="fa fa-check" aria-hidden="true"></i>
				<a href="{{route('appointment.change-status',$row->id)}}">Accepted</a>
				
                @endif
               
            </td>
		  	<td>{{$row->id}}</td>
		  	<td>{{$row->user_id}}</td>
            <td>{{$row->schedule_id}}</td>
            <td>{{$row->schedule->start_time}}</td>
            <td>{{$row->schedule->end_time}}</td>

			@if(auth()->user()->isDoctor())
		  		<td>
		  			<button class="btn btn-danger btn-sm" onclick="handleDelete({{$row->id}})"><i style="margin-right:3px;"  class="fas fa-trash-alt"></i>Delete</button>
		  		</td>
				  @endif
				  
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No appointment are available</h3>
	@endif
    </div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <form action="" method="POST" id="deleteAppointment">
		@csrf
		@method('DELETE')
	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Doctor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-blod"> Are you sure want to delete doctor??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
      </div>
    </div>
    </form>
    </div>
</div>
</div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">
	function handleDelete(id)
	{
		var form=document.getElementById('deleteAppointment');
		form.action='bookings/'+id
		$('#deleteModal').modal('show');
	}
</script>

@endsection