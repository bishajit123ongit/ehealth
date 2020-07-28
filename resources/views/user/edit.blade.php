@extends('layouts.admin')
@section('title')
 Edit User
@endsection
@section('content')

            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">

                   <form action="{{route('users.update-profile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <img style="width:130px; height:130px; border-radius:50%;" src="{{asset(auth()->user()->image)}}" alt="">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                    <label for="image">Image</label>
				    <input type="file" name="image" id="image" class="form-control">
                    
                    </div>

                    <div class="form-group">
                        <label for="about">About me</label>
                        <textarea name="about" id="about" cols="5" rows="5" class="form-control">{{$user->about}}</textarea>
                        
                    </div>


                    <button style="margin-bottom:35px;" type="submit" class="btn btn-success"><i style="margin-right:5px;" class="fa fa-pencil" aria-hidden="true"></i>Update</button>
                       
                   </form>
                </div>
            </div>
  
@endsection
