@extends('admin.layouts.master')

@section('title') Editar Noticia @endsection

@section('content')
    <!-- Start: Topbar -->
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li class="crumb-link">
                    <a href="{{ Request::url() }}">Editar Noticia</a>
                </li>
            </ol>
        </div>
    </header>
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
        <div class="admin-form">
            <div class="panel heading-border">
                <div class="panel-body bg-light">
                    <div class="section-divider mb40" id="spy1">
                        <span>Editar Noticia: {{ $article->title }}</span>
                    </div>
                    @include('admin.partials.errors')
                    @include('admin.partials.message')
                    {!! Form::model($article, ['route' => ['articles.update', $article], 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Título', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título de la noticia', 'maxlength' => 120]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('subtitle', 'Contenido', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('subtitle', null, ['class' => 'form-control ckeditor2', 'placeholder' => 'Contenido de la noticia', 'rows' => 12]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Contenido', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('body', null, ['class' => 'form-control ckeditor2', 'placeholder' => 'Contenido de la noticia', 'rows' => 12]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('image', 'Imágen principal', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail mb20">
                                    <img src="{{ asset('uploads/articles/' . $article->image) }}" alt="holder">
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
                    <div class="form-group">
                        {!! Form::label('on_slider', 'Destacado', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10" style="margin-top: 9px;">
                            <div class="radio-custom radio-primary mb5">
                                {!! Form::radio('on_slider', 1, true, ['id' => 'radio1']) !!}
                                <label for="radio1">Si</label>
                            </div>
                            <div class="radio-custom radio-primary mb5">
                                {!! Form::radio('on_slider', 0, false, ['id' => 'radio2']) !!}
                                <label for="radio2">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <br>
                    <div class="col-lg-12">
                        {!! Form::open(['url' => '/admin/articles/' . $article->id . '/add-images', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
                        <div class="col-lg-6">
                            <div class="section-divider mb40" id="spy1">
                                <span>Editar Imágenes</span>
                            </div>
                            @foreach ($article->images as $image)
                                <div class="col-lg-4">
                                    <img src="{{ asset('uploads/articles/' . $image->image) }}" alt="Imágen {{ $image->id }}" style="width: 120px; height: 90px;">
                                    <a class="btn btn-danger" href="{{ url('/admin/articles/' . $image->id . '/delete-image') }}" onclick="return confirm('¿Eliminar?')" style="width: 120px;">Eliminar</a>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <div class="section-divider mb40" id="spy1">
                                <span>Agregar Imágenes</span>
                            </div>
                            <div id="div-add-images">
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
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-lg-12">
                        <br><br>
                        {!! Form::open(['url' => '/admin/articles/' . $article->id . '/add-audios', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <div class="col-lg-6">
                            <div class="section-divider mb40" id="spy1">
                                <span>Editar Audios</span>
                            </div>
                            @if ($article->audios->count() > 0)
                                @foreach ($article->audios as $audio)
                                    <div class="form-group">
                                        <div class="col-lg-9">
                                            {!! Form::text('audiourl', $audio->url, ['class' => 'form-control', 'disabled' => true]) !!}
                                        </div>
                                        <div class="col-lg-2">
                                            <a class="btn btn-danger" href="{{ url('/admin/articles/' . $audio->id . '/delete-audio') }}" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center">
                                    <strong>No hay audios actualmente!</strong>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <div class="section-divider mb40" id="spy1">
                                <span>Agregar Audios</span>
                            </div>
                            <div id="audio-items">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Audios</label>
                                    <div class="col-lg-2">
                                        <button type="button" class="btn btn-default" id="add-audio"><span class="fa fa-plus"></span> Agregar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-lg-12">
                        <br><br>
                        {!! Form::open(['url' => '/admin/articles/' . $article->id . '/add-videos', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <div class="col-lg-6">
                            <div class="section-divider mb40" id="spy1">
                                <span>Editar Videos</span>
                            </div>
                            @if ($article->videos->count() > 0)
                                @foreach ($article->videos as $video)
                                    <div class="form-group">
                                        <div class="col-lg-9">
                                            {!! Form::text('videourl', $video->url, ['class' => 'form-control', 'disabled' => true]) !!}
                                        </div>
                                        <div class="col-lg-2">
                                            <a class="btn btn-danger" href="{{ url('/admin/articles/' . $video->id . '/delete-video') }}" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center">
                                    <strong>No hay videos actualmente!</strong>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <div class="section-divider mb40" id="spy1">
                                <span>Agregar Videos</span>
                            </div>
                            <div id="video-items">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Videos</label>
                                    <div class="col-lg-2">
                                        <button type="button" class="btn btn-default" id="add-video"><span class="fa fa-plus"></span> Agregar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Content -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            CKEDITOR.replaceAll('ckeditor2', {
                height: 210,
                on: {
                    instanceReady: function () {
                        $('.cke').addClass('admin-skin cke-hide-bottom');
                    }
                }
            });

            $('#date').datetimepicker({
                format: "YYYY-MM-DD"
            });

            $("#images, #audios").fileinput({
                showUpload: false,
                showRemove: true,
                browseLabel: "Seleccionar archivos",
                removeLabel: "Eliminar"
            });

            $('#add-audio').click(function () {
                $('#audio-items').append('<div class="form-group div-audio"><label class="col-lg-2 control-label"></label><div class="col-lg-9"><input class="form-control" placeholder="URL de SoundCloud" name="audios[]" type="text"></div><div class="col-lg-1"><button type="button" class="btn btn-danger delete-audio" title="Eliminar">X</button></div></div>');
            });

            $('#audio-items').on('click', '.delete-audio', function () {
                $(this).closest('.div-audio').remove();
            });

            $('#add-video').click(function () {
                $('#video-items').append('<div class="form-group div-video"><label class="col-lg-2 control-label"></label><div class="col-lg-9"><input class="form-control" placeholder="URL de Youtube" name="videos[]" type="text"></div><div class="col-lg-1"><button type="button" class="btn btn-danger delete-video" title="Eliminar">X</button></div></div>');
            });

            $('#video-items').on('click', '.delete-video', function () {
                $(this).closest('.div-video').remove();
            });
        });
    </script>
@endsection