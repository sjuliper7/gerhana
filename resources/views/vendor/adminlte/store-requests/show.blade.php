@extends('adminlte::layouts.app')

@section('title', '| Users')

@section('main-content')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> DETAIL STORE REQUEST</h3>
        </div>
        <div class="box-body ">
            <table class="table table-user-information col-lg-12">
                <tr>
                    <th>Store Name</th>
                    <td>: </td>
                    <td>{{$requestStore->store_name}}</td>
                </tr>
                <tr>
                    <th>Owner</th>
                    <td>: </td>
                    <td>{{$requestStore->store_owner}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>: </td>
                    <td>{{$requestStore->store_email}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>: </td>
                    <td>{{$requestStore->store_phone}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>: </td>
                    <td>{{$requestStore->store_address}}</td>
                </tr>
                <tr>
                    <th>No KTP</th>
                    <td>: </td>
                    <td>{{$requestStore->store_ktp}}</td>
                </tr>
                <tr>
                    <th>KTP Image</th>
                    <td>: </td>
                    <td>
                        <a href="/images/{{$requestStore->store_ktp_image}}" data-lightbox="roadtrip">
                            <img src="/images/{{$requestStore->store_ktp_image}}" style="max-height:200px;max-width: 200px">
                        </a>
                    </td>
                </tr>
                <tr>
                <th>No NPWP</th>
                    <td>: </td>
                    <td>{{$requestStore->store_npwp}}</td>
                </tr>
                <tr>
                    <th>NPWP Image</th>
                    <td>: </td>
                    <td>
                        <a href="/images/{{$requestStore->store_npwp_image}}" data-lightbox="roadtrip">
                            <img src="/images/{{$requestStore->store_npwp_image}}" style="max-height:200px;max-width: 200px">
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Account Number</th>
                    <td>: </td>
                    <td>{{$requestStore->store_account_bank}}</td>
                </tr>
                <tr>
                    <th>Type Of Bank</th>
                    <td>: </td>
                    <td>{{$requestStore->store_account_type}}</td>
                </tr>
                <tr>
                    <th>NPWP Image</th>
                    <td>: </td>
                    <td>
                        <a href="/images/{{$requestStore->store_account_bank_image}}" data-lightbox="roadtrip">
                            <img src="/images/{{$requestStore->store_account_bank_image}}" style="max-height:200px;max-width: 200px">
                        </a>
                    </td>
                </tr>

                <tr>
                    <th>Sent Comment</th>
                    <td>: </td>
                    <td>  <form class="" action="index.html" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-newspaper-o"></i>
                                    </div>
                                    <textarea class="form-control" placeholder="Comment"  id="comment" style="height:200px;"
                                              name="comment">{{$requestStore->comment}}</textarea>
                                </div>
                                <span id="errfn2" style="color: red"></span>
                            </div>
                        </form>
                </tr>

                <td>
                    <th></th>
                    <td>
                        <div style="float: right;">
                            <div class="col-sm-6">
                                <form action="{{url('request-stores/'.$requestStore->id)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="value" value="1">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-check"> Terima</i></button>
                                </form>
                            </div>
                            <div class="col-sm-4">
                                <a class="btn btn-danger" onclick="cancelRequest()"> <i class="fa fa-close"></i>Tolak</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="box-footer">

        </div>
    </div>

    <script>
        //var uri = 'request-stores/'+'{{$requestStore->id}}';
        function cancelRequest() {

            //console.log(url);
            var check = confirm("Apakah anda yakin untuk menolak nya??");
            var fiedl = document.getElementById('comment');

            if (fiedl.value == ' ' || fiedl.value == null || fiedl.value == '  '
                || fiedl.value == '-') {
                alert('Pesan Harus di isi');
            } else {
                if (check) {
                    $.ajax({
                        data: {
                            value: fiedl.value,
                            requestID: '{{$requestStore->id}}',
                            _method : 'PUT',
                            _token: '{{ csrf_token() }}',
                        },
                        url: uri,
                        type: 'POST',
                        success: function (data) {
                            console.log("success")
                        }
                        // window.location.reload(true);



                    });
                }
            }
        }
    </script>

@endsection
