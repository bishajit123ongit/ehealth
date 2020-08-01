@extends('layouts.admin')

@section('title')
 Schedules
@endsection
@section('content')
<div class="card card-default">
	<div class="card-header">
		Schedules
	</div>

	<div class="card-header">
	@if($schedules->count()>0)
	<table style="margin-bottom:20px;" class="table table-dark">
		  <thead>
            <th>Id</th>
			<th>Day</th>
		  	<th>Date</th>
		  	<th>Start Time</th>
		  	<th>End Time</th>
		  </thead> 
		  <tbody>
		  	@foreach($schedules as $schedule)
		  	<tr>
               <td>{{$schedule->id}}</td>
		  
		  		<td>{{$schedule->day}}</td>
		  		<td>
		  			{{$schedule->date}}
		  		</td>
                 <td>
		  			{{$schedule->start_time}}
		  		</td>
                <td>
		  			{{$schedule->end_time}}
		  		</td>
				 
		  		<td>
				  <a href="{{route('schedules.edit',$schedule->id)}}" class="btn btn-info btn-sm "><i style="margin-right:3px;" class="far fa-edit"></i>Edit</a>
		  			<button class="btn btn-danger btn-sm" onclick="handleDelete({{$schedule->id}})"><i style="margin-right:3px;"  class="fas fa-trash-alt"></i>Delete</button>
		  		</td>
				
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No schdules are available</h3>
	@endif

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="POST" id="deleteScheduleForm">
  	@csrf
  	@method('DELETE')
	    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-blod"> Are you sure want to delete schedule??</p>
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
		var form=document.getElementById('deleteScheduleForm');
		form.action='schedules/'+id
		$('#deleteModal').modal('show');
	}
</script>

@endsection