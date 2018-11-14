@extends('layouts.index-for-detail')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="header">
                <h2>Melakukan Pemesanan</h2>
            </div>
        </div>
        <div class="row py-4">
            <div class="container col-8">
                <div class="header">
                    <h3>Alamat Pengiriman</h3>
                </div>
                <div class="container" style="box-shadow: 0 2px 6px rgba(0,0,0,.12)">
                   <div class="row">
                       <div class="container col-lg-12   py-3 align-self-center">
                               <textarea class="form-control" placeholder="Alamat"></textarea>
                       </div>
                       {{--<div class="container col-auto align-self-center">--}}
                           {{--<button type="button" class="btn" style="background-color: darkred; color: white">Ganti Alamat</button>--}}
                       {{--</div>--}}
                   </div>
                </div>
            </div>
            <div class="container col-4">
                <div class="header">
                    <h3>Ringkasan Belanja</h3>
                </div>
                <div class="container" style="box-shadow: 0 2px 6px rgba(0,0,0,.12)">
                    <div class="container">
                        <div class="row py-2">
                            <div class="col-8">
                                Total Harga (1 Barang)
                            </div>
                            <div class="col-auto">
                                Rp {{number_format($total)}}
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-8">
                                Biaya Pengiriman
                            </div>
                            <div class="col-auto">
                                -
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-8 text-bold">
                                Total Belanja
                            </div>
                            <div class="col-auto">
                                Rp {{number_format($total)}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container align-self-center py-3">
                    <form action="{{ url('/confirm-payment') }}" method="" >
                        <button type="submit" class="btn btn-block" style="background-color: darkred; color: white">Bayar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row col-9" >
            <div class="container row headers">
                <h4>Kurir Pengiriman</h4>
            </div>
        </div>
        <div class="row "style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="col-sm" style="box-shadow: 0 2px 6px rgba(0,0,0,.12);margin: 1em">
                <input type="radio" class="form-check-input" name="optradio">JNE
                <p>Dapatkan pada 3-5 hari</p>
                <p>RP 50.000</p>
            </div>
            <div class="col-sm" style="box-shadow: 0 2px 6px rgba(0,0,0,.12);margin: 1em">
                <input type="radio" class="form-check-input" name="optradio">Tiki
                <p>Dapatkan pada 4-6 hari</p>
                <p>RP 45.000</p>
            </div>

            <div class="col-sm" style="box-shadow: 0 2px 6px rgba(0,0,0,.12);margin: 1em">
                <input type="radio" class="form-check-input" name="optradio">Pos Indonesia
                <p>Dapatkan pada 3-5 hari</p>
                <p>RP 55.000</p>
            </div>
        </div>

        <div class="row py-4" >
            <div class="container row py-2">
                <div class="header col-2">
                    <h4>Semua Barang({{count($carts)}})</h4>
                </div>
                <div class="header col-2">
                    <h4>Nama Produk</h4>
                </div>
                <div class="header col-2">
                    <h4>Harga</h4>
                </div>
                <div class="header col-2">
                    <h4>Kuantitas</h4>
                </div>
                <div class="header col-2">
                    <h4>Sub Total Harga</h4>
                </div>
            </div>
            @foreach($carts as $cart)
                <div class="container row col-10" style="box-shadow: 0 2px 6px rgba(0,0,0,.12)">
                    <?php
                        $images = json_decode($cart->product->images);
                    ?>
                        <div class="col-3 py-3 align-self-center">
                            <img src="{{ asset('images/'.$images[0])  }}" style="max-height:70px;max-width:70px;">
                        </div>
                        <div class="col-2 py-3 align-self-center">
                            {{$cart->product->name}}
                        </div>
                        <div class="col-3 py-3 align-self-center">
                            Rp {{number_format($cart->product->price)}}
                        </div>
                        <div class="col-2 py-3 align-self-center">
                            {{$cart->quantity}}
                        </div>
                        <div class="col-2 py-3 align-self-center">
                            Rp {{number_format($cart->sub_total_price)}}
                        </div>
                </div>
            @endforeach

        </div>
        </div>
    </div>
@endsection
