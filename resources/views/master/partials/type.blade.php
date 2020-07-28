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
	                            </div>
							</div>
						</div>
					</div>
                    @empty 
                    <h3 style="width:100%;" class="text-center">
                 
                      No doctor of this department.
                    </h3>

          @endforelse
			</div>
      {{$doctors->links()}}
		</section>

    @include('master.partials.sidebar')


    <!--<section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">Gets Every Single Updates Here</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('asset/images/image_1.jpg')}};">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('asset/images/image_2.jpg')}};">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('asset/images/image_3.jpg')}};">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('asset/images/image_4.jpg')}};">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('asset/images/image_5.jpg')}};">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('asset/images/image_6.jpg')}};">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>
        </div>
      </div>
    </section>-->

    
    @include('master.partials.feedback')

@endsection