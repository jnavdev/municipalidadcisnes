@extends('admin.layouts.master')

@section('title') Nuevo Servicio Municipal @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Nuevo Servicio Municipal</a>
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
                {!! Form::open(['route' => 'municipalservices.store', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Título', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del servicio municipal', 'maxlength' => 120]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('text', 'Texto del link', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => '(Ejemplo) Para pagar ingrese al siguiente enlace:']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('url', 'Link', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Link']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Contenido', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Contenido del servicio municipal', 'id' => 'ckeditor', 'rows' => 12]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('image', 'Imágen', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail mb20">
                                    <img data-src="holder.js/100%x195" alt="holder">
                                </div>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <span class="btn btn-system btn-file btn-block">
                                            <span class="fileupload-new">Selecciona una imágen</span>
                                            <span class="fileupload-exists">Cambiar imágen</span>
                                            {!! Form::file('image') !!}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        {!! Form::label('images', 'Imágenes', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::file('images[]', ['multiple' => true, 'id' => 'images']) !!}
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
            CKEDITOR.replace('ckeditor', {
                height: 210,
                on: {
                    instanceReady: function(evt) {
                        $('.cke').addClass('admin-skin cke-hide-bottom');
                    }
                }
            });

            $("#images").fileinput({
                showUpload: false,
                showRemove: true,
                browseLabel: "Seleccionar Imágenes",
                removeLabel: "Eliminar"
            });
        });
    </script>
@endsection