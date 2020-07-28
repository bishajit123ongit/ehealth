@extends('layouts.admin')
@section('title')
 Create Feedback
@endsection
@section('content')

<div class="card card-default">
	<div class="card-header">
	  Give Feedback
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
		<form action="{{route('feedbacks.store')}}" method="POST">
			@csrf

			<div class="form-group">
				<label for="comments">Comments</label>
				<textarea name="comments" id="commentd" cols="7" rows="7" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button class="btn btn-success">
				<i class="fas fa-comment-dots"></i>
					Feedback
				<!-- {{isset($tag)?'Update Tag' : 'Add Tag'}} --></button>
			</div>
			
		</form>
	</div>
</div>

@endsection

