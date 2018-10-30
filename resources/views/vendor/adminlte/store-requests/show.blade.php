@extends('adminlte::layouts.app')

@section('title', '| Users')

@section('main-content')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> DETAIL STORE REQUEST</h3>
        </div>
        <div class="box-body">
            <table class="table table-user-information">
                <tr>
                    <th>Store Name</th>
                    <td>: </td>
                    <td>{{$store->store_name}}</td>
                </tr>
                <tr>
                    <th>Owner</th>
                    <td>: </td>
                    <td>{{$store->store_owner}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>: </td>
                    <td>{{$store->store_email}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>: </td>
                    <td>{{$store->store_phone}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>: </td>
                    <td>{{$store->store_address}}</td>
                </tr>
                <tr>
                    <th>No KTP</th>
                    <td>: </td>
                    <td>{{$store->store_ktp}}</td>
                </tr>
                <tr>
                    <th>KTP Image</th>
                    <td>: </td>
                    <td>
                        <a href="/images/{{$store->store_ktp_image}}" data-lightbox="roadtrip">
                            <img src="/images/{{$store->store_ktp_image}}" style="max-height:200px;max-width: 200px">
                        </a>
                    </td>
                </tr>
                <tr>
                <th>No NPWP</th>
                    <td>: </td>
                    <td>{{$store->store_npwp}}</td>
                </tr>
                <tr>
                    <th>NPWP Image</th>
                    <td>: </td>
                    <td>
                        <a href="/images/{{$store->store_npwp_image}}" data-lightbox="roadtrip">
                            <img src="/images/{{$store->store_npwp_image}}" style="max-height:200px;max-width: 200px">
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Account Number</th>
                    <td>: </td>
                    <td>{{$store->store_account_bank}}</td>
                </tr>
                <tr>
                    <th>Type Of Bank</th>
                    <td>: </td>
                    <td>{{$store->store_account_type}}</td>
                </tr>
                <tr>
                    <th>NPWP Image</th>
                    <td>: </td>
                    <td>
                        <a href="/images/{{$store->store_npwp_image}}" data-lightbox="roadtrip">
                            <img src="/images/{{$store->store_npwp_image}}" style="max-height:200px;max-width: 200px">
                        </a>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>: </td>
                    <td>
                    <td>
                        <form action="{{url('/'.$store->id)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" class="btn btn-info"><i class="fa fa-check"> Terima</i></button>

                        </form>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="cancelRequest()"> <i class="fa fa-close"></i>Tolak </a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="box-footer">

        </div>
    </div>

@endsection
