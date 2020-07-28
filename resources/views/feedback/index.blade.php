@extends('layouts.admin')
@section('title')
 Feedbacks
@endsection
@section('content')
<div class="card card-default">
	<div class="card-header">
		Feedback of patients
	</div>

	<div class="card-header">
	@if($feedbacks->count()>0)
	<table style="margin-bottom:20px;" class="table table-dark">
		  <thead>
            <th>Id</th>
			<th>Image</th>
		  	<th>Name</th>
		  	<th>Comments</th>
		  </thead> 
		  <tbody>
		  	@foreach($feedbacks as $feedback)
		  	<tr>
          <td>{{$feedback->id}}</td>
		  <td><img style="width:45px; height:45px; border-radius:50%;" src="{{asset($feedback->user->image)}}" alt=""></td>
		  		<td>{{$feedback->user->name}}</td>
		  		
                 <td>
		  			{{$feedback->comments}}
		  		</td>
				  @if(auth()->user()->isAdmin())
		  		<td>
		  			<button class="btn btn-danger btn-sm" onclick="handleDelete({{$feedback->id}})"><i style="margin-right:3px;" class="fas fa-trash-alt"></i>Delete</button>
		  		</td>
				  @endif
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No feedback yet!</h3>
	@endif

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="POST" id="deleteFeedback">
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
        <p class="text-center text-blod"> Are you sure want to delete feedback??</p>
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
		var form=document.getElementById('deleteFeedback');
		form.action='feedbacks/'+id
		$('#deleteModal').modal('show');
	}
</script>

@endsection