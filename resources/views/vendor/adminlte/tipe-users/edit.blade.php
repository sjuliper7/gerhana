@extends('adminlte::layouts.app')

@section('title', '| Edit Tipe User')

@section('main-content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Edit Tipe User</h1>
            <hr>

            <form action="{{ url('tipe-users/'.$tipeUser->id) }}" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$tipeUser->name}}" data-error="Please enter name" required>
                    <div class="help-block with-errors"></div>
                </div>
                <input type="submit" value="Edit Tipe User" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">
            </form>
        </div>
    </div>

@endsection
