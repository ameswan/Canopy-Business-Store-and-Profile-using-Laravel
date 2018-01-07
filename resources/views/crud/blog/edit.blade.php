@extends('vendor.backpack.base.layout')
@section('htmlheader_title')
Posts Entries
@endsection

@section('contentheader_title')
Posts Entries
@endsection

@section('content')
<section class="content-header">
    <h1>
        @yield('contentheader_title', '')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Update Posts</a></li>

    </ol>
</section>
<br><br>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="box box-primary">
            <div class="box-body ">
                <br>
        <div class="col-md-8 well">
            {!! Form::model($blogs, ['route' => ['blog.update', $blogs->id],'method'=>'PUT']) !!}
            @include('crud.blog._form')
            
           
            {!! Form::close() !!}
        </div>
       
            </div></div></div>
</div>

@endsection


    @section('after_scripts')
   

 <script src="{{ asset('vendor/adminlte/') }}/plugins/ckeditor/ckeditor.js"></script>
 {{--<script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>--}}
 <script>
  
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('content');
    //bootstrap WYSIHTML5 - text editor
    //$(".textarea").wysihtml5();
  
</script>
@endsection