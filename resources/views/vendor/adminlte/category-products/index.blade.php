@extends('adminlte::layouts.app')

@section('title', '| Category Product')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Category Product</h3></div>
                    <a href="{{ URL::to('category-products/create') }}" class="btn btn-success" style="margin-top: 5px; margin-left: 10px">Create Category Product</a>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categoryProducts as $categoryProduct)
                            <tr>
                                <td>{{$categoryProduct->name}}</td>
                                <td>
                                    <a class="btn btn-small btn-info" href="{{ URL::to('category-products/' . $categoryProduct->id . '/edit') }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{url('category-products/'.$categoryProduct->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
