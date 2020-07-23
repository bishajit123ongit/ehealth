<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('public/frontend/registration/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('frontend/registration/css/style.css')}}">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
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

                    @isset($url)
                    <form class="signup-form" method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form class="signup-form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                    @csrf
                        @isset($url)
                        <h2 class="form-title">Doctor Signup</h2>
                        @else
                        <h2 class="form-title">User Signup</h2>
                         @endisset

                        <div class="form-group">
                            <input id="name" type="text" class="form-input" name="name" placeholder=Name @error('name') is-invalid @enderror"  value="{{ old('name') }}" required autocomplete="name" autofocus/>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder=Email @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder=Password @error('password') is-invalid @enderror" required autocomplete="new-password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                                @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror

                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation" id="password-confirm" placeholder=Confirm-password required autocomplete="new-password"/>
                        </div>
                        
                        @isset($url)
                        <div class="form-group">
                            <input type="text" id="qualification" placeholder=Qualification name="qualification" class="form-input" required autocomplete="qualification">
                        </div>

                        <div class="form-group">
                        <select  name="type" id="type" class="form-input">
                            <option value="mbbs"> MBBS</option>
                            <option value="mfill"> MFILL</option>
                        </select>               
                        </div>

                        <div class="form-group">
                            <input placeholder=Mobile no type="text" name="mobile" id="mobile" class="form-input" required autocomplete="mobile">
                        </div>

                        @endisset
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="{{route('login')}}" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('frontend/registration/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/registration/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>