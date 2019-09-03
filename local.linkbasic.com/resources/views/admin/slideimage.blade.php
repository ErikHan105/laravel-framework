@extends('admin.header')

@section('content')
<div class="card-body">
   <form method="POST" enctype="multipart/form-data" id="product_add" action="{{ route('admin.slideimage') }}">

      @csrf
      <!-- <input type="hidden" value="" name="id"> -->
      <div class="form-group row">
         <label class="col-sm-2 form-control-label text-right">Add slide image</label>
         <div class="col-sm-8">
            <div class="custom-file">
               <input type="file" class="custom-file-input" id="slide_image" name="slide" onchange="showImage.call(this)">
               <label class="custom-file-label" for="slide_image" data-browse="Bestand kiezen">Choose Image file</label>
            </div>
            <img src="" style="max-width: 100%; display: none; margin-top: 2%;" id="img_preview">
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
            <button type="submit" class="btn btn-primary" id="save_slide">Save</button>
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

<script src="{{ asset('js/slide.js') }}"></script>
<script type="text/javascript">
   function showImage()
   {
      if(this.files && this.files[0])
      {
         var obj = new FileReader();
         obj.onload = function(data) {
            var image = document.getElementById('img_preview');
            image.src = data.target.result;
            image.style.display = 'block';
         }
         obj.readAsDataURL(this.files[0]);
      }
   }
    page.init();
     
</script>

@endsection



 	

