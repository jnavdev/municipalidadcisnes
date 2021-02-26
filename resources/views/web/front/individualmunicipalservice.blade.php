@extends('web.layouts.master')

@section('title') {{ $municipalService->title }} @endsection

@section('content')
    <!-- INICIO MINI NOTICIAS -->
    <br>
    <section class="ticker-news">
        <div class="container">
            <div class="ticker-news-box">
                <span class="breaking-news">Noticias</span>
                <span class="new-news">Nuevas</span>
                <ul id="js-news">

                    @foreach ($miniArticles as $miniArticle)
                        <li class="news-item"><span class="time-news">{{ $miniArticle->created_at->toFormattedDateString() }}</span>  <a href="{{ url('/noticias/' . $miniArticle->slug) }}">{{ $miniArticle->title }}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    <!--FIN MINI NOTICIAS -->

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!-- block content -->
                    <div class="block-content">
                        <!-- single-post box -->
                        <div class="single-post-box">
                            <div class="post-gallery">
                                <ul class="bxslider">
                                    @foreach($municipalService->images as $image)
                                        <li><img src="{{ asset('uploads/municipalservices/' . $image->image) }}" alt=""></li>
                                    @endforeach
                                </ul>
                                <span class="image-caption">Imágenes.</span>
                            </div>
                            
                            <div class="title-post">
                                <h1>{{ $municipalService->title }}</h1>
                                <ul class="post-tags">
                                    <li><i class="fa fa-user"></i><a href="#">Municipalidad de Cisnes</a></li>
                                </ul>
                            </div>
                            
                            <div class="post-content">
                                {!! $municipalService->body !!}
                                {{ $municipalService->text }} <a href="{{ $municipalService->url }}">{{ $municipalService->url }}</a>
                            </div>

                            <br>

                        </div>
                    </div>
                    <!-- End block content -->
                </div>

                @include('web.partials.socialsidebar')
            </div>
        </div>
    </section>
    <!-- End block-wrapper-section -->
@endsection