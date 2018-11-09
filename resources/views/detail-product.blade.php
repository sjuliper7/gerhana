@extends('layouts.index-for-product')

@section('content')
    <!-- Single Product -->

    <div class="single_product">
        <div class="container">
            <div class="row">

                <!-- Images -->
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        @for($i = 1 ; $i< count($images);$i++)
                            <li data-image="{{ asset('images/'.$images[$i]) }}"><img src="{{ asset('images/'.$images[$i]) }}" alt=""></li>
                        @endfor
                    </ul>
                </div>

                <!-- Selected Image -->
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="image_selected"><img src="{{ asset('images/'.$images[0]) }}" alt=""></div>
                </div>

                <!-- Description -->
                <div class="col-lg-5 order-3">
                    <div class="product_description">
                        <div class="product_category">{{$product->category->name}}</div>
                        <div class="product_name">{{$product->name}}</div>
                        <div class="product_text"><p>{!! $product->description !!}</p></div>
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                                <div class="clearfix" style="z-index: 1000;">

                                    <!-- Product Quantity -->
                                    <div class="product_quantity clearfix">
                                        <span>Quantity: </span>
                                        <input id="quantity_input" type="text" pattern="[0-9]*" value="1">  
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control" onclick="up()"><i class="fas fa-chevron-up"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control" onclick="down()"><i class="fas fa-chevron-down"></i></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="product_price" id="price">Rp {{number_format($product->price)}}</div>
                                <div class="button_container">
                                    <a href="cart.html" type="button" class="button cart_button">Add to Cart</a>
                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {

           // $('#price').text("test");
        });
        
        function up() {
            var stock = '{{$product->stock}}';
            var qtyGet = $('#quantity_input').val();
            var quantity = parseInt(qtyGet);
            var setQuantity = quantity+1;

            if(setQuantity <= parseInt(stock)){
                $('#quantity_input').val(setQuantity);
            }else {
                alert("Max Stock");
                $('#quantity_input').val(stock);
            }
        }

        function down() {
            var stock = '{{$product->stock}}';
            var qtyGet = $('#quantity_input').val();
            var quantity = parseInt(qtyGet);
            var setQuantity = quantity-1;

            if(setQuantity >= 1){
                $('#quantity_input').val(setQuantity);
            }else {
                $('#quantity_input').val(1);
            }
        }
    </script>

@endsection
