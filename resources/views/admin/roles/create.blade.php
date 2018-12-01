@extends('admin.layouts.index')

@section('title', '| Add Role')


@section('content')

    <div class="content">
        <div class='col-lg-4 col-lg-offset-4'>

            <h1>Add Role</h1>
            <hr>
            {{-- @include ('errors.list') --}}

            {{ Form::open(array('url' => 'roles')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <h5><b>Assign Permissions</b></h5>

            <div class='form-group'>
                @foreach ($permissions as $permission)
                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                @endforeach
            </div>

            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#brand-title').text("Roles")
            $('#rbac').addClass("active")
        });
    </script>

@endsection
