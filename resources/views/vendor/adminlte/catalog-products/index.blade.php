@extends('adminlte::layouts.app')

@section('title', '| Catalog Product')

@section('main-content')
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#menu1">Properti</a></li>
                <li><a data-toggle="tab" href="#menu2">Buku</a></li>
                <li><a data-toggle="tab" href="#menu3">Ukiran</a></li>
                <li><a data-toggle="tab" href="#menu4">Cenderamata</a></li>
                <li><a data-toggle="tab" href="#menu5">Pakaian</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Some content.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Properti</h3>
                    <p>Some content in menu 1.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Buku</h3>
                    <p>Some content in menu 2.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Ukiran</h3>
                    <p>Some content in menu 3.</p>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <h3>Cenderamata</h3>
                    <p>Some content in menu 4.</p>
                </div>
                <div id="menu5" class="tab-pane fade">
                    <h3>Pakaian</h3>
                    <p>Some content in menu 5.</p>
                </div>
            </div>

            {{--<div class="col-md-4">--}}
                {{--coba--}}
            {{--</div>--}}

            {{--<div class="col-md-9 col-md-offset-1">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading"><h3>Katalog Properti</h3></div>--}}

                    {{--<table class="table table-hover">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>Product Name</th>--}}
                            {{--<th>Product Image</th>--}}
                            {{--<th colspan="2">Actions</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--<tr>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                            {{--<td>--}}
                                {{--<a class="btn btn-small btn-info" href="#">Edit</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<form action="#" method="post">--}}
                                    {{--{{csrf_field()}}--}}
                                    {{--<input name="_method" type="hidden" value="DELETE">--}}
                                    {{--<button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>--}}
                                {{--</form>--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection
