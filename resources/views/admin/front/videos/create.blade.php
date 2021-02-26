@extends('admin.layouts.master')

@section('title') Nuevo Video @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Nuevo Video</a>
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
                {!! Form::open(['route' => 'videos.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('url', 'Link de YouTube', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Link de YouTube']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('title', 'Título', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('active', 'Activo', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::select('active', ['Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione']) !!}
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