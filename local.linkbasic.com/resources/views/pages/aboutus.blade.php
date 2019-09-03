@extends('layouts.app')

@section('content')

<div class="back-image">
	<img src="{{ asset('images/bg_company.jpg') }}" width="100%">
</div>
<div class="container">
	<div class="row content">
		<div class="col-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link disabled" id="v-pills-aboutus-tab" data-toggle="pill" href="#v-pills-product" role="tab" aria-controls="v-pills-product" aria-selected="false">
					<h5>About Us</h5>
				</a>
				<a class="nav-link active" id="v-pills-who-tab" data-toggle="pill" href="#v-pills-who" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Who we are</h5>
				</a>
				<a class="nav-link" id="v-pills-profession-tab" data-toggle="pill" href="#v-pills-profession" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Our Professions</h5>
				</a>
				<a class="nav-link" id="v-pills-service-tab" data-toggle="pill" href="#v-pills-service" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Our itimate service</h5>
				</a>
				<a class="nav-link" id="v-pills-qualification-tab" data-toggle="pill" href="#v-pills-qualification" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Our Qualification</h5>
				</a>
				<a class="nav-link" id="v-pills-course-tab" data-toggle="pill" href="#v-pills-course" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Our Course</h5>
				</a>
				<a class="nav-link" id="v-pills-quality-tab" data-toggle="pill" href="#v-pills-quality" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Our Quality</h5>
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
	      		<div class="tab-pane fade active show" id="v-pills-who" role="tabpanel" aria-labelledby="v-pills-who-tab">
	      			<img src="{{ asset('images/about/who.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2>Who we are</h2>
	      			{!! $companyinfo->who !!}
	           	</div>
	      		<div class="tab-pane fade" id="v-pills-profession" role="tabpanel" aria-labelledby="v-pills-profession-tab">
	      			<img src="{{ asset('images/about/profession.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2>Our Qualification</h2>
	      			{!! $companyinfo->profession !!}
	           	</div>
	           	<div class="tab-pane fade" id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab">
	      			<img src="{{ asset('images/about/service.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2>Our intimate service</h2>
	      			{!! $companyinfo->service !!}
	           	</div>
	           	<div class="tab-pane fade" id="v-pills-qualification" role="tabpanel" aria-labelledby="v-pills-qualification-tab">
	      			<img src="{{ asset('images/about/qualification.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2>Our qualification</h2>
      				{!! $companyinfo->qualification !!}
	           	</div>
	           	<div class="tab-pane fade" id="v-pills-course" role="tabpanel" aria-labelledby="v-pills-course-tab">
	      			<img src="{{ asset('images/about/course.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2>Our course</h2>
	      			{!! $companyinfo->course !!}
	           	</div>
	           	<div class="tab-pane fade" id="v-pills-quality" role="tabpanel" aria-labelledby="v-pills-quality-tab">
	      			<img src="{{ asset('images/about/quality.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2>Our quality assurance</h2>
	      			{!! $companyinfo->quality !!}
	           	</div>
	    	</div>
	  	</div>
	</div>

</div>
@endsection
