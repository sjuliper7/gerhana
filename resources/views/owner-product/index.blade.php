@extends('layouts.index-for-detail')

@section('content')
    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">My Products</h2>
        </div>
    </div>

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <!-- Shop Sidebar -->
                    <div class="shop_sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">Kategori</div>
                            <ul class="sidebar_Kategori">
                                <li><a href="#">Pakaian</a></li>
                                <li><a href="#">Cenderamata</a></li>
                                <li><a href="#">Ukiran</a></li>
                                <li><a href="#">Patung</a></li>
                                <li><a href="#">Buku</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="col-lg-9">

                    <!-- Shop Content -->

                    <div class="shop_content">
                        <a class="btn btn-info" href="{{url('owner-products/create')}}">Create Product</a>
                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span>186</span> products found</div>
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
                                <!-- Product Item -->
                                    <div class="product_item">
                                        <div class="product_border"></div>
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                            <?php
                                                $images = json_decode($product->images);
                                            ?>
                                            <img src="{{ asset('images/'.$images[0]) }}" alt="" style="width:150px;height:150px; object-fit: cover;" >
                                        </div>
                                        <div class="product_content">
                                            <div class="product_price">Rp {{$product->price}}</div>
                                            <div class="product_name">
                                                <div>
                                                    <a href="product.html" tabindex="0">{{$product->name}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount">-25%</li>
                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                        <div class="row">
                                            <a href="{{url('owner-products/'.$product->id)}}" class="btn btn-info" >Detail</a>
                                        </div>
                                    </div>

                                @endforeach


                        </div>

                        <!-- Shop Page Navigation -->

                        <div class="shop_page_nav d-flex flex-row">
                            <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
                            <ul class="page_nav d-flex flex-row">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">21</a></li>
                            </ul>
                            <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
