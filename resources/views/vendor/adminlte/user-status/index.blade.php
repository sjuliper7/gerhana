@extends('adminlte::layouts.app')

@section('title', '| User Status')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>User Status</h3></div>
                    <a href="{{ URL::to('user-status/create') }}" class="btn btn-success" style="margin-top: 5px; margin-left: 10px">Create Category Product</a>
                    <table class="table table-hover">
                        <thead>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($userStatuss as $userStatus)
                            <tr>
                                <td>{{$userStatus->name}}</td>
                                <td>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('user-status/' . $userStatus->id . '/edit') }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{url('user-status/'.$userStatus->id)}}" method="post">
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
