@extends('layouts.admin')

@section('content')

<div class="card card-default">
	<div class="card-header">
		Types
	</div>

	<div class="card-header">
	@if($types->count()>0)
	<table class="table">
		  <thead>
		  	<th>Name</th>
		  	<th>Doctor</th>
		  	<th></th>
		  </thead> 
		  <tbody>
		  	@foreach($types as $type)
		  	<tr>
		  		<td>{{$type->name}}</td>
		  		<td>
		  			{{$type->doctor()->count()}}
		  		</td>
		  		<td>
		  			<a href="{{route('types.edit',$type->id)}}" class="btn btn-info btn-sm "><i style="margin-right:3px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
		  			<button class="btn btn-danger btn-sm" onclick="handleDelete({{$type->id}})"><i style="margin-right:3px;" class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
		  		</td>
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No type, yet!</h3>
	@endif

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="POST" id="deleteTypeForm">
  	@csrf
  	@method('DELETE')
	    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-blod"> Are you sure want to delete type??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> No, Go Back</button>
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
		var form=document.getElementById('deleteTypeForm');
		form.action='types/'+id
		$('#deleteModal').modal('show');
	}
</script>

@endsection