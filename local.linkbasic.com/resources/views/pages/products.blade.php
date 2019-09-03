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
					<li class="category" data-category-id="{{ $category->id }}" id="product_category_{{ $category->id }}">{{ $category->name }}</li>
<!-- 						<ul class="list-unstyled subcategory">
						@foreach ($categories as $subcategory)						
							@if ($subcategory->parent_id == $category->id)
							<li data-category-id="{{ $subcategory->id }}">{{ $subcategory->name }}</li>
							@endif						
						@endforeach
						</ul> -->
					@endif
					@endforeach
				</ul>
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

		<div class="col-sm-8" id="view_products">
			<img src="{{ asset('images/products.jpg') }}" width="100%" style="margin-bottom: 20px;">
			<div class="row">
				<div class="col-sm-7">
					<h2>&nbsp;&nbsp;&nbsp;Products</h2>
				</div>
				<div class="col-sm-5 text-right">
					
				</div>
			</div>
			<div class="row">
				@if(isset($category_products))

				@foreach($category_products as $category_product)
		        <!-- <div class="col-md-6 col-lg-4 g-mb-30" style="margin-bottom: 3%; margin-top: 2%;">
		          <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5" style="border: 1px solid #dddddd; min-height: 100%; padding: 5%;">
		            <a href="" class="image_menu" data-category-id="{{ $category_product->id }}">
		            	<img class="d-inline-block img-fluid mb-4" src="/uploads/images/categories/{{ $category_product->getCategory($category_product->parent_id)->name }}/{{ $category_product->image }}"> -->
			            <!-- <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">{{ $category_product->name }}</h4> -->
			            <!-- <p>Finding your perfect product</p>
			            <span class="d-block g-color-primary g-font-size-16">$50.00</span> -->
			        <!-- </a>
		          </article>
		        </div> -->
		        @endforeach
		        <!-- <div class="row text-center" style="width:100%; margin-left: 3%;">
			        {{ $category_products->links() }}
			    </div> -->
		        @endif

		        <!-- @if(isset($products)) -->

				@foreach($products as $product)
		        <div class="col-md-6 col-lg-4 g-mb-30" style="margin-bottom: 3%; margin-top: 2%;">
		          <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5" style="border: 1px solid #dddddd; min-height: 100%; padding: 5%;">
		            <!-- <a href="{{ route('product.detail', [$product->id]) }}" class="product_detail" data-product-id="{{ $product->id }}"> -->
		            	<img class="d-inline-block img-fluid mb-4" src="/uploads/images/products/{{ $product->id }}/{{ $product->list_img }}">
			            <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">{{ $product->name }}</h4>
			            <h5><a href="{{ route('product.detail', [$product->id]) }}" style="color: #3250a2;">View Details</a></h5>
			            <!-- <p>Finding your perfect product</p>
			            <span class="d-block g-color-primary g-font-size-16">$50.00</span> -->
			        <!-- </a> -->
		          </article>
		        </div>
		        @endforeach
		        <div class="row text-center" style="width:100%; margin-left: 3%;">
			        {{ $products->links() }}
			    </div>
		        <!-- @endif -->

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

@endsection