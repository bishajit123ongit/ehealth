<!DOCTYPE html>
<html>
<head>
<title>Login Criteria</title>
<style type="text/css">
    .color{
    color:white;
}
.liststyle{
    color: white;
    display: inline-block;
    width: 89px;
    vertical-align: top;
}
.imgstyle{
    float: right;
    padding-right: 25px;
    margin-top: 10px;
    width: 40px;
    height: 40px;
}
</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

     <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Custom Theme files -->
    <link href="{{asset('frontend/login/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('frontend/login/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->

    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 

    <div class="bg-layer">
        
        <h1><a style="margin-left:40px;"class="color" href="{{url('/')}}">Ehealth</a> 
            
        </h1>

        <div class="header-main">
        <div class="signup-content">
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
            <div class="main-icon">
                <span class="fa fa-eercast"></span>
            </div>
            <div class="header-left-bottom">
                    @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                    @csrf
                    <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input id="email" type="email" placeholder=Email name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                    </div>
                    @error('email')
                                    <span class="invalid-feedback color" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror


                    <div class="icon1">
                        <span class="fa fa-lock"></span>
                        <input id="password" type="password" placeholder=Password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                        
                    </div>
                    @error('password')
                                    <span class="invalid-feedback color" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                   @enderror

                    <div class="login-check">
                         <label class="checkbox"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i> </i> Remember me</label>
                    </div>

                    <div class="bottom">
                        <button type="submit" class="btn"><i style="margin-right:5px;"class="fa fa-sign-in" aria-hidden="true"></i>Login</button>
                    </div>
                    <div class="links">
                        @if (Route::has('password.request'))
                        <p><a href="{{ route('password.request') }}">Forget Password</a></p>
                        @endif
                        <p class="right"><a href="{{ route('register') }}">NEW USER? REGISTER</a></p>
                        <div class="clear"></div>
                    </div>
                </form> 
            </div>
            <div class="social">
                <ul>
                    <li>Or Login Using : </li>
                    <li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
                </ul>
            </div>


           

        </div>
        
        <!-- copyright -->
        <div class="copyright">
            <p>© 2020 Slide Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
        </div>
        <!-- //copyright --> 
    </div>
</div>  
<!-- //main -->

<script type="text/javascript">
    document.getElementById("btnen").addEventListener("click", myFunction);

        function myFunction() {
            document.getElementById("btnbn").style.display="block";
            document.getElementById("btnen").style.display="none";
    }
</script>

</body>
</html>
