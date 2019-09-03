<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logo_picture.png') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link rel='stylesheet' id='compiled.css-css'  href="{{ asset('css/compiled-4.8.8.min.css') }}" type='text/css' media='all' />
    @yield('css')
</head>
<body>
	<header id="header">    

	    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">

	    	<div class="container" style="padding-top: 2%;">
    			<img src="{{ asset('images/logo.png') }}">

	      		<div class="collapse navbar-collapse" id="navbarCollapse">
	        		<ul class="navbar-nav mr-auto ml-5">
			          	<li class="nav-item">
			          	  	<a class="nav-link" href="{{ route('home') }}">Home</a>
			          	</li>
			          	<li class="nav-item">
			            	<a class="nav-link" href="{{ route('about') }}">About us</a>
			          	</li>
			          	<li class="nav-item">
			            	<a class="nav-link" href="{{ route('home') }}">Products</a>
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
		      	</div>

	      	</div>
    	</nav>
	</header>
    

    <div id="app" style="margin-top: 6%;">
        @yield('content')
    </div>
    <footer id="footer" class="page-footer font-small blue pt-4"><!--Footer-->

        <!-- Footer Links -->
	  	<div class="container-fluid text-center text-md-left" style="padding: 0;">

		    <!-- Grid row -->
		    <div class="container" style="padding-bottom: 20px;">
			    <div class="row">
			      <!-- Grid column -->
			      	<div class="col-md-3 mt-md-0 mt-3">
			        	<!-- Content -->
			        	<h5 class="text-uppercase">Follow Us</h5>
			        	<div >
			        	<!--Twitter-->
							<img src="{{ asset('images/twitter.png') }}" width="15%">
							<!--Facebook-->
							<img src="{{ asset('images/fb.png') }}" width="15%">
							<!--WeChat-->
							<img src="{{ asset('images/weixin.png') }}" width="15%">
							<!--Weibo-->
							<img src="{{ asset('images/weibo.png') }}" width="15%">
						</div>
						<div class="mt-3">
							<img src="{{ asset('images/weixin_qrcode.jpg') }}" width="60%">
						</div>
			      	</div>
			      	<!-- Grid column -->
			      	<hr class="clearfix w-100 d-md-none pb-3">
			      	<!-- Grid column -->
			      	<div class="col-md-4 mb-md-0 mb-3">
			        	<!-- Links -->
			        	<h5 class="text-uppercase">Products & Solution</h5>
			       	 	<ul class="list-unstyled">
			          		<!-- <li>
			            		<a href="#!">Link 1</a>
			          		</li> -->
			        	</ul>
			      	</div>
			      	<hr class="clearfix w-100 d-md-none pb-3">
			      	<!-- Grid column -->
			      	<div class="col-md-2 mb-md-0 mb-3">
			        	<!-- Links -->
			        	<h5 class="text-uppercase">Quikc Links</h5>
			       	 	<ul class="list-unstyled">
			          		<!-- <li>
			            		<a href="#!">Link 1</a>
			          		</li> -->
			        	</ul>
			      	</div>
			      	<hr class="clearfix w-100 d-md-none pb-3">
			      	<!-- Grid column -->
			      	<div class="col-md-3 mb-md-0 mb-3">
			        	<!-- Links -->
			        	<h5 class="text-uppercase">Contact Us</h5>
			       	 	<ul class="list-unstyled">

			        	</ul>
			      	</div>
			      	<!-- Grid column -->
			    </div>
		    <!-- Grid row -->
		  	</div>
		  	<!-- Footer Links -->

		  	<!-- Copyright -->
		  	<div class="footer-copyright text-center py-3">© 2018 Copyright:
		    	<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
		  	</div>
		</div>
  <!-- Copyright -->
    </footer><!--/Footer-->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>
