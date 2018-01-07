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
        <li><a href="#"><i class="fa fa-gears"></i> Update Product</a></li>

    </ol>
</section>
<br><br>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="box box-primary">
            <div class="box-body ">
                <br>
        <div class="col-md-8 well">
            {!! Form::model($products, ['route' => ['product.update', $products->id],'method'=>'PUT']) !!}
            @include('crud.product._form')
            
           
            {!! Form::close() !!}
        </div>
       
            </div></div></div>
</div>

@endsection
