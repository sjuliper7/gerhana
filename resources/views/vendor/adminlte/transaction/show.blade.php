@extends('adminlte::layouts.app')

@section('title', '| Users')

@section('main-content')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> DETAIL TRANSACTION</h3>
        </div>
        <div class="box-body ">
            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>ID Produk</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Sub Total Price</th>
                        <th>Comment</th>
                        <th>Prove Payment</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$detail->id_product}}</td>
                        <td>{{$detail->quantity}}</td>
                        <td>{{$detail->transaction->total_price}}</td>
                        <td>{{$detail->sub_total_price}}</td>
                        <td>{{$detail->comment}}</td>
                        <td>{{$detail->transaction->prove_payment}}</td>
                        <td>{{$detail->transaction->address}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="box-footer">

        </div>
    </div>

@endsection
