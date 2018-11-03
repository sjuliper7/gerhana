@extends('adminlte::layouts.app')

@section('title', '| Create New Notification')


@section('main-content')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Notification</h1>
            <hr>

            <form action="/notifications" method="post" data-toggle="validator" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" name="content" class="form-control" placeholder="Content" data-error="Please enter name" required>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label>Email Customer</label>
                    <select name="customer-select" id="customer" class="form-control selectpicker" data-live-search="true" data-error="Please select user" required>
                        <option selected="selected" name="customer-selected">Select Customer</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->email}}</option>
                        @endforeach
                    </select>
                    <div class="help-block with-errors"></div>
                </div>

                <input type="submit" value="Create Notification" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">

            </form>
        </div>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function () {
            ('#customer').selectpicker();
        })
    </script>
    
@endsection


