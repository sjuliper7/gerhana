@extends('adminlte::layouts.app')

@section('title', '| Category Product')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Referensi Banks</h3></div>
                    <a href="{{ URL::to('ref-banks/create') }}" class="btn btn-success" style="margin-top: 5px; margin-left: 10px">Create Ref Bank</a>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Vendor Name</th>
                            <th>Vendor Number</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($refBanks as $refBank)
                            <tr>
                                <td>{{$refBank->account_vendor}}</td>
                                <td>{{$refBank->account_number}}</td>
                                <td>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('ref-banks/' . $refBank->id . '/edit') }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{url('ref-banks/'.$refBank->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
