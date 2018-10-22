@extends('adminlte::layouts.app')

@section('title', '| Product')

@section('main-content')
    <div class="container">
        <a href="{{route('products.create')}}" class="btn btn-success" style="margin-bottom: 20px; margin-left: 20px">Create Product</a>
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="card" style="width: 18rem">
                        <img class="card-img-top center-block" src="{{ asset('images/'.$product->image)  }}" style="width:150px;height:150px;margin-bottom: 10px; object-fit: cover;" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{$product->name}}</h4>
                            <p class="card-text" style="text-align: center; font-weight:800; font-size: large; color: #262323 " >Rp.{{$product->price}}</p>
                            <a href="{{ route('products.show', $product->id ) }}" class="btn btn-info btn-block">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
