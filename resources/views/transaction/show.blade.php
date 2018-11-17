@extends('layouts.index-for-cart')

@section('content')
    <!-- Single Product -->

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart_container">
                        @foreach($detailTransactions as $detailTransaction)
                            {{--<a href="{{url('transactions/'.$transaction->id.'/show')}}">--}}
                                <div class="cart_items col-lg-12">
                                    <ul class="cart_list">
                                        <li class="cart_item clearfix">
                                            <?php
                                            $images = json_decode($detailTransaction->product->images);
                                            ?>
                                            <div class="cart_item_image"><img src="{{ asset('images/'.$images[0]) }}" style="max-height: 150px;max-width: 100px; margin-right: 10px" alt=""></div>
                                            <div class="cart_item_info d-flex flex-md-row  justify-content-between col-lg-12">
                                                <div class="cart_item_name cart_info_col col-lg-2">
                                                    <div class="cart_item_title">Nama Product</div>
                                                    <div>{{  $detailTransaction->product->name}}</div>
                                                </div>
                                                <div class="cart_item_name cart_info_col col-lg-2">
                                                    <div class="cart_item_title">Nama Toko</div>
                                                    <div>{{  $detailTransaction->product->store->store_name}}</div>
                                                </div>
                                                <div class="cart_item_name cart_info_col col-lg-2">
                                                    <div class="cart_item_title">Sub Total Harga</div>
                                                    <div>Rp {{number_format($detailTransaction->sub_total_price)}}</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col col-lg-2">
                                                    <div class="cart_item_title">Total Barang</div>
                                                    <div>{{$detailTransaction->quantity}}</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col col-lg-2">
                                                    <div class="cart_item_title">Comment</div>
                                                    <div class="text-danger">{{$detailTransaction->comment}}</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            {{--</a>--}}
                        @endforeach
                            <div class="cart_buttons">
                                {{--<a href="/" button type="button" class="btn btn-danger"style="background-color: #FFFFFF;color: #000000">Batal</a>--}}
                                <a href="{{url('upload-payment/'.$detailTransaction->transaction->order_id)}}" type="button" class="btn btn-success"style="background-color: #8b0000">Bayar</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>

@endsection
