<!DOCTYPE html>
<html>
<head>
	<title>Linkbasic admin panel</title>
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
   <nav class="side-navbar">
      <div class="side-navbar-wrapper">
         <!-- Sidebar Header    -->
         <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center">
               <!-- <img src="" alt="person" class="img-fluid rounded-circle"> -->
               <h2 class="h5">Linkbasic</h2><span>Management</span>
            </div>     
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>L</strong><strong class="text-primary">B</strong></a></div>
            </div>
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
               <h5 class="sidenav-heading">Choose a menu</h5>
               <ul id="side-main-menu" class="side-menu list-unstyled">
                  <li><a href="{{ route('admin.add') }}"> <i class="icon-form"></i>Add Products</a></li>
                  <li><a href="{{ route('admin.productlist') }}"> <i class="icon-grid"></i>Product List</a></li>
                  <li><a href="{{ route('admin.addnews') }}"> <i class="icon-form"></i>Add News</a></li>
                  <li><a href="{{ route('admin.newslist') }}"> <i class="icon-grid"></i>News List</a></li>
                  <li><a href="{{ route('admin.companyinfo') }}"> <i class="icon-grid"></i>Company Information</a></li>
                  <li><a href="{{ route('admin.slideimage') }}"> <i class="icon-grid"></i>Slide Images</a></li>                  
               </ul>
            </div>
         </div>
      </div>
   </nav>
   <div class="page">
      <!-- navbar-->
      <header class="header">
         <nav class="navbar">
            <div class="container-fluid">
               <div class="navbar-holder d-flex align-items-center justify-content-between">
                  <div class="navbar-header">
                     <a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">LinkBasic Admin Panel</strong></div>
                     </a>
                  </div>
                  <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                  <!-- Notifications dropdown-->
                
                  <!-- Log out-->
                     <li class="nav-item"> <span class="d-none d-sm-inline-block">
                      <a class="nav-link logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}<i class="fa fa-sign-out"></i>
                      </a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <div id="admin_content">
         @yield('content')
      </div>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>LINKBASIC &copy; 2002~</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="#" class="external">HSG1005</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
 	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery.form.js') }}"></script>
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
   
</body>
</html>

