
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
                    <div class="logo text-uppercase"><span>Linkbasic</span><strong class="text-primary">Login</strong></div>
                    <p>------------------------------------------Company Introduction------------------------------------------</p>
                    <form method="POST" class="text-left form-validate" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group-material">
                            <input id="email" type="email" name="email" required data-msg="Please enter your username" class="input-material @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email" class="label-material">{{ __('E-Mail Address') }}</label>
                        </div>
                        <div class="form-group-material">
                            <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material @error('password') is-invalid @enderror" autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password" class="label-material">{{ __('Password') }}</label>

                        </div>
            

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                        </div>
                    </form>
                    <small>Do not have an account? </small><a href="{{ route('register') }}" class="signup">Signup</a>
                </div>
                <div class="copyrights text-center">
                    <p>Design by HSG1005</p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
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