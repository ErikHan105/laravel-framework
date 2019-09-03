@extends('admin.header')

@section('content')
<div class="card-body">
   <h2>Company Information</h2>
   <form method="POST" enctype="multipart/form-data" id="edit_companyinfo" action="{{ route('admin.companyinfo') }}">
      @csrf
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="who_ck" style="color: #000000;">Who we are</label>
         <div class="col-sm-8">
            <textarea id="who_ck" name="who_ck" class="ckeditor">{!! $companyinfo->who !!}</textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="profession_ck" style="color: #000000;">Professions</label>
         <div class="col-sm-8">
            <textarea id="profession_ck" name="profession_ck" class="ckeditor">{!! $companyinfo->profession !!}</textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="service_ck" style="color: #000000;">Service</label>
         <div class="col-sm-8">
            <textarea id="service_ck" name="service_ck" class="ckeditor">{!! $companyinfo->service !!}</textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="qualification_ck" style="color: #000000;">Qualification</label>
         <div class="col-sm-8">
            <textarea id="qualification_ck" name="qualification_ck" class="ckeditor">{!! $companyinfo->qualification !!}</textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="course_ck" style="color: #000000;">Course</label>
         <div class="col-sm-8">
            <textarea id="course_ck" name="course_ck" class="ckeditor">{!! $companyinfo->course !!}</textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="quality_ck" style="color: #000000;">Quality</label>
         <div class="col-sm-8">
            <textarea id="quality_ck" name="quality_ck" class="ckeditor">{!! $companyinfo->quality !!}</textarea>
         </div>
      </div>
      <div class="line"></div>

      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="name_com">Company Name</label>
         <div class="col-sm-8">
            <input id="name_com" type="text" class="form-control" name="name_com" value="{!! $companyinfo->name !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="address_com">Address</label>
         <div class="col-sm-8">
            <input id="address_com" type="text" class="form-control" name="address_com" value="{!! $companyinfo->address !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="zipcode">Zip code</label>
         <div class="col-sm-8">
            <input id="zipcode" type="text" class="form-control" name="zipcode" value="{!! $companyinfo->zipcode !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="tel_america">Tel America</label>
         <div class="col-sm-8">
            <input id="tel_america" type="text" class="form-control" name="tel_america" value="{!! $companyinfo->tel_america !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="email_america">Email America</label>
         <div class="col-sm-8">
            <input id="email_america" type="text" class="form-control" name="email_america" value="{!! $companyinfo->email_america !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="tel_asia">Tel Asia</label>
         <div class="col-sm-8">
            <input id="tel_asia" type="text" class="form-control" name="tel_asia" value="{!! $companyinfo->tel_asia !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="email_asia">Email Asia</label>
         <div class="col-sm-8">
            <input id="email_asia" type="text" class="form-control" name="email_asia" value="{!! $companyinfo->email_asia !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="bank">Bank</label>
         <div class="col-sm-8">
            <input id="bank" type="text" class="form-control" name="bank" value="{!! $companyinfo->bank !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="bank_address">Bank Address</label>
         <div class="col-sm-8">
            <input id="bank_address" type="text" class="form-control" name="bank_address" value="{!! $companyinfo->bank_address !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="beneficiary">Beneficiary</label>
         <div class="col-sm-8">
            <input id="beneficiary" type="text" class="form-control" name="beneficiary" value="{!! $companyinfo->beneficiary !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="swiftcode">Swift Code</label>
         <div class="col-sm-8">
            <input id="swiftcode" type="text" class="form-control" name="swiftcode" value="{!! $companyinfo->swiftcode !!}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="account">Account</label>
         <div class="col-sm-8">
            <input id="account" type="text" class="form-control" name="account" value="{!! $companyinfo->account !!}">
         </div>
      </div>     
      <div id='errors'>
      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul class="list-unstyled">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      </div>
      <div class="form-group row">
         <div class="col-sm-4 offset-sm-2">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="button" class="btn btn-primary" id="save_companyinfo">Save</button>
         </div>
      </div>  
   </form>
</div>




@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('ckeditor/samples/css/samples.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('ckeditor/samples/js/sample.js') }}"></script>
<script src="{{ asset('js/addnews.js') }}"></script>
<script type="text/javascript">

     
</script>

@endsection



 	

