@extends('layouts.app')

@section('content')

<div id="maincarousel" class="carousel slide" data-ride="carousel" style="width: 100%; margin-top: 3%;">
  <!-- Indicators -->
  	<ol class="carousel-indicators">
    	<li data-target="#maincarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#maincarousel" data-slide-to="1"></li>
    	<li data-target="#maincarousel" data-slide-to="2"></li>
    	<li data-target="#maincarousel" data-slide-to="3"></li>
  	</ol>

  	<!-- Wrapper for slides -->
  	<div class="carousel-inner" role="listbox">
      <?php
        $num = 0;
      ?>
      @foreach($slides as $slide)
      <?php 
        $num = $num + 1;
      ?>
      @if($num == 1)
    	<div class="carousel-item active">
      		<img class="d-block w-100" src="{{ asset('uploads/images/slide/') }}/{{ $slide->file }}">
    	</div>
      @else
      <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('uploads/images/slide/') }}/{{ $slide->file }}">
      </div>
      @endif
      @endforeach

<!-- 		<div class="carousel-item">
      		<img class="d-block w-100" src="{{ asset('images/mainimages/main2.jpg') }}" alt="Chicago">
    	</div>

    	<div class="carousel-item">
      		<img class="d-block w-100" src="{{ asset('images/mainimages/main3.jpg') }}" alt="New York">
    	</div>

    	<div class="carousel-item">
      		<img class="d-block w-100" src="{{ asset('images/mainimages/main4.jpg') }}" alt="New York">
    	</div> -->
  	</div>

  	<!-- Left and right controls -->
  	<a class="carousel-control-prev" href="#maincarousel" data-slide="prev">
    	<span class="carousel-control-prev-icon"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#maincarousel" data-slide="next">
    	<span class="carousel-control-next-icon"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>

<div class="container main-block">

   <h2>Featured Products</h2></a>
   <div class="row style_featured">
    @foreach($products as $product)    
      <div class="col-md-4" >
         <div class="item-container" style="width: 80%; text-align: center;">
            <img src="/uploads/images/products/{{ $product->id }}/{{ $product->list_img }}" style="width: 80%;" />
            <h4 style="margin-top: 5%;">{{ $product->name }}</h4>

            <p>
               <span class="fa fa-bank "></span>
               {{ $product->model }}
            </p>

            <a href="{{ route('product.detail', [$product->id]) }}" class="btn btn-success" title="More">View details »</a>
          </div>
      </div>
    @endforeach

   </div>
   <div class="row"  style="border-bottom: 1px dashed #dddddd;">
     <h6 class="col-md-2 offset-10"><a href="{{ route('products') }}">View more products</a></h6>
   </div>
</div>
<div class="main-block-back">
   <div class="container main-block">
      <a href="{{ route('news') }}" style="color: #000;"><h2>Our News</h2></a>
      <div class="row">
        @foreach($news as $new)
        <?php

            $str_first = explode('src="/', $new->article);
            if(count($str_first) > 1)
             $src = (explode('"', $str_first[1])[0]);
            else
              $src = '';
        ?>
         <div class="col-sm-4">
            <div class="box">
              <a href="{{ route('news.detail', [$new->id]) }}" class="row" style="color: #000000; font-size: 18px">
               <img src="<?php echo $src; ?>">
               <div class="details">
                  <h4>{{ $new->created_at }}</h4>
                  <h3>{{ $new->topic }}</h3>
               </div>
             </a>
            </div>
         </div>
         @endforeach
         
         
      </div>
   </div>
</div>

@endsection

@section('css')
<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
@endsection