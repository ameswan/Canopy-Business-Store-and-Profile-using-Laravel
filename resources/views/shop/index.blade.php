@extends('layouts.master')

@section('title')
    Canopy Me > Shopping Cart
@endsection

@section('content')
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="btn-group">
                      <button onclick="window.location.href='/shop'" type="button" class="btn btn-danger"><i class="fa fa-superpowers" aria-hidden="true"></i>  All</button>
                      <button onclick="window.location.href='/products'" type="button" class="btn btn-danger"><i class="fa fa-coffee"></i>  Product</button>
                      <button onclick="window.location.href='/services'" type="button" class="btn btn-danger"><i class="fa fa-desktop"></i>  Service</button>
        <br>
        
        </div><hr style="width:100%; border-top:1px solid #f12828;">
        <div>&nbsp;</div>
    </div>
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $product->imagePath }}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>{{ $product->title }}</h3>
                            <p class="description">{{ $product->description }}</p>
                            <div class="clearfix">
                                <div class="pull-left price">RM {{ $product->price }}</div>
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}"
                                   class="btn btn-success pull-right" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection