@extends('admin.layouts.master')

@section('title') Agregar Imágenes @endsection

@section('content')
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Editar Álbum</a>
                </li>
            </ol>
        </div>
    </header>

    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="panel-menu p6 admin-form theme-primary">
                <div class="row text-center">
                    <h4>Agregar imágenes / Eliminar imágenes</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    @include('admin.partials.errors')
                    {!! Form::open(['url' => "/admin/albums/{$album->id}/add/images", 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
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

                <div class="col-md-6 col-lg-6 col-sm-6">
                    @include('admin.partials.message')
                    <div class="table-responsive">
                        <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                            <thead>
                            <tr class="bg-light">
                                <th>Imágen</th>
                                <th class="text-right">Eliminar</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($album->images as $image)
                                <tr>
                                    <td>
                                        <div class="text-left">
                                            <img src="{{ $image->getImage() }}" alt="{{ $album->name }}" class="img-thumbnail" style="width: 100px;">
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ url("/admin/albums/{$image->id}/delete") }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $("#images").fileinput({
                showUpload: false,
                showRemove: true,
                browseLabel: "Seleccionar imágenes",
                removeLabel: "Eliminar"
            });
        });
    </script>
@endsection