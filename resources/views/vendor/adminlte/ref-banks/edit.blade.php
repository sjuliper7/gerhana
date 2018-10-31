@extends('adminlte::layouts.app')

@section('title', '| Edit Category Product')

@section('main-content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Edit Category Product</h1>
            <hr>

            <form action="{{ url('ref-banks/'.$refBanks->id) }}" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Name</label>
                    <label>Name</label>
                    <input type="text" name="account_vendor" class="form-control" value="{{$refBanks->account_vendor}}" data-error="Please enter name" required>

                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label>Account Number</label>

                    <input type="text" name="account_vendor" class="form-control" value="{{$refBanks->account_number}}" data-error="Please enter name" required>
                    <div class="help-block with-errors"></div>
                </div>

                <input type="submit" value="Edit Ref Bank" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">
            </form>
        </div>
    </div>

@endsection


