@extends('layouts.index-for-product')

@section('content')
    <!-- Single Product -->

    <div class="single_product">
        <div class="container">
            <div class="row">

                <!-- Images -->
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        @for($i = 1 ; $i< count($images);$i++)
                            <li data-image="{{ asset('images/'.$images[$i]) }}"><img
                                    src="{{ asset('images/'.$images[$i]) }}" alt=""></li>
                        @endfor
                    </ul>
                </div>

                <!-- Selected Image -->
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="image_selected"><img src="{{ asset('images/'.$images[0]) }}" alt=""></div>
                </div>

                <!-- Description -->
                <div class="col-lg-5 order-3">
                    <div class="container">
                        <div class="form-row">
                            <div class="product_name">{{$product->name}}</div>
                        </div>
                        <div class="form-row">
                            <label>Kategori : {{$product->category->name}}</label>
                        </div>
                        <div class="form-row">
                            <label>Penjelasan <p>{!! $product->description !!}<a data-toggle="modal" data-target="#myModal"> Read More..</a> </p></label>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">{{$product->name}}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            {!! $product->description !!}
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label>Cerita <p>{!! $product->story!!} <a data-toggle="modal" data-target="#myModalStory"> Read More..</a> </p></label>

                            <!-- The Modal -->
                            <div class="modal fade" id="myModalStory">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">{{$product->name}}</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            {!! $product->story !!}
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label>Harga <h3>Rp {{number_format($product->price)}}</h3></label>
                        </div>
                        <div class="form-row">
                            <form action="{{url('/carts')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" value="{{$product->id}}"name="id_product"hidden>
                                <div class="form-row">
                                    <label>Jumlah</label>
                                    <input type="number"class="form-control"placeholder="1"max="{{$product->stock}}" min="1">
                                    </div>
                                    <div class="form-row py-1">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" placeholder="Catatan Untuk Penjual"></textarea>
                                    </div>
                                    <div class="form-row py-4">
                                        <input type="submit" value="Tambah Ke Keranjang" class="button cart_button"style="background-color: #8b0000">
                                    </div>
                                </form>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
        });
    </script>

@endsection
