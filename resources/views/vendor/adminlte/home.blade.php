@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container">
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{count($users)}}</h3>

                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users" style="font-size:72px;"></i>
                        </div>
                        <a href="/users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--<div class="col-lg-3 col-xs-6">--}}
                    {{--<!-- small box -->--}}
                    {{--<div class="small-box bg-aqua">--}}
                        {{--<div class="inner">--}}
                            {{--<h3>{{count($products)}}</h3>--}}

                            {{--<p>Products</p>--}}
                        {{--</div>--}}
                        {{--<div class="icon">--}}
                            {{--<i class="fa fa-shopping-bag" style="font-size:72px" ></i>--}}
                        {{--</div>--}}
                        {{--<a href="/products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{count($requestStores)}}</h3>

                            <p>Request Store</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-paper-plane" style="font-size:72px" ></i>
                        </div>
                        <a href="/request-stores" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{count($requestStores)}}</h3>

                            <p>Transaction</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-paper-plane" style="font-size:72px" ></i>
                        </div>
                        <a href="/transactions-admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
