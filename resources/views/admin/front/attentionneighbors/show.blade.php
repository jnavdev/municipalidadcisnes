@extends('admin.layouts.master')

@section('title') Nuevo Evento @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Atención al Vecino</a>
                </li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="panel-body">
                {!! Form::model($attentionneighbor, ['class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('reason', 'Motivo', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('reason', null, ['class' => 'form-control', 'readonly' => true]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('rut', 'Rut', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('rut', null, ['class' => 'form-control', 'readonly' => true]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('names', 'Nombres', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('names', null, ['class' => 'form-control', 'readonly' => true]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('surnames', 'Apellidos', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('surnames', null, ['class' => 'form-control', 'readonly' => true]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Dirección', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('address', null, ['class' => 'form-control', 'readonly' => true]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Correo electrónico', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('email', null, ['class' => 'form-control', 'readonly' => true]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Teléfono', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('phone', null, ['class' => 'form-control', 'readonly' => true]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('message', 'Mensaje', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'readonly' => true, 'style' => 'resize: none;']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('file', 'Archivo', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        @if ($attentionneighbor->file)
                            <a class="btn btn-primary" href="{{ $attentionneighbor->getFile() }}" download><i class="fa fa-download"></i> Descargar</a>
                        @else
                            <input type="text" value="Sin archivo" readonly class="form-control">
                        @endif
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::label('answer', 'Responder', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        <a class="btn btn-success" href="mailto:{{ $attentionneighbor->email }}?subject=Respuesta Municipalidad Puerto Varas"><i class="fa fa-mail-reply"></i></a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <!-- End: Content -->
@endsection