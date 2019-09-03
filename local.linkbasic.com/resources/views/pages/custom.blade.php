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
					<h5>Download Zone</h5>
				</a>
				<a class="nav-link active" id="v-pills-who-tab" data-toggle="pill" href="#v-pills-who" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Application Scheme</h5>
				</a>
				<a class="nav-link" id="v-pills-profession-tab" data-toggle="pill" href="#v-pills-profession" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Products Catalog</h5>
				</a>
				<a class="nav-link" id="v-pills-service-tab" data-toggle="pill" href="#v-pills-service" role="tab" aria-controls="v-pills-news" aria-selected="false">
					<h5>Product coding principle</h5>
				</a>
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
	      			<img src="{{ asset('images/custom.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2 style="border-bottom: solid 1px #000000">Application Scheme</h2>
	      			
	           	</div>
	      		<div class="tab-pane fade" id="v-pills-profession" role="tabpanel" aria-labelledby="v-pills-profession-tab">
	      			<img src="{{ asset('images/custom.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2 style="border-bottom: solid 1px #000000">Products Catalog</h2>
	      			<ul compact="list-unstyled">
	      				@foreach($catalogs as $catalog)
	      				<li><a href="{{ route('download', [$catalog->id]) }}" style="color: #000000；"><span class="glyphicon glyphicon-download-alt"></span>Click to download <strong>{{ $catalog->getProductName($catalog->product_id)['name'] }}'s E-catalog: {{ $catalog->file }}</strong></a></li>
	      				@endforeach
	      			</ul>
	      			{{ $catalogs->links() }}
	           	</div>
	           	<div class="tab-pane fade" id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab">
	      			<img src="{{ asset('images/custom.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2 style="border-bottom: solid 1px #000000">Product coding principle</h2>
	      			
	           	</div>
	    	</div>
	  	</div>
	</div>

</div>
@endsection

@section('css')
<link href="{{ asset('css/details.css') }}" rel="stylesheet">
@endsection