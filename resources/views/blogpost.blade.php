@extends('layouts.master')

@section('title')
    Canopy Me > Blogging
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
                      <button onclick="window.location.href='/blogs'" type="button" class="btn btn-danger"><i class="fa fa-superpowers" aria-hidden="true"></i>  All Blogpost</button>
                      <button onclick="window.location.href='/news'" type="button" class="btn btn-danger"><i class="fa fa-coffee"></i>  News</button>
                      <button onclick="window.location.href='/portfolio'" type="button" class="btn btn-danger"><i class="fa fa-desktop"></i>  Achievement</button>
        <br>
        
        </div><hr style="width:100%; border-top:1px solid #f12828;">
        <div>&nbsp;</div>
    </div>
    @foreach($blogs->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="container">
                    <div class="thumbnail">
                        
                        <div class="caption">
                            <h3>{{ $product->title }}</h3>
                            <p class="description">
                            
                            {!!html_entity_decode($product->content)!!}
                            </p>
                            <div class="clearfix">
                                <div class="pull-right price">Tag: @if($product->type==1)News @elseif($product->type==2) Achievement @else Uncategorized @endif</div>
                        
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection