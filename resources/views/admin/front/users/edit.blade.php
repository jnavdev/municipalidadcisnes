@extends('admin.layouts.master')

@section('title') Editar Usuario @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Editar Usuario</a>
                </li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="panel-body">
                @include('admin.partials.errors')
                {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del usuario']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Correo electrónico', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo electrónico del usuario']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('permissions', 'Permisos', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        <div class="bs-component">
                            @foreach ($permissions as $permission)
                                <div class="checkbox-custom checkbox-primary mb5">
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['id' => $permission->id]) !!}
                                    <label for="{{ $permission->id }}">{{ $permission->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('change_password', '¿Cambiar contraseña?', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        <button id="password-yes" type="button" class="btn btn-success"><span class="fa fa-check"></span></button>
                        <button id="password-no" type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button>
                    </div>
                </div>
                <div id="change-password-div" style="display: none;">
                    <div class="form-group">
                        {!! Form::label('password', 'Contraseña nueva', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña nueva del usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Confirme contraseña', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme contraseña">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <!-- End: Content -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            var div = $('#change-password-div');

            $('#password-yes').click(function () {
                div.fadeIn(600);
            });

            $('#password-no').click(function () {
                div.fadeOut(600);
            });
        });
    </script>
@endsection