@extends('web.layouts.master')

@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="single-post-box">
                            <div class="title-post">
                                <h1>Atención al Vecino</h1>
                            </div>
                            <div class="article-inpost">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Se encontraron los siguientes errores:</strong>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if (Session::has('message'))
                                            <div class="alert alert-success">
                                                <strong>{{ Session::get('message') }}</strong>
                                            </div>
                                        @endif
                                        {!! Form::open(['url' => '/atencion-al-vecino', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
                                        <div class="form-group">
                                            {!! Form::label('reason', 'Motivo', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::select('reason', ['Información' => 'Información', 'Reclamo' => 'Reclamo', 'Sugerencia' => 'Sugerencia', 'Felicitación' => 'Felicitación', 'Solicitud' => 'Solicitud', 'Denuncia' => 'Denuncia'], null, ['placeholder' => 'Seleccione', 'class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('rut', 'Rut', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::text('rut', null, ['placeholder' => 'Ingrese su rut', 'class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('names', 'Nombres', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::text('names', null, ['placeholder' => 'Ingrese sus nombres', 'class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('surnames', 'Apellidos', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::text('surnames', null, ['placeholder' => 'Ingrese sus apellidos', 'class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('address', 'Dirección', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::text('address', null, ['placeholder' => 'Ingrese su dirección', 'class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('email', 'Correo electrónico', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::email('email', null, ['placeholder' => 'Ingrese su correo electrónico', 'class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('phone', 'Teléfono', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::text('phone', null, ['placeholder' => 'Ingrese su teléfono', 'class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('message', 'Mensaje', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::textarea('message', null, ['placeholder' => 'Ingrese su mensaje', 'class' => 'form-control', 'style' => 'resize: none;']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('file', 'Archivo', ['class' => 'col-md-2']) !!}
                                            <div class="col-md-10">
                                                {!! Form::file('file') !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar</button>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('web.partials.sidebar')
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $("#rut").Rut({
                on_error: function () {
                    alert('El rut ingresado es incorrecto!');
                }
            });

            $('#file').fileinput({
                showUpload: false,
                showRemove: true,
                browseLabel: "Seleccionar archivo",
                removeLabel: "Eliminar"
            });
        });
    </script>
@endsection