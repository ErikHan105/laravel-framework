
<!DOCTYPE html>
<html>
<head>
    <title>Linkbasic Login</title>
   <!-- Favicon-->
   <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo_picture.png') }}">
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- Bootstrap CSS-->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!-- Font Awesome CSS-->
   <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
   <!-- Fontastic Custom icon font-->
   <link rel="stylesheet" href="{{ asset('assets/css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
   <link rel="stylesheet" href="{{ asset('assets/fonts/roboto.css') }}">
    <!-- jQuery Circle-->
   <link rel="stylesheet" href="{{ asset('assets/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
   <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
   <link rel="stylesheet" href="{{ asset('assets/css/style.default.css') }}" id="theme-stylesheet">
   @yield('css')
    <!-- Custom stylesheet - for your changes-->
   <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div class="page login-page">
        <div class="container">
            <div class="form-outer text-center d-flex align-items-center">
                <div class="form-inner">
                    <div class="logo text-uppercase"><span>Linkbasic</span><strong class="text-primary">SignUp</strong></div>
                    <p>-----------------------------------------------Company Introduction-----------------------------------------------</p>
                    <form method="POST" action="{{ route('register') }}" class="text-left form-validate">
                        @csrf
                        <div class="form-group-material">
                            <input id="name" type="text" name="name" required data-msg="Please enter your username" class="input-material @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                        </div>
                        <div class="form-group-material">
                            <input id="email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email">
                            @error('email')
                            <span role="alert" style="font-size:80%; color: #ff0000;">The same email aleady exists</span>
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="email" class="label-material">{{ __('E-Mail Address') }}</label>
                        </div>

                        <div class="form-group-material">
                            <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material @error('password') is-invalid @enderror" autocomplete="new-password">
                            @error('password')
                            <span role="alert" style="font-size:80%; color: #ff0000;">The password must be at least 6 letters</span>
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password" class="label-material">{{ __('Password') }}</label>
                        </div>
                        <div class="form-group-material">
                            <input id="password-confirm" type="password" name="password_confirmation" required data-msg="Please enter your password" class="input-material" autocomplete="new-password">

                            <label for="password-confirm" class="label-material">{{ __('Confirm Password') }}</label>
                        </div>
        
                        <div class="form-group text-center">
                            <input id="register" type="submit" value="Register" class="btn btn-primary">
                        </div>
                    </form>
                    <small>Already have an account? </small><a href="{{ route('login')}}" class="signup">Login</a>
                </div>
                <div class="copyrights text-center">
                    <p>Design by HSG105</a></p>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('assets/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('js/app.js') }}"></script>
<!--    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> -->   
   <!-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
   <!-- <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script> -->
    <script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
   <!-- <script src="{{ asset('assets/js/charts-home.js') }}"></script> -->
    <!-- Main File -->
    <script src="{{ asset('assets/js/front.js') }}"></script>
    @yield('js')
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>