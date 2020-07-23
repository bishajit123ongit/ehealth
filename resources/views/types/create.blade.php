@extends('layouts.admin')

@section('content')

<div class="card card-default">
	<div class="card-header">
		  @if(isset($type))
				 Edit type
		  @else
				 Create type
		  @endif
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
		<form action="{{isset($type)? route('types.update',$type->id):route('types.store')}}" method="POST">
			@csrf

			@if(isset($type))
			  @method('PUT')
			@endif

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" value="{{isset($type)? $type->name : ''}}">
			</div>

			<div class="form-group">
				<button class="btn btn-success">
						@if(isset($type))
						<i style="margin-right:3px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
							 Update type
					  	@else
						  <i style="margin-right:3px;"class="fa fa-plus-circle" aria-hidden="true"></i>
							 Add type
					  	@endif
			  </button>
			</div>
			
		</form>
	</div>
</div>

@endsection

