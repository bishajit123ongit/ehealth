
<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url('{{asset('asset/images/dept-1.jpg')}}');"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
                    @foreach($types as $type)
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
                                    </div>
                                    
    								<h3><a href="{{route('welcome.type',$type->id)}}">{{$type->name}}</a></h3>
                                    <p>Far far away, behind the word mountains</p>
                                    
    							</div>
    						</div>
                        </div>
                        @endforeach
    				</div>
    			</div>
    		</div>
    	</div>