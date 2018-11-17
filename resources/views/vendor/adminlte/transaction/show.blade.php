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
                        <th>Product Name</th>
                        <th>Preview Product</th>
                        <th>Quantity</th>
                        <th>Sub Total Price</th>
                        <th>Comment</th>
                        <th>Prove Payment</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $detail)
                    <tr>
                        <td>{{$detail->name}}</td>
                        <td>
                            @foreach($data as $img)
                                <img src="/images/{{ $img}}" style="max-height:200px;max-width: 200px">
                            @endforeach
                        </td>
                        <td>{{$detail->detailTransaction->quantity}}</td>
                        <td>{{$detail->detailTransaction->sub_total_price}}</td>
                        <td>{{$detail->detailTransaction->comment}}</td>
                        <td>{{$detail->detailTransaction->transaction->prove_payment}}</td>
                        <td>{{$detail->detailTransaction->transaction->address}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="box-footer">

        </div>
    </div>

@endsection
