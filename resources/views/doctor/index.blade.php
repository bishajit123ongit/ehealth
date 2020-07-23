@extends('layouts.admin')

@section('content')
<div class="card card-default">
	<div class="card-header">
		Doctors
	</div>

	<div class="card-header">
	@if($doctors->count()>0)
	<table class="table">
		  <thead>
        <th>Id</th>
		  	<th>Name</th>
		  	<th>Email</th>
		  	<th>Type</th>
        <th>Qualification</th>
        <th>Mobile</th>
		  </thead> 
		  <tbody>
		  	@foreach($doctors as $doctor)
		  	<tr>
          <td>{{$doctor->id}}</td>
		  		<td>{{$doctor->name}}</td>
		  		<td>
		  			{{$doctor->email}}
		  		</td>
          <td>
		  			{{$doctor->type->name}}
		  		</td>
          <td>
		  			{{$doctor->qualification}}
		  		</td>
          <td>
		  			{{$doctor->mobile}}
		  		</td>
				  @if(auth()->user()->isAdmin())
		  		<td>
		  			<button class="btn btn-danger btn-sm" onclick="handleDelete({{$doctor->id}})"><i style="margin-right:3px;"  class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
		  		</td>
				  @endif
		  	</tr>
		  	@endforeach
		  </tbody>
			
		</table>
	@else
      <h3 class="text-center">No Doctors are available</h3>
	@endif

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="" method="POST" id="deleteDoctorForm">
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
		var form=document.getElementById('deleteDoctorForm');
		form.action='doctors/'+id
		$('#deleteModal').modal('show');
	}
</script>

@endsection