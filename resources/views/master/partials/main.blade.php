<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 8801813673944</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">shahinulkabirtwhin1971@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="{{route('register')}}" class="mr-3">Sign Up</a><a href="{{route('login')}}">Sign In</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Ehealth</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#department-section" class="nav-link"><span>Department</span></a></li>
	          <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Doctors</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	          <li class="nav-item cta mr-md-2"><a data-toggle="modal" data-target="#exampleModalCenter" href="" class="nav-link">Appointment</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap js-fullheight" style="background-image: url('{{asset('asset/images/bg_3.jpg')}}');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<span class="subheading">Welcome to Ehealth</span>
	            <h1 class="mb-4">We are here <br>for your Care</h1>
	            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
	            <p><a data-toggle="modal" data-target="#exampleModalCenter1" href="#" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

@yield('content')


    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Majar gate, Bohordarhat, Chittagong</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+8801813673944</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">shahinulkabirtwhin1971@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">tuhinblog.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section img" style="background-image: url({{asset('asset/images/footer-bg.jpg')}};">
    	<div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">E-Health Care</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Departments</h2>
              <ul class="list-unstyled">
			  @foreach($types as $type)
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>{{$type->name}}</a></li>
				@endforeach
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Departments</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Doctors</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Pricing</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Emergency Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Outdoors Checkup</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>24 Hours Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Majer gate, Bahoddarhat, Chittagong</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 8801813673944</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">shahinulkabirtwhin1971@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This application is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://www.facebook.com/profile.php?id=100009185542916" target="_blank">Tuhin</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Schedule for appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  @auth
	  @if(auth()->user()->isDoctor())
	  <form action="{{route('schedules.store')}}" method="POST">
      <div class="modal-body">
	  
	
			@csrf
			@if(isset($schedule))
			  @method('PUT')
			@endif
			<div class="form-group">
				<label for="day">Day</label>
				<input type="text" name="day" id="day" class="form-control">
			</div>
            <div class="form-group">
				<label for="date">Date</label>
				<input type="text" name="date" id="date" class="form-control">
			</div>

			<div class="form-group">
				<label for="start_time">Start Time</label>
				<input type="text" name="start_time" id="start_time" class="form-control">
			</div>

     <div class="form-group">
				<label for="end_time">End Time</label>
				<input type="text" name="end_time" id="end_time" class="form-control">
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
	  @else
	   <strong style="margin-left: 16px;font-size: 20px;color: #2b2727;font-weight: 400;">Sorry, Only doctor can make an appointment</strong>
	   @endif
	   @else
	   <strong style="margin-left: 16px;font-size: 20px;color: #2b2727;font-weight: 400;">Please <a href="{{route('login')}}"><u> Login</u></a> first for create an appointment </strong>

	   @endauth
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div style="height:80%;" class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div style="max-height: calc(100% - 120px); overflow-y: scroll;" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  @auth
	  @if(auth()->user()->isDoctor())
    @if($bookings->count()>0)
	  

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
		  	@foreach($bookings as $row)
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
				  
		  	</tr>
		  	@endforeach
		  </tbody>
      
		</table>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    @else
      <h3 class="text-center">No appointment are available</h3>
	  @endif
	  @else
	   <strong style="margin-left: 16px;font-size: 20px;color: #2b2727;font-weight: 400;">Sorry, Only doctor can make an appointment</strong>
	   @endif
	   @else
	   <strong style="margin-left: 16px;font-size: 20px;color: #2b2727;font-weight: 400;">Please <a href="{{route('login')}}"><u> Login</u></a> first for create an appointment </strong>

	   @endauth
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
	flatpickr('#start_time',{
		enableTime:true
    });
    flatpickr('#end_time',{
		enableTime:true
    });
    flatpickr('#date',{
		enableTime:true
	});
</script>

  <script src="{{asset('asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('asset/js/popper.min.js')}}"></script>
  <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('asset/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('asset/js/aos.js')}}"></script>
  <script src="{{asset('asset/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('asset/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('asset/js/google-map.js')}}"></script>
  
  <script src="{{asset('asset/js/main.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/ffa467bf54.js"></script>
  </body>
</html>