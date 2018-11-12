@extends('adminlte::layouts.app')

@section('title', '| Create User Profile')

@section('main-content')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>



    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>User Profile</h1>
            <hr>

            <form action="/user-profile" method="post" data-toggle="validator" role="form">
                {{ csrf_field() }}

                <div class="form-group">
                    <label>Gambar Profil</label>
                    <img src="http://placehold.it/100x100" id="show_profile" style="max-width:200px;max-height:200px;" class="center-block" />
                    <div class="help-block with-errors"></div>


                        <label class="btn btn-info center-block">
                            Browse
                            <input type="file" id="input_image_profile" name="profile_image" style="display: none">
                        </label>
                    
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="full_name" class="form-control" placeholder="Nama Lengkap" data-error="Please enter full name" required>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="date_of_birth" class="form-control" placeholder="Tanggal Lahir" data-error="Please enter born date" required>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="address" class="form-control" placeholder="Alamat" data-error="Please enter address" required>
                    <div class="help-block with-errors"></div>
                </div>


                <input type="submit" value="Create User Profile" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">
            </form>
        </div>
    </div>
@endsection


