<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo_picture.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/link.js') }}" defer></script>
    <script src="{{ asset('js/products.js') }}"></script>
    @yield('js')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" width="100%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news') }}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('support') }}">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('custom') }}">Customer Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </form>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer id="footer" class="page-footer font-small blue pt-4"><!--Footer-->

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left" style="padding: 0;">

            <!-- Grid row -->
            <div class="container" style="padding-bottom: 20px;">
                <div class="row border-line" style="margin-top:1%;">
                  <!-- Grid column -->
                    <div class="col-md-3 mt-md-0 mt-3">
                        <!-- Content -->
                        <h6 class="text-uppercase border-line"><a href="{{ route('about') }}">About Us >></a></h6>
                        <!-- <div >
                            <img src="{{ asset('images/twitter.png') }}" width="15%">
                            <img src="{{ asset('images/fb.png') }}" width="15%">
                            <img src="{{ asset('images/weixin.png') }}" width="15%">
                            <img src="{{ asset('images/weibo.png') }}" width="15%">
                        </div>
                        <div class="mt-3">
                            <img src="{{ asset('images/weixin_qrcode.jpg') }}" width="60%">
                        </div> -->
                        <ul class="list-unstyled">
                            <li><a href="" data-tab-id="v-pills-who-tab" class="footer-about">Who we are >></a></li>
                            <li><a href="" data-tab-id="v-pills-profession-tab" class="footer-about">Our Professions >></a></li>
                            <li><a href="" data-tab-id="v-pills-service-tab" class="footer-about">Our intimate service >></a></li>
                            <li><a href="" data-tab-id="v-pills-qualification-tab" class="footer-about">Our qualification >></a></li>
                            <li><a href="" data-tab-id="v-pills-course-tab" class="footer-about">Our course >></a></li>
                            <li><a href="" data-tab-id="v-pills-quality-tab" class="footer-about">Our quality assurance >></a></li>
                        </ul>


                    </div>
                    <!-- Grid column -->
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase border-line"><a href="{{ route('products') }}">Products >></a></h6>
                        <ul class="list-unstyled">
                            <li><a href="" data-tab-id="product_category_1" class="footer-product">Copper solution >></a></li>
                            <li><a href="" data-tab-id="product_category_4" class="footer-product">Fiber optic solution >></a></li>
                            <li><a href="" data-tab-id="product_category_5" class="footer-product">Network cabinet >></a></li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase border-line"><a href="{{ route('news') }}">News >></a></h6>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('news') }}">Company news >></a></li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase border-line"><a href="{{ route('support') }}" >Support >></a></h6>
                        <ul class="list-unstyled">
                            <li><a href="" data-tab-id="v-pills-app-tab" class="footer-support">Application scheme >></a></li>
                            <li><a href=""  data-tab-id="v-pills-technical-tab" class="footer-support">Technical suppot access >></a></li>
                        </ul>
                    </div>
                    <!-- Grid column -->
                </div>
                <div class="row" style="margin-top:1%;">
                  <!-- Grid column -->
                    <div class="col-md-8 mt-md-0 mt-3">
                        <!-- Content -->
                        <p>Visit linkbasic's online service.<br/>
                        Copyright is reserved, and no reproduction is allowed without permission.</p>
                    </div>
                    <!-- Grid column -->
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-2 mb-md-0 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase border-line"><a href="{{ route('custom') }}">Customer service >></a></h6>
                    </div>
                    <div class="col-md-2 mb-md-0 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase border-line"><a href="{{ route('contact') }}">Contact us >></a></h6>
                    </div>
                    <!-- Grid column -->
                </div>
            <!-- Grid row -->
            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:&nbsp;
                Designed by HSG1005
            </div>
        </div>
  <!-- Copyright -->
    </footer><!--/Footer-->
    </div>
</body>
</html>
