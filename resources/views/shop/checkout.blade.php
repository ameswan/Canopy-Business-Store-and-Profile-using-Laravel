@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('styles')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css">
@section('content')

        
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: RM {{ $total }}</h4>
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required name="name">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" required name="address">
                        </div>
                    </div>
                    <div class="col-xs-12">
                    <div class="form-group">
                <label>Date to booking: format. 'MM/DD/YYYY'</label>

                <div class="input-group date">
                  
               
         {!!  Form::text('book',null,['class'=>'form-control','id'=>'datepicker']) !!}
         <div class="input-group-addon">
                    <i class="fa fa-calendar" id="datepicker"></i>
                  </div>
                  </div>
                <!-- /.input group -->
              </div></div>
               <div class="col-xs-12">
                    <div class="form-group">
                <label>Phone: eg. '010XXXXXXX'</label>

                <div class="input-group date">
                  
               
         {!!  Form::text('phone',null,['class'=>'form-control']) !!}
         <div class="input-group-addon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  </div>
                <!-- /.input group -->
              </div></div>


                    <hr>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Card Holder Name</label>
                            <input type="text" id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">Credit Card Number</label>
                            <input type="text" id="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration Month</label>
                                    <input type="text" id="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-year">Expiration Year</label>
                                    <input type="text" id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Buy now</button>
            </form>
        </div>
    </div>
    <br><br>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
      <script src="{{ asset('vendor/adminlte') }}/plugins/daterangepicker/moment.min.js"></script>
 <script src="{{ asset('vendor/adminlte') }}/plugins/daterangepicker/moment.js"></script>
 <script src="{{ asset('vendor/adminlte') }}/plugins/datepicker/bootstrap-datepicker.js"></script>
 <script src="{{ asset('vendor/adminlte') }}/plugins/daterangepicker/daterangepicker.js"></script>
 <script src="{{ asset('vendor/adminlte') }}/plugins/timepicker/bootstrap-timepicker.min.js"></script>

 

    <script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/fastclick/fastclick.js"></script>


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