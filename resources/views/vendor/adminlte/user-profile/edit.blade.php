@extends('layouts.index')

@section('title', '| Edit User Profile')

@section('header')
    {{--<h1>User Profile</h1>--}}

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>

    <div class="container">
        <h1 style="margin-top: 30px;">User Profile</h1>

        <div class="row" id="main">
            {{--<div class="col-md-4 well" id="leftPanel">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div>--}}
                            {{--<img src="http://lorempixel.com/200/200/abstract/1/" alt="Texto Alternativo" class="img-circle img-thumbnail">--}}
                            {{--<input type="file" name="profile_image">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="col-md-8 well" id="main">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form"  id="myForm" action="{{ url('user-profile/'.$profile->id) }}" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            {{--<h2>Ubah Biodata Diri.</h2>--}}
                            <hr class="colorgraph">
                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control" value="{{$profile->full_name}}" data-error="Please enter name" required>
                            </div>

                            <div class="form-group">
                                <input type="date" name="date_of_birth" class="form-control" value="{{$profile->date_of_birth}}" data-error="Please enter name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="address" class="form-control" value="{{$profile->address}}" data-error="Please enter Address" required>
                            </div>

                            <input type="file" class="inputimages" name="profile_image" value="{{$profile->profile_image}}" required>


                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <input type="submit" value="Cancel" class="btn btn-success btn-lg btn-block" id="cancel" style="margin-top: 70px;">
                                    {{--<input type="button" id="cancel" value="Cancel" class="btn btn-danger " style="margin-top: 10px;">--}}
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <input type="submit" value="Edit User Status" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">
                                </div>
                            </div>

                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6 col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-sm-6 col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<hr class="colorgraph">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xs-12 col-sm-6">--}}
                                    {{--<input type="submit" value="Edit User Status" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">--}}
                                {{--</div>--}}
                                {{--<div class="col-xs-12 col-md-6">--}}
                                    {{--<input type="submit" value="Edit User Status" class="btn btn-success btn-lg btn-block" id="add" style="margin-top: 70px;">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {
            var i=1;
            $('#more').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'">' +
                    '<td><div class="form-group"><img src="http://placehold.it/400x400" id="show_image-'+i+'" style="max-width:100px;max-height:100px;" class="center-block" /></div></td>'+
                    '<td><label class="btn btn-info">Browse<input type="file" id="input_image-'+i+'" name="images[]" onchange="loadImage(this)" style="display: none"></label></td>' +
                    '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td>' +
                    '</tr>');
            });
            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
        });

        function loadImage(input){
            var data = input.id.split("-");
            var variable;
            if(data[1] === ""){
                variable = "#show_image-";
            }else{
                variable = "#show_image-"+ data[1];
            }

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                console.log(variable);
                reader.onload = function(e) {
                    $(variable).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }

        }

        $(function () {
            $("#input_image").change(function () {
                console.log("test")
                // readURL(this);
            });

            $('#cancel').click(function () {
                $('#myForm')[0].reset();
            });

        });



    </script>


@endsection


