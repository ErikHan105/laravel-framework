@extends('layouts.app')

@section('content')

<div class="back-image">
	<img src="{{ asset('images/bg_news.jpg') }}" width="100%">
</div>
<div class="container">
	
	<div class="row content">
		<div class="col-sm-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link disabled" id="v-pills-product-tab" data-toggle="pill" href="#v-pills-product" role="tab" aria-controls="v-pills-product" aria-selected="false">
					<h5>Products</h5>
				</a>

				<ul class="list-unstyled" style="margin-top:1%">
					@foreach ($categories as $category)
					@if ($category->parent_id == 0)
					<li class="category" data-category-id="{{ $category->id }}">{{ $category->name }}</li>
						<ul class="list-unstyled subcategory">
						@foreach ($categories as $subcategory)						
							@if ($subcategory->parent_id == $category->id)
							<li data-category-id="{{ $subcategory->id }}">{{ $subcategory->name }}</li>
							@endif						
						@endforeach
						</ul>
					@endif
					@endforeach
				</ul>
		   	</div>

		</div>
		<div class="col-sm-8" id="view_products">
			
			<div class="row" style="border-bottom: 1px solid #dddddd;margin-bottom: 20px;">
				<img src="/uploads/images/products/{{ $product->id }}/{{ $product->detail_img }}" width="" style="margin-bottom: 10px; max-width: 100%">
			</div>
			<div >
				<ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="description-tab-md" data-toggle="tab" href="#description-md" role="tab" aria-controls="home-md"
				      aria-selected="true">Product description</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="technical-tab-md" data-toggle="tab" href="#technical-md" role="tab" aria-controls="profile-md"
				      aria-selected="false">Technical specification</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="order-tab-md" data-toggle="tab" href="#order-md" role="tab" aria-controls="contact-md"
				      aria-selected="false">Order information</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="catalog-tab-md" data-toggle="tab" href="#catalog-md" role="tab" aria-controls="contact-md"
				      aria-selected="false">E-catalog download</a>
				  </li>
				</ul>
				<div class="tab-content card pt-5" id="myTabContentMD">
				  <div class="tab-pane fade show active" id="description-md" role="tabpanel" aria-labelledby="description-tab-md">
				    {!! $product->product_desc !!}
				  </div>
				  <div class="tab-pane fade" id="technical-md" role="tabpanel" aria-labelledby="technical-tab-md">
				    {!! $product->technical !!}
				  </div>
				  <div class="tab-pane fade" id="order-md" role="tabpanel" aria-labelledby="order-tab-md">
				    {!! $product->order_info !!}
				  </div>
				  <div class="tab-pane fade" id="catalog-md" role="tabpanel" aria-labelledby="contact-tab-md">
				  	
				  	<a href="{{ route('download', [$product->id]) }}" style="color:#000000;">{{ $product->name }}</a>
				  </div>
				</div>
			</div>

		</div>

	</div>
</div>
@endsection

@section('css')
<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/details.css') }}" rel="stylesheet">
<link href="{{ asset('css/products.css') }}" rel="stylesheet">
@endsection

@section('js')
<script src="{{ asset('js/products.js') }}"></script>
@endsection