@extends('vendor.backpack.base.layout')

@section('htmlheader_title')
Blog
@endsection

@section('contentheader_title')
Blog
@endsection

@section('content')
<section class="content-header">
    <h1>
        @yield('contentheader_title', '')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Systems</a></li>
        <li><a href="#">@yield('contentheader_title')</a></li>

    </ol>
</section>
<br><br>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="box box-primary">
            <div class="box-body " style="overflow-y:auto;" width="100%">
        
        <div class="col-xs-10 well">
            <a href="#" class="btn bg-navy"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp; Add new Post</a><br><br>
            <table  class="table table-bordered table-hover table-inverse" >
                <thead  style="border:solid 2px; border-color:black" class="thead-inverse">
                    <tr>
                        <td>No.</td>
                        <td>Type</td>
                        <td>Title</td>
                        <td>Content</td>
                        <td>Action</td>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $i=1; ?>
                  
                    @foreach($blogs as $blog)
                    <tr>
                        
                        <td>{{$i++}}</td>
                        <td>@if($blog->type==1)News @else Achievement @endif</td>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->content}}</td>


                        <td width="32%"><div class="pull-left"><a href="{{url('blog/'.$blog->id.'/edit')}}" class="btn bg-maroon"><i class="fa fa-pencil"></i>&nbsp Update</a></div>&nbsp<div class="pull-left">{!! Form::open(['route' => ['blog.destroy', $blog->id],'data-confirm' => 'test','method' => 'DELETE',]) !!}{!! Form::button('<i class="fa fa-trash"></i>&nbsp;Delete',['class'=>'btn bg-green','type'=>'submit','data-confirm' => 'Are you sure you want to delete?']) !!}{!! Form::close() !!}</div></td>

                    </tr>
                    @endforeach
                    
                </tbody>

            </table>
            

        </div>
            </div></div></div>
</div>
 @include('crud.blog.create')
@endsection
<!--<script>
    $(document).ready(function(){
        setTimeout(function() {
          $('#alert').fadeOut('slow');
        }, 900); // <-- time in milliseconds
    });
    </script>-->
  
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