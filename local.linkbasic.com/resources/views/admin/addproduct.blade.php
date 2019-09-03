@extends('admin.header')

@section('content')
<div class="card-body">
   <form method="POST" enctype="multipart/form-data" id="product_add" action="{{ $product ? route('admin.add', [$product->id]): route('admin.add') }}">
      @csrf
      <input type="hidden" value="{{ $product ? $product->id : '' }}" name="id">
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="name">Name</label>
         <div class="col-sm-8">
            <input id="name" type="text" class="form-control" name="product[name]" value="{{ $product ? $product->name : '' }}">
         </div>
      </div>

      <div class="line"></div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="model">Model</label>
         <div class="col-sm-8">
            <input id="model" type="text" class="form-control" name="product[model]" value="{{ $product ? $product->model : '' }}"><span class="text-small text-gray help-block-none"></span>
         </div>
      </div>


      <div class="form-group row">
         <!-- <input id="category" type="hidden" name="product[category]" value="{{ $product ? $product->category : '' }}"> -->
         <label class="col-sm-2 form-control-label text-right">Category</label>
         <div class="col-sm-8 mb-3">
            <select class="form-control" name="product[category]">
                  <option value="{{ $product ? $product->category : '' }}">{{ $product ? $product->getCategory($product->category)->name : 'Choose category' }}</option>
               @foreach ($categories as $category)  
                  <option value="{{ $category->id }}">{{ $category->name }}</option>                          
               @endforeach
               
            </select>
            <!-- <label id="selected_cat">Selected Category:{{ $product ? $product->getCategory($product->category)->name : '' }}</label>
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
            @endforeach -->
            </ul>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="html_name">Html Name</label>
         <div class="col-sm-8">
            <input id="html_name" type="text" class="form-control" name="product[html_name]" value="{{ $product ? $product->html_name : '' }}">
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="page_title">Page Title</label>
         <div class="col-sm-8">
            <input id="page_title" type="text" class="form-control" name="product[page_title]" value="{{ $product ? $product->page_title : '' }}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="keyword">Search Keyword</label>
         <div class="col-sm-8">
            <input id="keyword" type="text" class="form-control" name="product[keyword]" value="{{ $product ? $product->search_keyword : '' }}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="page_desc">Page Description</label>
         <div class="col-sm-8">
            <input id="page_desc" type="text" class="form-control" name="product[page_desc]" value="{{ $product ? $product->page_desc : '' }}">
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right">List Image</label>
         <div class="col-sm-2 imgUp">
            <div class="imagePreview" style="background-image: url({{ $product ? '/uploads/images/products/'.$product->id.'/'.$product->list_img : '' }});"></div>
            <label class="btn btn-dark">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="list_img"></label>    
         </div>
          <label class="col-sm-2 form-control-label text-right">Detail Image</label>
         <div class="col-sm-2 imgUp">
            <div class="imagePreview" style="background-image: url({{ $product ? '/uploads/images/products/'.$product->id.'/'.$product->detail_img : '' }});"></div>
            <label class="btn btn-dark">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" name="detail_img"></label>    
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="introduction">Introduction</label>
         <div class="col-sm-8">
            <textarea id="introduction" type="text" class="form-control" name="product[introduction]"  value="">{{ $product ? $product->introduction : '' }}</textarea>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="product_desc">Product Description</label>
         <div class="col-sm-8">
            <textarea id="product_desc" name="product_desc" class="ckeditor">{{ $product ? $product->product_desc : '' }}</textarea>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="technical">Technical characteristics</label>
         <div class="col-sm-8">
            <textarea id="technical" name="technical" class="ckeditor">{{ $product ? $product->technical : '' }}</textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="order_info">Ordering information</label>
         <div class="col-sm-8">
            <textarea id="order_info" name="order_info" class="ckeditor">{{ $product ? $product->order_info : '' }}</textarea>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right">Catalog</label>
         <div class="col-sm-8">
            <div class="custom-file">
               <input type="file" class="custom-file-input" id="customFileLangHTML" name="catalog">
               <label class="custom-file-label" for="customFileLangHTML" data-browse="Bestand kiezen">Choose PDF file</label>
            </div>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="featured_num">Featured Number</label>
         <div class="col-sm-1">
            <input id="featured_num" type="number" class="form-control" name="product[featured_num]" value="{{ $product ? $product->featured_num : '' }}">
         </div>
      </div>
      <div class="line"></div>
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
            <button type="button" class="btn btn-primary" id="save">Save</button>
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
<script src="{{ asset('js/admin.js') }}"></script>
<script type="text/javascript">

     
</script>

@endsection



 	

