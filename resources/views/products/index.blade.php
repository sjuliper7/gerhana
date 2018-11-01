@extends('layouts.index-for-detail')

@section('content')
    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">Products</h2>
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
                        <div class="sidebar_section filter_by_section">
                            <div class="sidebar_title">Disusun menurut</div>
                            <div class="sidebar_subtitle">Harga</div>
                            <div class="filter_price">
                                <div id="slider-range" class="slider_range"></div>
                                <p>Range: </p>
                                <p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
                            </div>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle color_subtitle">Color</div>
                            <ul class="colors_list">
                                <li class="color"><a href="#" style="background: #b19c83;"></a></li>
                                <li class="color"><a href="#" style="background: #000000;"></a></li>
                                <li class="color"><a href="#" style="background: #999999;"></a></li>
                                <li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
                                <li class="color"><a href="#" style="background: #df3b3b;"></a></li>
                                <li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
                            </ul>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle brands_subtitle">Brands</div>
                            <ul class="brands_list">
                                <li class="brand"><a href="#">Classic</a></li>
                                <li class="brand"><a href="#">Original</a></li>
                                <li class="brand"><a href="#">Desa</a></li>
                                <li class="brand"><a href="#">Sitorang</a></li>
                                <li class="brand"><a href="#">Pakpak</a></li>
                                <li class="brand"><a href="#">Mithosi</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-9">

                    <!-- Shop Content -->

                    <div class="shop_content">
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

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/11.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item discount">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/12.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000<span>Rp.300.000</span></div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/13.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/14.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/18.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/16.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/17.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000<span>Rp.300.000</span></div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/19.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000<span>Rp.300.000</span></div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/20.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/21.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/22.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/23.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/24.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/31.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun></a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item discount">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/31.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000<span>Rp.300.000</span></div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/32.jpeg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/33.jpeg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/34.jpeg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/35.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp225.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

                            <!-- Product Item -->
                            <div class="product_item is_new">
                                <div class="product_border"></div>
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="image/36.jpg" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price">Rp.379.000</div>
                                    <div class="product_name"><div><a href="product.html" tabindex="0">Baju Tenun</a></div></div>
                                </div>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>

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
