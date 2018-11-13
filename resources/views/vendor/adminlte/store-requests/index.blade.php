@extends('adminlte::layouts.app')

@section('title', '| Users')

@section('main-content')

    <div class="col-lg-10 col-lg-offset-1">

        @if ($message = Session::get('flash_message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

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
                            @if($store->status->name === "PENDING")
                                <a href="{{ route('request-stores.show', $store->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Detail</a>
                            @else
                                @if($store->status->name === "REJECTED")
                                    <p class="text-danger text-bold">{{$store->status->name}}</p>
                                @else
                                    <p class="text-success text-bold">{{$store->status->name}}</p>
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

    </div>

@endsection
