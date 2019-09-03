@extends('layouts.app')

@section('content')
<div class="back-image">
	<img src="{{ asset('images/bg_company.jpg') }}" width="100%">
</div>
<div class="container">
	<div class="row content">
		<div class="col-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link disabled" id="v-pills-product-tab" data-toggle="pill" href="#v-pills-product" role="tab" aria-controls="v-pills-product" aria-selected="false">
					<h5>Support</h5>
				</a>
				<a class="nav-link" id="v-pills-app-tab" data-toggle="pill" href="#v-pills-app" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Application</h5>
				</a>
				<a class="nav-link" id="v-pills-video-tab" data-toggle="pill" href="#v-pills-video" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Video List</h5>
				</a>
				<a class="nav-link active" id="v-pills-technical-tab" data-toggle="pill" href="#v-pills-technical" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Technical</h5>
				</a>

		   	</div>
		   	<div class="row menu-picture">
				<a href="{{ route('custom') }}" class="side-menu"><img src="{{ asset('images/pdf_download.jpg') }}" width="100%"></a>
			</div>
			<div class="row menu-picture">
				<a href="{{ route('products') }}" class="side-menu"><img src="{{ asset('images/products_.jpg') }}" width="100%"></a>
			</div>
			<div class="row menu-picture">
				<a href="{{ route('contact') }}" class="side-menu"><img src="{{ asset('images/side-contact.jpg') }}" width="100%"></a>
			</div>
		</div>
		<div class="col-8">
			<div class="tab-content" id="v-pills-tabContent">	      		
	      		<div class="tab-pane fade" id="v-pills-app" role="tabpanel" aria-labelledby="v-pills-app-tab">
	      			<img src="{{ asset('images/support.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2 style="border-bottom: 1px solid #dddddd">Application scheme</h2>
	           	</div>
	      		<div class="tab-pane fade" id="v-pills-video" role="tabpanel" aria-labelledby="v-pills-video-tab">
	      			<img src="{{ asset('images/support.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2>Video List</h2>
	      			<div class="row">
	      				<div class="col-sm-6">
	      					<div class="text-center">
		      					<img src="{{ asset('images/videos/1.png') }}" class="img-fluid" >
		      					<img src="{{ asset('images/videos/play.png') }}" width="20%" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
		      				</div>
	      					<p class="video-description">Cat. 6 Keystones installation - UTP</p>
	      				</div>
	      				<div class="col-sm-6">
	      					<div class="text-center">
		      					<img src="{{ asset('images/videos/2.png') }}" class="img-fluid" >
		      					<img src="{{ asset('images/videos/play.png') }}" width="20%" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">	
		      				</div>
		      				<p class="video-description">NCB NETWORK SERVER CABINETS</p>
	      				</div>
	      				<div class="col-sm-6">
      						<div class="text-center">
		      					<img src="{{ asset('images/videos/3.png') }}" class="img-fluid" >
		      					<img src="{{ asset('images/videos/play.png') }}" width="20%" class="play-btn" data-toggle="modal" data-target="#exampleModalCenter">
		      				</div>
	      					<p class="video-description">CAT 6A unshielded tool-less modular plug</p>
	      				</div>
	      			</div>	      			
	           	</div>
	           	<div class="tab-pane fade active show" id="v-pills-technical" role="tabpanel" aria-labelledby="v-pills-technical-tab">
	      			<img src="{{ asset('images/support.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2 style="border-bottom: 1px solid #dddddd">Technical support</h2>
	      			@if(count($errors) > 0)
	      			<div class="alert alert-danger">
	      				<button type="button" class="close" data-dismiss="alert">x</button>
	      				<ul style="list-unstyled">
	      					@foreach($errors->all() as $error)
	      						<li>{{ $error }}</li>
	      					@endforeach
	      				</ul>
	      			</div>
	      			@endif

	      			<form method="POST" action="{{ route('sendemail') }}" id="sendemail_form">
	      			<h3>Leave a message:</h3>	      					      				
	      					@csrf
      					<div class="row" style="margin-bottom: 3%;">
      						<label class="col-sm-3 text-right">
      							Name: <span style="color: #ff0000;">*</span>
      						</label>
      						<div class="col-sm-9">
	      						<input type="text" name="name" class="form-control" value="{{ $user ? $user->name :''}}">
	      					</div>
	      				
	      				</div>
	      				<div class="row" style="margin-bottom: 3%;">
      						<label class="col-sm-3 text-right">
      							Email: <span style="color: #ff0000;">*</span>
      						</label>
      						<div class="col-sm-9">
	      						<input type="text" name="email" class="form-control" value="{{ $user ? $user->email :''}}">
	      					</div>
	      				
	      				</div>
	      				<div class="row" style="margin-bottom: 3%;">
      						<label class="col-sm-3 text-right">
      							Address: &nbsp;&nbsp;
      						</label>
      						<div class="col-sm-9">
	      						<input type="text" name="address" class="form-control">
	      					</div>
	      				
	      				</div>
	      				<div class="row" style="margin-bottom: 3%;">
      						<label class="col-sm-3 text-right">
      							Zip code:&nbsp;&nbsp; 
      						</label>
      						<div class="col-sm-9">
	      						<input type="text" name="zipcode" class="form-control">
	      					</div>
	      				
	      				</div>
	      				<div class="row" style="margin-bottom: 3%;">
      						<label class="col-sm-3 text-right">
      							Your requirement: <span style="color: #ff0000;">*</span>
      						</label>
      						<div class="col-sm-9">
	      						<textarea class="form-control" name="message"></textarea>
	      					</div>
	      				
	      				</div>
	      				<div class="row" style="margin-bottom: 3%;">
      						<label class="col-sm-3 text-right">
      							
      						</label>
      						<div class="col-sm-9">
	      						<button class="btn btn-primary" type="submit" id="send">Send message</button>
	      					</div>
	      				
	      				</div>
	      			</form>
	           	</div>
	    	</div>
	  	</div>
	</div>

</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
    	<div class="modal-content">
    		<video src="http://www.linkbasic.com/cn/images/type6.mp4" controls autoplay loop width="100%"></video>
    	</div>
  	</div>
</div>
@endsection


@section('css')
<link href="{{ asset('css/details.css') }}" rel="stylesheet">
@endsection
@section('js')

<script src="{{ asset('js/jquery.form.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('js/sendemail.js') }}"></script> -->
@endsection