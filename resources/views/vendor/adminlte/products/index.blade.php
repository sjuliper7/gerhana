@extends('adminlte::layouts.app')

@section('title', '| Product')

@section('main-content')
    <div class="container">
        <div class="col-lg-offset-0 col-lg-11">
            <a href="{{route('products.create')}}" class="btn btn-success" style="margin-bottom: 20px; margin-left: 20px">Create Product</a>
            <div class="row">
                <div class="col-sm-2"style="margin-left:-1em">
                    <img src="{{asset('images/shop.png')}}" class="img-thumbnail" alt="...">
                </div>
                <div class="col-sm-7">
                    <h3 style="color: #8b0000">{{Auth::user()->store->store_name}}</h3>
                    <h5>{{Auth::user()->store_email}}</h5>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="" src="{{asset('images/location_icon.png')}}"style="max-height: 80%;max-width: 80%;margin-left: 0em">
                            </div>
                            <div class="col-sm-6">
                                <h5 style="margin-top: 5px;margin-left: -10px">{{Auth::user()->store->store_address}}</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div><br><br>

            <div class="row">
                @foreach($products as $product)
                    <?php
                    $images = json_decode($product->images);
                    ?>
                    <div class="col-lg-3 col-xs-5">
                        <!-- small box -->
                        <div class="card" style="width: 17rem">
                            <img class="card-img-top center-block" src="{{ asset('images/'.$images[0])  }}" style="width:150px;height:150px;margin-bottom: 10px; object-fit: cover;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{$product->name}}</h5>
                                <p class="card-text" style="text-align: center; font-weight:550; font-size: large; color: #262323 " >Rp {{number_format($product->price)}}</p>
                                <a href="{{ route('products.show', $product->id ) }}" class="btn btn-info btn-block">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
