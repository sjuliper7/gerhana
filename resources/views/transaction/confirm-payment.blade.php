@extends('layouts.index-for-detail')

@section('content')

    <div class="container py-5">

        <h2>Pembayaran</h2>
        <div class="row">
            {{--<div class="header">--}}
            {{--</div>--}}

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
                                    <td style="border: none;">#{{$transaction->order_id}}</td>
                                </tr>
                                <tr>
                                    <td style="border: none;">Total Pembayaran</td>
                                    <td style="border: none;">Rp {{number_format($transaction->total_price)}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @foreach($refBanks as $refBank)
                    <div class="container col-8" style="box-shadow: 0 2px 6px rgba(0,0,0,.12)">
                        <div class="row p-3 mandiri">
                            <div class="col-md-5 pt-2">
                                {{$refBank->account_vendor}}
                            </div>
                            <div class="col-md-5 pt-2">
                                <h4>{{$refBank->account_number}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach

                <form action="{{url('/upload-payment/'.$transaction->id)}}"  method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container col-8">
                        <div class="container col-lg-12">
                            <label for="imgUpload" class="container col-form-label">Upload Bukti Pembayaran</label>
                            <input style="margin-left: 15px" type="file" id="imgUpload" name="provement" value="Upload Bukti Pembayaran" />
                        </div>
                    </div>
                    <div class="container col-4 py-4">
                            <button type="submit" class="btn" style="background-color: darkred; color: white">Konfirmasi Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
