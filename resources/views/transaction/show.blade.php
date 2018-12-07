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
                                            <table class="table" style="margin-bottom: -10px;margin-top: -10px">
                                                <tr>
                                                    <th style="border-top: none;" width="15%">Nomor Order</th>
                                                    <th style="border-top: none;">Gambar Produk</th>
                                                    <th style="border-top: none;" width="20%">Nama Product</th>
                                                    <th style="border-top: none;" width="18%">Nama Toko</th>
                                                    <th style="border-top: none;" width="20%">Jumlah Barang</th>
                                                    <th style="border-top: none;" width="15%">Total Barang</th>
                                                    <th style="border-top: none;" width="25%">Comment</th>
                                                </tr>
                                                <tr>
                                                    <td>#{{$detailTransaction->transaction->order_id}}</td>
                                                    <?php
                                                    $images = json_decode($detailTransaction->product->images);
                                                    ?>
                                                    <td><img src="{{ asset('images/'.$images[0]) }}" style="max-height: 150px;max-width: 100px; margin-right: 10px" alt=""></td>
                                                    <td>{{$detailTransaction->product->name}}</td>
                                                    <td>{{$detailTransaction->product->store->store_name}}</td>
                                                    <td>Rp {{number_format($detailTransaction->sub_total_price)}}</td>
                                                    <td>{{$detailTransaction->quantity}}</td>
                                                    <td class="text-danger">{{$detailTransaction->comment}}</td>
                                                </tr>
                                            </table>
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
