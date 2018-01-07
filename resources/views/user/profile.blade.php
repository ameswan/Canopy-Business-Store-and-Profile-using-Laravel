@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>User Profile</h1>
            <hr>
            <h2>My Orders</h2>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">RM{{ $item['price'] }}</span>
                                    {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                                </li>
                            @endforeach
                        </ul>
                        <div class='row pull-left'><b>
                        &nbsp; &nbsp; Date:</b> <i>{!!$order->book!!}</i></div>
                        <div class='row pull-right'><b>
                        Admin's commment:</b> <i>{!!$order->comment!!}</i></div>
                    </div>
                    <div class="panel-footer">
                        <strong>Total Price: RM{{ $order->cart->totalPrice }}</strong> 
                        <div class='pull-right'><i>
                        Your order status is @if($order->confirmed==1)Confirmed @else Pending @endif</i></div><br>
                        
                    </div>
                </div>
            @endforeach
            Print your receipt and email to afwan70@gmail.com
            <a class="pull-right" href="javascript:window.print()"><img src="{{ URL::to('src/radius/images/print.jpg') }}" alt="print this page" id="print-button" /></a>
        </div>
    </div>
@endsection