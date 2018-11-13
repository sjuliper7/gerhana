@extends('adminlte::layouts.app')

@section('title', '| User Profile')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach($profiles as $profile)
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>User Profile</h3></div>
                    <table class="table table-hover">
                        <thead>
                        <thead>
                        <tr>
                            <td>ID</td><td>:</td><td>{{Auth::user()->id}}</td>
                        </tr>

                        <tr>
                            <td>ID profile</td><td>:</td><td>{{$profile->id}}</td>
                        </tr>

                        <tr>
                            <td>Nama Lengkap</td><td>:</td><td>{{$profile->full_name}}</td>
                        </tr>
                        <tr>
                                <td>Email</td><td>:</td><td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td><td>:</td><td>{{$profile->address}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td><td>:</td><td>{{$profile->date_of_birth}}</td>
                        </tr>
                        <tr>

                            <td>Image Profile</td><td>:</td><td>{{$profile->profile_image}}</td>
                        </tr>
                        <tr>
                            <td>
                            <a class="btn btn-small btn-info" href="{{ URL::to('user-profile/' . $profile->id . '/edit') }}">Edit Profile</a>
                            </td>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
