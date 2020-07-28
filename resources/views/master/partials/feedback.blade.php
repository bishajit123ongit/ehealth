<section class="ftco-section testimony-section img" style="background-image: url({{asset('asset/images/bg_3.jpg')}};">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Read testimonials</span>
            <h2 class="mb-4">Our Patient Says</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
            @forelse($feedbacks as $feedback)
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url({{asset($feedback->user->image)}}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">{{$feedback->comments}}</p>
                    <p class="name">{{$feedback->user->name}}</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              @empty
              <h3 style="width:100%;" class="text-center">
              Patients does not given yet.
              </h3>

              @endforelse
              
            </div>
          </div>
        </div>
      </div>
    </section>