@extends('layouts.index-for-listing')

@section('content')
    {{--<div class="home">--}}
        {{--<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>--}}
        {{--<div class="home_overlay"></div>--}}
        {{--<div class="home_content d-flex flex-column align-items-center justify-content-center">--}}
            {{--<h2 class="home_title">Toko</h2>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <div class="row">
                {{--<div class="col-lg-3">--}}

                    {{--<!-- Shop Sidebar -->--}}
                    {{--<div class="shop_sidebar">--}}
                        {{--<div class="sidebar_section">--}}
                            {{--<div class="sidebar_title"style="color: #8b0000">Kategori</div>--}}
                            {{--<ul class="sidebar_Kategori">--}}
                                {{--<li><a href="#"style="color: #8b0000">Pakaian</a></li>--}}
                                {{--<li><a href="#"style="color: #8b0000">Cenderamata</a></li>--}}
                                {{--<li><a href="#"style="color: #8b0000">Ukiran</a></li>--}}
                                {{--<li><a href="#"style="color: #8b0000">Patung</a></li>--}}
                                {{--<li><a href="#"style="color: #8b0000">Buku</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                {{--</div>--}}

                <div class="col-lg-12">
                    <div class="row">
                    <div class="col-sm-2"style="margin-left:-1em">
                        <img src="{{asset('images/shop.png')}}" class="img-thumbnail" alt="...">
                    </div>
                    <div class="col-sm-7">
                        <h3 style="color: #8b0000">{{$store->store_name}}</h3>
                        <h5>{{$store->store_email}}</h5>
                        <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="" src="{{asset('images/location_icon.png')}}"style="max-height: 80%;max-width: 80%;margin-left: 0em">
                            </div>
                            <div class="col-sm-6">
                                <h5 style="margin-top: 5px;margin-left: -10px">{{$store->store_address}}</h5>
                            </div>

                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Shop Content -->


                    <div class="shop_content">
                        <div class="row"style="margin-top: 1em" >

                            <a href="{{ URL::to('list-transactions/' . $store->id ) }}">
                            <button type="button" class="btn btn-primary"style="margin: 0.5em;background-color: #8b0000">List Transaction</button>
                            </a>

                            <button type="button" class="btn btn-secondary"style="margin: 0.5em;background-color: #8b0000">Menu 2</button>
                            <button type="button" class="btn btn-success"style="margin: 0.5em;background-color: #8b0000">Menu 3</button>
                            <a href="{{url('owner-products/create')}}">
                                <button type="button" class="btn btn-primary"style="margin: 0.5em;background-color: #8b0000">Tambah Produk</button>
                                </a>
                        </div>

                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span>{{count($products)}}</span> products found</div>
                            <div class="shop_sorting">
                                <span>Urutkan berdasarkan:</span>
                                <ul>
                                    <li>
                                        <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></i></span>
                                        <ul>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                                            <li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product_grid">
                            <div class="product_grid_border"></div>

                            @foreach($products as $product)
                                <?php
                                    $images = json_decode($product->images);
                                ?>
                                <!-- Product Item -->
                                    <a href="{{url('owner-products/'.$product->id)}}">
                                        <div class="product_item discount">
                                            <div class="product_border"></div>
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{ asset('images/'.$images[0]) }}" style="width:120px;height:120px; object-fit: cover;"  >
                                            </div>
                                            <div class="product_content">
                                                <div class="product_price">Rp {{number_format($product->price)}}</div>
                                                <div class="product_name"><div><a href="product.html" tabindex="0">{{$product->name}}</a></div></div>
                                            </div>
                                        </div>
                                    </a>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
