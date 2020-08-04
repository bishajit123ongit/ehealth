@extends('master.partials.main')
@section('title')
 Ehealth
@endsection
@section('content')
<section style="margin-top:50px;" class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	@include('master.partials.department')
</section>
		
		<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Qualified Doctors</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	

				<div class="row">
        @forelse($doctors as $doctor)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url('{{asset($doctor->image)}}')"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">{{$doctor->name}}</h3>
								<span class="position mb-2">{{$doctor->type->name}}</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
                  @if(auth()->user())
                  <p><a href="{{ route('doctor.book',$doctor->id)}}" class="btn btn-primary">Book now</a></p>
                 @else
                 <p><a href="{{ route('login')}}" class="btn btn-primary">Book now</a></p>
                 @endif

	              </div>
							</div>
						</div>
					</div>
          @empty 
            <h3 style="width:100%;" class="text-center">
          
              No Doctor available.
            </h3>
          @endforelse
			</div>
      {{$doctors->links()}}
		</section>

		@include('master.partials.sidebar')

    @include('master.partials.feedback')



@endsection