<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('frontend/booking/css/bootstrap.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('frontend/booking/css/style.css')}}" />

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">

			
			<div class="container">
			<div class="row">
					<div style="color:white;bottom:140px; right:80px;" class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="text pt-3 text-center">
							<img style="width:150px; height:150px;border-radius:50%;" src="{{asset($doctor->image)}}" alt="">
								<h3 class="mb-2">{{$doctor->name}}</h3>
								<span class="position mb-2">{{$doctor->type->name}}</span>
								
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>

	                          </div>
							</div>
						</div>
					</div>

				<div class="row">
					<div style="float:right;" class="booking-form">
						<div class="form-header">
							<h1> <a style="color:white;" href="{{route('welcome')}}">Ehealth</a> </h1>
						</div>
						@if(session()->has('success'))
							<div class="alert alert-success">
							{{session()->get('success')}}
							</div>
						@endif

						@if(session()->has('error'))
							<div class="alert alert-danger">
							{{session()->get('error')}}
							</div>
						@endif

						@if($doctorSchedule->count()>0)
						<table style="background: #9ea6a9;border-radius:10px;" class="table table-dark">
						<thead>
							<th>Day</th>
							<th>Date</th>
							<th>Start time</th>
							<th>End time</th>
						</thead>
						<tbody>
						@foreach($doctorSchedule as $schedule)
						<tr style="font-family: sans-serif; font-size:15px;">
						  <td>
						   {{$schedule->day}}
						  </td>
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
						  <p><a style="margin-top:-5px; border-radius:10px;"href="{{route('booking.create',$schedule->id)}}" class="btn btn-sm btn-primary">Book now</a></p>
						  </td>
						</tr>
						@endforeach
						
						</tbody> 
							
						</table>
						@else
						<h3 style="color:white;" class="text-center">No schedule are available</h3>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>