<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <style>
		.list-group{
			overflow-y: scroll;
			height: 200px;
		}

        .wrapper{
            margin-left:0px;
        }
	</style>

</head>
<body>
    <div class="container wrapper">
        <div class="row" id="app">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">We Code Messenger
                        <i style="font-size:25px; float:right;" class="fa fa-phone" aria-hidden="true"></i>
                        <i style="font-size:25px; float:right; margin-right:25px;" class="fa fa-video-camera" aria-hidden="true"></i>
                        </div>
                        <div style="background:#bbc1c7;"class="card-body">
                        
                            <example-message :user="{{ auth()->user() }}"></example-message>
                        </div>
                    </div>
                </div>
                <div style="margin-top:65px;">
                  
                   <div>
                    <h4>Payment method</h4>
                    <p>Please select card type for payment installment</p>
                       <a href=""> <img style="width:90px;height:55px;" src="frontend/chat/image/visa.png" alt=""></a>
                       <a href=""> <img style="width:90px;height:55px;" src="frontend/chat/image/master.png" alt=""></a>
                       <a href=""><img style="width:90px;height:55px;" src="frontend/chat/image/maestero.png" alt=""></a>
                       <a href=""> <img style="width:90px;height:55px;" src="frontend/chat/image/paypal.png" alt=""></a>
                    </div>

                    @if(auth()->user()->isDoctor())

                    <div style="margin-top:20px;">
                       
                       <p>If you need any prescribe to the patients,<br> 
                       please write patient email for prescription send to the <br>email.</p>

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

                       <form action="{{route('prescription.email')}}" method="POST">
                       @csrf
                        <div class="form-group"> 
                          <input placeholder=Email class="form-control" type="text" name="email" id="email">
                        </div>

                        <div class="form-group">
                           <textarea placeholder=Prescription class="form-control" name="prescription" id="prescription" cols="5" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                           <textarea placeholder=Test class="form-control" name="test" id="test" cols="5" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                        
                           <button type="submit" class="btn btn-success"> <img style="width:15px;height:15px;" src="frontend/chat/image/rx.png" alt=""> Pescribe to patient</button>
                        </div>
                       </form>
                    </div>

                    @endif
                
                
                </div>
            </div>
        </div>



<script src="{{asset('js/app.js')}}"></script>
<script src="https://use.fontawesome.com/ffa467bf54.js"></script>
</body>
</html>