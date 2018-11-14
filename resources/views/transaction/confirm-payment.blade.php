@extends('layouts.index-for-detail')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="header">
                <h2>Pembayaran</h2>
            </div>

            <div class="container col-8 mt-5 py-3" style="box-shadow: 0 2px 6px rgba(0,0,0,.12); min-width: 576px">
                <div class="container">
                    <label class="p-3 container text-center">
                        Silahkan lakukan pembayaran via bank transfer ke salah satu nomor rekening berikut.
                    </label>

                    <div class="container col-8">
                        <div class="detail-payment">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td style="border: none;">Nomor Pemesanan</td>
                                    <td style="border: none;">1452145663CD</td>
                                </tr>
                                <tr>
                                    <td style="border: none;">Total Pembayaran</td>
                                    <td style="border: none;">Rp. 985.000,-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="container col-8" style="box-shadow: 0 2px 6px rgba(0,0,0,.12)">
                    <div class="row p-3 mandiri">
                        <div class="col-md-3">
                            <img src="images/bank_icon/Mandiri.png" alt="" style="height: 25px; ">
                        </div>
                        <div class="col-md-4 pt-2">
                            Bank Mandiri
                        </div>
                        <div class="col-md-5 pt-2">
                            <h4>456789009876</h4>
                        </div>
                    </div>
                </div>

                <div class="container col-8" style="box-shadow: 0 2px 6px rgba(0,0,0,.12)">
                    <div class="row p-3 bni">
                        <div class="col-md-3">
                            <img src="images/bank_icon/BNI.png" alt="" style="height: 25px; ">
                        </div>
                        <div class="col-md-4 pt-2">
                            Bank BNI
                        </div>
                        <div class="col-md-5 pt-2">
                            <h4>1234676654347</h4>
                        </div>
                    </div>
                </div>

                <div class="container col-8" style="box-shadow: 0 2px 6px rgba(0,0,0,.12)">
                    <div class="row p-3 bri">
                        <div class="col-md-3">
                            <img src="images/bank_icon/1.png" alt="" style="height: 30px; ">
                        </div>
                        <div class="col-md-4 pt-2">
                            Bank BRI
                        </div>
                        <div class="col-md-5 pt-2">
                            <h4>0987484394954</h4>
                        </div>
                    </div>
                </div>

                <div class="container col-4 py-4">
                    <form action="{{ url('/upload-payment') }}" method="" >
                        <button type="submit" class="btn" style="background-color: darkred; color: white">Konfirmasi Pembayaran</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection