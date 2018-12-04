@extends('layouts.index-for-cart')

@section('content')
    <!-- Single Product -->

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="cart_container">

                        @foreach($transactions as $transaction)
                            <a href="{{url('transactions/'.$transaction->id.'/show')}}">
                                <div class="cart_items">
                                    <ul class="cart_list">
                                        <li class="cart_item clearfix">
                                            <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between col-lg-8">

                                                <div class="cart_item_name cart_info_col col-lg-2">
                                                    <div class="cart_item_title">Id Order</div>
                                                    <div>#{{$transaction->order_id}}</div>
                                                </div>

                                                <div class="cart_item_name cart_info_col col-lg-3">
                                                    <div class="cart_item_title">Total Harga</div>
                                                    <div>Rp {{number_format($transaction->total_price)}}</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col col-lg-3">
                                                    <div class="cart_item_title">Biaya Pengiriman</div>
                                                    <div>Rp {{number_format($transaction->shipment_fee)}}</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col col-lg-3">
                                                    <div class="cart_item_title">Estimasi Pengiriman</div>
                                                    <div>{{$transaction->shipment_etd}} Hari</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col col-lg-2">
                                                    <div class="cart_item_title">Total Barang</div>
                                                    <div>{{count($transaction->detailTransactions)}}</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col col-lg-3">
                                                    <div class="cart_item_title">Status Barang</div>
                                                    <div class=""><p class="text-danger">{{$transaction->status->name}}</p></div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        @endforeach
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
