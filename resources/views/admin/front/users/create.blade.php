@extends('admin.layouts.master')

@section('title') Nuevo Usuario @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Nuevo Usuario</a>
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
                {!! Form::open(['route' => 'users.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
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
                    {!! Form::label('password', 'Contraseña', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña del usuario">
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirme contraseña', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme contraseña">
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