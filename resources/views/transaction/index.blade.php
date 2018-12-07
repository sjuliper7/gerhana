@extends('layouts.index-for-cart')

@section('content')
    <!-- Single Product -->

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0">
                    <div class="cart_container">

                        @foreach($transactions as $transaction)
                            <a href="{{url('transactions/'.$transaction->id.'/show')}}">
                                <div class="cart_items">
                                    <ul class="cart_list">
                                        <li class="cart_item clearfix">
                                            <div class="container">
                                                <table class="table" style="margin-bottom: -10px;margin-top: -10px">
                                                    <tr>
                                                        <th style="border-top: none;" width="15%"><center>Nomor Order</center></th>
                                                        <th style="border-top: none;" width="15%"><center>Total Price</center></th>
                                                        <th style="border-top: none;" width="18%"><center>Biaya Pengiriman</center></th>
                                                        <th style="border-top: none;" width="20%"><center>Estimasi Pengiriman</center></th>
                                                        <th style="border-top: none;" width="15%"><center>Total Barang</center></th>
                                                        <th style="border-top: none;" width="25%"><center>Status</center></th>
                                                        <th style="border-top: none;" width="25%"><center>Resi</center></th>
                                                    </tr>
                                                    <tr>
                                                        <td>#{{$transaction->order_id}}</td>
                                                        <td>Rp {{number_format($transaction->total_price)}}</td>
                                                        <td>Rp {{number_format($transaction->shipment_fee)}}</td>
                                                        <td>{{$transaction->shipment_etd}} Hari</td>
                                                        <td>{{count($transaction->detailTransactions)}}</td>
                                                        <td class="text-danger">{{$transaction->status->name}}</td>
                                                        <td class="text-success">{{$transaction->shipment_number}}</td>
                                                    </tr>
                                                </table>
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
