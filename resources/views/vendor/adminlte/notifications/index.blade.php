@extends('adminlte::layouts.app')

@section('title', '| Notifications')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Notification</h3></div>
                    <a href="{{ URL::to('notifications/create') }}" class="btn btn-success" style="margin-top: 5px; margin-left: 10px">Create Notification</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Content</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($notifications as $notification)
                                <tr>
                                    <td>{{$notification->content}}</td>
                                    <td>
                                        <a class="btn btn-small btn-info" href="{{ URL::to('notifications/' . $notification->id . '/edit') }}">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{url('notifications'.$notification->id)}}" method="post">
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
