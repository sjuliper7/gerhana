@extends('adminlte::layouts.app')

@section('title', '| Edit Notification')


@section('main-content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Edit Notification</h1>
            <hr>

            <form action="{{ url('notifications/'.$notification->id) }}" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" name="content" class="form-control" value="{{$notification->content}}" data-error="Please enter name" required>
                    <div class="help-block with-errors"></div>
                </div>
                <input type="submit" value="Edit Notification" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">
            </form>
        </div>
    </div>

@endsection


