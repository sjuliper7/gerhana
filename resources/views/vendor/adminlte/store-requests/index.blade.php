@extends('adminlte::layouts.app')

@section('title', '| Users')

@section('main-content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-paper-plane"></i>Store Request</h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Store Name</th>
                    <th>Store Email</th>
                    <th>Owner</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($stores as $store)
                    <tr>

                        <td>{{ $store->store_name }}</td>
                        <td>{{ $store->store_name }}</td>
                        <td>{{ $store->store_owner }}</td>
                        <td>{{ $store->created_at->format('F d, Y h:ia') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

                        <td>
                            <a href="{{ route('stores.show', $store->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

    </div>

@endsection
