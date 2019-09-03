@extends('admin.header')

@section('content')
<div class="card-body">

   <div class="col-12 tm-block-col">
      <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
         <div class="row">
            <h2 class="col-sm-8 tm-block-title">News List</h2>
            <div class="col-sm-4" style="text-align: right;">{{ $news->links() }}</div>
         </div>
         <table class="table">
             <thead>
                 <tr>
                     <th scope="col">NO</th>
                     <th scope="col">Topic</th>
                     <th scope="col">Date</th>
                     <th scope="col">Edit</th>
                     <th scope="col">Delete</th>
                     
                 </tr>
             </thead>
             <tbody>
               @foreach($news as $new)
                 <tr>
                     <th scope="row">{{ $new->id }}</th>
                     <td>{{ $new->topic }}</td>
                     <td>{{ $new->created_at }}</td>

                     <td><button class="btn btn-primary edit_new"><a href="{{ route('admin.addnews', [$new->id]) }}" style="color:#ffffff;">Edit</a></button></td>
                     <td><button class="btn btn-danger delete_news" data-news-id="{{ $new->id }}" data-toggle="modal" data-target="#delete">Delete</button></td>
                 </tr>
               @endforeach
             </tbody>
         </table>
     </div>
   </div>
   <div class="modal" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="margin-left: 50%; max-height: 280px;">

       <div class="modal-content">
             <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
           <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
         </div>
             <div class="modal-body">
          
          <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
          
         </div>
           <div class="modal-footer ">
           <button type="button" class="btn btn-success" id="delete_news"><a href="" style="color: #000000;"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Yes</a></button>

           <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;No</button>
         </div>
           </div>
       <!-- /.modal-content --> 

      </div>
</div>




@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('ckeditor/samples/css/samples.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/addnews.js') }}"></script>


@endsection



 	

