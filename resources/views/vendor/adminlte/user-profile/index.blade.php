@extends('adminlte::layouts.app')

@section('title', '| User Profile')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>User Profile</h3></div>
                    <table class="table table-hover">
                        <thead>
                        <thead>
                        <tr>
                            <td>ID</td><td>:</td><td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <td>Name Lengkap</td><td>:</td><td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td><td>:</td><td></td>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
