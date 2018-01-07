@extends('vendor.backpack.base.layout')

@section('htmlheader_title')
Product
@endsection

@section('contentheader_title')
Product
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
            <a href="#" class="btn bg-navy"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp; Add New</a><br><br>
            <table  class="table table-bordered table-hover table-inverse" >
                <thead  style="border:solid 2px; border-color:black" class="thead-inverse">
                    <tr>
                        <td>No.</td>
                        <td>Product / Service</td>
                        <td>Type</td>
                        <td>Description</td>
                        <td>Image Path</td>
                        <td>Action</td>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $i=1; ?>
                  
                    @foreach($products as $product)
                    <tr>
                        
                        <td>{{$i++}}</td>
                        <td>{{$product->title}}</td>
                        <td>@if($product->type==1)Product @else Services @endif</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->imagePath}}</td>


                        <td width="32%"><div class="pull-left"><a href="{{url('product/'.$product->id.'/edit')}}" class="btn bg-maroon"><i class="fa fa-pencil"></i>&nbsp Update</a></div>&nbsp<div class="pull-left">{!! Form::open(['route' => ['product.destroy', $product->id],'data-confirm' => 'test','method' => 'DELETE',]) !!}{!! Form::button('<i class="fa fa-trash"></i>&nbsp;Delete',['class'=>'btn bg-green','type'=>'submit','data-confirm' => 'Are you sure you want to delete?']) !!}{!! Form::close() !!}</div></td>

                    </tr>
                    @endforeach
                    
                </tbody>

            </table>
            <?php echo $products->render(); ?>

        </div>
            </div></div></div>
</div>
 @include('crud.product.create')
@endsection
<!--<script>
    $(document).ready(function(){
        setTimeout(function() {
          $('#alert').fadeOut('slow');
        }, 900); // <-- time in milliseconds
    });
    </script>-->