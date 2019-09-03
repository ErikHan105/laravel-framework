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
					<h5>Contact Us</h5>
				</a>

		   	</div>
		   	<div class="row menu-picture">
				<a href="{{ route('custom') }}" class="side-menu"><img src="{{ asset('images/pdf_download.jpg') }}" width="100%"></a>
			</div>
			<div class="row menu-picture">
				<a href="{{ route('products') }}" class="side-menu"><img src="{{ asset('images/products_.jpg') }}" width="100%"></a>
			</div>

		</div>
		<div class="col-8">
			<div class="tab-content" id="v-pills-tabContent">	      		
	      		<div class="" id="v-pills-who" role="tabpanel" aria-labelledby="v-pills-who-tab">
	      			<img src="{{ asset('images/contact.jpg') }}" width="100%" style="margin-bottom: 20px;">
	      			<h2>Contact us</h2>
	      			<p>{!! $companyinfo->name !!}</p>

					<p>Address: {!! $companyinfo->address !!}</p>

					<p>Zip code： {!! $companyinfo->zipcode !!}</p><br/>
					<h2>Products sales information</h2>
					<h4>America, East Europe</h4>
	      			<p>TEL:{!! $companyinfo->tel_america !!}</p>
            		<p>E-mail：{!! $companyinfo->email_america !!}</p><br/>
            		<h4>Asia, Africa, Oceania, West Europe</h4>
            		<p>TEL:{!! $companyinfo->tel_asia !!}</p>
            		<p>E-mail：{!! $companyinfo->email_asia !!}</p>
            		<h2>Invoice & Remittance</h2>
            		<p>Bank : {!! $companyinfo->bank !!}<br/>
						Bank Address : {!! $companyinfo->bank_address !!}<br/>
						Beneficiary : {!! $companyinfo->beneficiary !!}<br/>
						BeneficiaryAddress : ROOM674, NO.16, ZHONGCHUANGYUAN,  BINHAISI ROAD NORTH,   HANGZHOU BAY NEW ZONE,  NINGBO,  ZHEJIANG PROVINCE<br/>
						SWIFT Code : {!! $companyinfo->swiftcode !!}<br/>
						Account Number : {!! $companyinfo->account !!}
					</p>
	           	</div>

	    	</div>
	  	</div>
	</div>

</div>
@endsection

@section('css')
<link href="{{ asset('css/details.css') }}" rel="stylesheet">
@endsection