@extends('web.layouts.master')

@section('title') {{ $article->title }} @endsection

@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="single-post-box">
                            <div class="title-post">
                                <h1>{{ $article->title }}</h1>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ date('d', strtotime($article->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($article->created_at))) }}, {{ date('Y', strtotime($article->created_at)) }}</li>
                                    <li><i class="fa fa-user"></i>Por Depto. Comunicaciones</li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><a class="facebook" target="_blank" href="http://www.facebook.com/sharer.php?u={{ Request::url() }}"><i class="fa fa-facebook"></i><span>Compartir en Facebook</span></a></li>
                                    <li><a class="twitter" target="_blank" href="http://twitter.com/share?text={{ $article->title }}&via=municisnes"><i class="fa fa-twitter"></i><span>Compartir en Twitter</span></a></li>
                                </ul>
                            </div>

                            <div class="post-gallery">
                                <ul class="bxslider">
                                    @foreach($article->images as $image)
                                        <li><img src="{{ asset('uploads/articles/' . $image->image) }}" alt=""></li>
                                    @endforeach
                                </ul>
                                <span class="image-caption">Imágenes.</span>
                            </div>

                            <div class="post-content">
                                <blockquote>
                                    <p>{!! $article->subtitle !!}</p>
                                </blockquote>
                                {!! $article->body !!}
                            </div>

                            @if ($article->audios != null)
                                <div class="post-gallery">
                                    <div class="video-container">
                                        @foreach($article->videos as $video)
                                            <iframe type="text/html" width="640" height="360" scrolling="no" frameborder="no" src="{{ $video->url }}"></iframe>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            @if ($article->audios != null)
                                <div class="post-gallery audio-post">
                                    @foreach($article->audios as $audio)
                                        <iframe width="640" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&amp;url={{ $audio->url }}&amp;show_artwork=true&amp;maxwidth=640&amp;maxheight=960"></iframe>
                                    @endforeach
                                </div>
                            @endif

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><a class="facebook" target="_blank" href="http://www.facebook.com/sharer.php?u={{ Request::url() }}"><i class="fa fa-facebook"></i><span>Compartir en Facebook</span></a></li>
                                    <li><a class="twitter" target="_blank" href="http://twitter.com/share?text={{ $article->title }}&via=municisnes"><i class="fa fa-twitter"></i><span>Compartir en Twitter</span></a></li>
                                </ul>
                            </div>

                            @if ($otherArticles->count() > 0)
                                <br>
                                <div class="carousel-box owl-wrapper">
                                    <div class="title-section">
                                        <h1><span>Otras noticias</span></h1>
                                    </div>
                                    <div class="owl-carousel" data-num="3">
                                        @foreach($otherArticles as $otherArticle)
                                            <div class="item news-post image-post3">
                                                <img src="{{ asset('uploads/articles/' . $otherArticle->image) }}" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="{{ url('/noticias/' . $otherArticle->slug) }}">{{ $otherArticle->title }}</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>{{ date('d', strtotime($otherArticle->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($otherArticle->created_at))) }}, {{ date('Y', strtotime($otherArticle->created_at)) }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
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