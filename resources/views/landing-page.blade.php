@extends('layouts.index')

@section('header')
    <div class="header_main"style="max-height: 10em;margin-top: -3em;">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="header_main"style="max-height: 10em">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo"><a href="/" style="color: #8b0000">BatakZone</a></div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" placeholder="Cari Produk">
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc">Semua Kategori</span>
                                            <i class="fas deals_featuredfa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                @foreach($categoryProducts as $categoryProduct)
                                                    <li><a class="clc" href="{{url('/products-by/'.$categoryProduct->name)}}">{{$categoryProduct->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300"style="background-color: #8b0000" value="Submit"><img src="{{asset('template/images/search.png')}}" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Wishlist -->
                <div class="col-lg-4 col-9 order-lg-3 order-2 ">

                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <!-- Cart -->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <img src="{{asset('template/images/cart.png')}}" alt="">
                                    <div class="cart_count"style="background-color: #8b0000"><span>5</span></div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="/carts">Keranjang</a></div>
                                    <div class="cart_price">$85</div>
                                </div>
                            </div>
                        </div>

                        <div class="top_bar_user">
                            @if(Auth::guest())
                                <div style="margin-right: 2em">
                                    <a type="text" href="/login" class="" style="color: #8b0000"> Masuk</a>
                                </div>
                                <div>
                                    <a type="text" href="/register" class="">Daftar </a>
                                </div>

                            @else
                                <div class="top_bar_user" style="width:20em;margin-right: -10em">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-user"></span> 
                                        <strong class="fa fa-user-circle"> {{Auth::user()->name}}</strong>
                                        <span class="glyphicon glyphicon-chevron-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-12" style="margin-bottom: -5em">
                                                            <div class="row">
                                                                <img src="{{asset('images/kelola_akun.png')}}"
                                                                     style="max-width:10%;max-height: 10%">
                                                                <div class="text-left col-md-6">
                                                                    <p class="font-weight-normal">Kelola Akun</p>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <a href="/transactions">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <img src="{{asset('images/box_closed.png')}}"
                                                                         style="max-width:10%;max-height: 10%">
                                                                    <div class="col-md-6">
                                                                        <p class="font-weight-normal">Pesanan
                                                                            Saya</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </a>


                                                        <div class="col-md-12" style="margin-top:0em">
                                                            <div class="row">
                                                                <img src="{{asset('images/off.png')}}"
                                                                     style="max-width:10%;max-height: 10%">
                                                                <div class="col-md-6">
                                                                    <form id="logout-form"
                                                                          action="{{ url('/logout') }}"
                                                                          method="POST" style="border: 0em">
                                                                        {{ csrf_field() }}
                                                                        <input type="submit" value="Logout" style="background: transparent;border: none; font-size: 14px;line-height: 1.7;font-weight: 400;color: #535353;">
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endif


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="main_nav_content d-flex flex-row"style="background-color: #8b0000">

                        <!-- Categories Menu -->

                        <div class="cat_menu_container"style="background-color: #8b0000">
                            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">KATEGORI</div>
                            </div>

                            <ul class="cat_menu">
                                @foreach($categoryProducts as $categoryProduct)
                                <li><a href="{{url('/products-by/'.$categoryProduct->name)}}">{{$categoryProduct->name}}<i class="fas fa-chevron-right ml-auto"></i></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-auto"style="background-color: #8b0000;margin-right: 2em">
                            <ul class="standard_dropdown main_nav_dropdown">
                                <li><a href="/" class="text-white">Home<i class="fas fa-chevron-down "></i></a></li>
                                <li><a href="#"class="text-white">Contact<i class="fas fa-chevron-down"></i></a></li>
                                <li><a href="/my-store"class="text-white">My Store<i class="fas fa-chevron-down"></i></a></li>
                            </ul>
                        </div>

                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu -->

    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page_menu_content">

                        <div class="page_menu_search">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input" placeholder="Cari Produk">
                            </form>
                        </div>
                        <ul class="page_menu_nav">

                            <li class="page_menu_item">
                                <a href="/home">Home<i class="fa fa-angle-down"></i></a>
                            </li>

                            <li class="page_menu_item"><a href="#">contact<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item"><a href="/my-store">My Store<i class="fa fa-angle-down"></i></a></li>
                        </ul>

                        <div class="menu_contact">
                            <div class="menu_contact_item"><a href="/login"> Login </a></div>
                            <div class="menu_contact_item"><a href="/register">Register</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            console.log("tests");
        })
    </script>

@endsection

@section('content')
    <div class="banner">
        <div class="banner_background" style="background-image:url('/template/images/banner_background.jpg')"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                {{--<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>--}}
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h2 class="banner_text"style="color: #8b0000">new era of </h2>
                        <h4 class="banner_text" style="margin-bottom: 150px;color: #8b0000">Kerajinan Tangan Tanah Batak</h4>
                        {{--<div class="banner_price"><span>$530</span>$460</div>--}}
                        {{--<div class="banner_product_name">Apple Iphone 6s</div>--}}
                        {{--<div class="button banner_button"><a href="#">Shop Now</a></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured" style="margin-bottom: 30px">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix">
                                    <li class="active">Product</li>
                                </ul>
                                <div class="tabs_line"><span style="background-color: #8b0000"></span></div>
                            </div>

                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="featured_slider slider">

                                @foreach($products as $product)
                                    <!-- Slider Item -->
                                        <div class="featured_slider_item" style="margin-bottom: 20px">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <?php
                                                $images = json_decode($product->images);
                                                ?>
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <a href="{{ URL::to('buy/' . $product->name ) }}">
                                                        <img src="{{ asset('images/'.$images[0])  }}" style="width:150px;height:150px; object-fit: cover;" >
                                                    </a>
                                                </div>

                                                <div class="product_content">
                                                    <div class="product_price discount">Rp. {{$product->price}}</div>
                                                    <div class="product_name"><div><a href="{{ URL::to('buy/' . $product->name ) }}">{{$product->name}}</a></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                        </div>
                    </div>
                    <div class="deals">
                        <div class="deals_title">Paling Banyak Dilihat</div>
                        <div class="deals_slider_container">

                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">

                                <!-- Deals Item -->
                                @foreach($mostProductView as $mv)
                                    <?php
                                        $images = json_decode($mv->images);
                                    ?>
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="{{asset('images/'.$images[0])}}" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">{{$mv->name}}</div>
                                                <div class="deals_item_price ml-auto">Rp {{number_format($mv->price)}}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
