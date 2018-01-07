@extends('vendor.backpack.base.layout')
@section('htmlheader_title')
Order
@endsection

@section('contentheader_title')
Order
@endsection

@section('content')
<section class="content-header">
    <h1>
        @yield('contentheader_title', '')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Edit Order</a></li>

    </ol>
</section>
<br><br>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="box box-primary">
            <div class="box-body ">
                <br>
        <div class="col-md-8 well">
            {!! Form::model($orders, ['route' => ['order.update', $orders->id],'method'=>'PUT']) !!}
            @include('crud.order._form')
            
           
            {!! Form::close() !!}
        </div>
       
            </div></div></div>
</div>

@endsection

@section('after_scripts')
<script>
  $(function () {
    

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });


    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
@endsection