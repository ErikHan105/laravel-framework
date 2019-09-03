@extends('admin.header')

@section('content')
<div class="card-body">
   @if(count($errors) > 0)
      <div class="alert alert-danger">
          <ul class="list-unstyled">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <h2>Add News</h2>
   <form method="POST" enctype="multipart/form-data" id="product_addnews" action="{{ $news ? route('admin.addnews', [$news->id]) : route('admin.addnews') }}">
      @csrf
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="news_topic">Topic</label>
         <div class="col-sm-8">
            <input id="news_topic" type="text" class="form-control" name="news_topic" value="{{ $news ? $news->topic : '' }}">
         </div>
      </div>

      
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right" for="news_upload">News Contents</label>
         <div class="col-sm-8">

            <textarea name="news_upload" class="tinymce my-editor" id="news_upload" style="height: 500px;">{{ $news ? $news->article : '' }}</textarea>
         </div>
      </div>

      


      <div class="form-group row">
         <div class="col-sm-4 offset-sm-2">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="button" class="btn btn-primary" id="add_news">Save</button>
         </div>
      </div>  

   </form>
</div>




@endsection

@section('js')
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/tinymce.min.js') }}"></script>

<script src="{{ asset('js/add-news.js') }}"></script>

@endsection



 	

