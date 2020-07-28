@extends('layouts.admin')

@section('title')
 Create Doctor
@endsection
@section('content')
<div class="card card-default">
	<div class="card-header">
			@if(isset($doctor))
					Doctor Edit
			@else
			        Doctor Create
		    @endif
    
	</div>
	<div style="padding-bottom: 30px;" class="card-body">
		<form enctype="multipart/form-data" action="{{isset($doctor) ? route('doctors.update',$doctor->id) :route('doctors.store')}}" method="POST">
			@csrf
			@if(isset($doctor))
			  @method('PUT')
			@endif

            @if(isset($doctor))
			<div class="form-group">
			 <img style="width:130px; height:130px; border-radius:50%;"  src="{{asset($doctor->image)}}" alt="">
			</div>
			@endif
			<div class="form-group">
				<label for="name">Name</label>
                <input id="name" type="text" class="form-control" name="name"  @error('name') is-invalid @enderror"  value="{{isset($doctor)? $doctor->name : ''}}" required autocomplete="name" autofocus/>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
            </div>
			@if(!isset($doctor))
			<div class="form-group">
				<label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email"  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
            </div>
			

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password"  @error('password') is-invalid @enderror" required autocomplete="new-password" />
                                @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
            </div>
			@endif

			<div class="form-group">
			   <label for="type"> Type </label>
			   <select name="type" id="type" class="form-control">
			   @foreach($types ?? '' as $row)
                        <option value="{{$row->id}}"
						@if(isset($doctor))
                        @if($row->id == $doctor->type_id)
                        selected

                        @endif

                        @endif
						
						> {{$row->name}}
			            </option>
				@endforeach
			   
			   </select>
			</div>

			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="image" class="form-control">  
			</div>

			<div class="form-group">
				<label for="qualification">Qualification</label>
                <input type="text" id="qualification" name="qualification" value="{{isset($doctor)? $doctor->qualification : ''}}" class="form-control" required autocomplete="qualification">
			</div>
    
	
			<div class="form-group">
				<label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile"  value="{{isset($doctor)? $doctor->mobile : ''}}" class="form-control" required autocomplete="mobile">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success">
				
				  @if(isset($doctor))
					<i class="fas fa-pen"></i>
  					 Update
  					@else
					  <i style="margin-right:3px;"class="fa fa-plus-circle" aria-hidden="true"></i>
  					Create
  					@endif
				</button>
			</div>
		</form>
		</div>
	</div>

@endsection