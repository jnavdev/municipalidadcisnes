@extends('web.layouts.master')

@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="single-post-box">
                            <div class="title-section">
                                <h1><span class="world">Galería</span></h1>
                            </div>

                            @if ($albums->count() > 0)
                                <div class="article-inpost">
                                    <div class="row">
                                        @foreach ($albums as $album)
                                            <div class="col-md-6">
                                                <div class="image-content">
                                                    <div class="image-place">
                                                        <a href="{{ url('/galeria/' . $album->slug) }}"><h5>{{ $album->name }}</h5></a>
                                                        <a href="{{ url('/galeria/' . $album->slug) }}"><img src="{{ $album->getImage() }}" alt="{{ $album->name }}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                {!! $albums->render() !!}
                            @else
                                <div class="article-inpost">
                                    <div class="row">
                                        <div class="text-center">
                                            <h5>No existen imágenes actualmente!</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @include('web.partials.socialsidebar')
            </div>
        </div>
    </section>
@endsection