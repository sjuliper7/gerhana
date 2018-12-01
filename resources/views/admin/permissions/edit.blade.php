@extends('admin.layouts.index')

@section('title', '| Edit Permission')

@section('content')

    <div class="content">
        <div class='col-lg-4 col-lg-offset-4'>

            {{-- @include ('errors.list') --}}

            <h1>Edit {{$permission->name}}</h1>
            <br>
            {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('name', 'Permission Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
            <br>
            {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#brand-title').text("Permissions")
            $('#rbac').addClass("active")
        });
    </script>

@endsection
