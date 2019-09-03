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
					<h5>Company News</h5>
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
		<div class="col-sm-8">
			<img src="{{ asset('images/news.jpg') }}" width="100%" style="margin-bottom: 20px;">
			<h2>&nbsp;&nbsp;&nbsp;Company news</h2>	
			<ul class="list-unstyled">
				@foreach($news as $new)
				<li>
					<a href="/news/{{ $new->id }}" class="row" style="color: #000000; font-size: 18px">
						<label class="col-sm-9">
							<?php
								if(strlen($new->topic)>40)
									echo substr($new->topic,0,39).'...';
								else
									echo $new->topic;
							?>
						</label>
						<label class="col-sm-3" style="text-align: right;">
							<?php 
								$str = explode(' ', $new->created_at)[0];
								echo $str;
							?>
						</label>
					</a>
				</li>
				@endforeach
			</ul>
			{{ $news->links() }}
		</div>

	</div>
</div>
@endsection

@section('css')
<link href="{{ asset('css/details.css') }}" rel="stylesheet">
@endsection