@extends('web.layouts.master')

@section('title') {{ $turismArticle->title }} @endsection

@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="single-post-box">
                            <div class="title-post">
                                <h1>{{ $turismArticle->title }}</h1>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ date('d', strtotime($turismArticle->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($turismArticle->created_at))) }}, {{ date('Y', strtotime($turismArticle->created_at)) }}</li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><a class="facebook" target="_blank" href="http://www.facebook.com/sharer.php?u={{ Request::url() }}"><i class="fa fa-facebook"></i><span>Compartir en Facebook</span></a></li>
                                    <li><a class="twitter" target="_blank" href="http://twitter.com/share?text={{ $turismArticle->title }}&via=municisnes"><i class="fa fa-twitter"></i><span>Compartir en Twitter</span></a></li>
                                </ul>
                            </div>

                            <div class="post-gallery">
                                <ul class="bxslider">
                                    @foreach($turismArticle->images as $image)
                                        <li><img src="{{ asset('uploads/turismarticles/' . $image->image) }}" alt=""></li>
                                    @endforeach
                                </ul>
                                <span class="image-caption">Imágenes.</span>
                            </div>

                            <div class="post-content">
                                {!! $turismArticle->body !!}
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><a class="facebook" target="_blank" href="http://www.facebook.com/sharer.php?u={{ Request::url() }}"><i class="fa fa-facebook"></i><span>Compartir en Facebook</span></a></li>
                                    <li><a class="twitter" target="_blank" href="http://twitter.com/share?text={{ $turismArticle->title }}&via=municisnes"><i class="fa fa-twitter"></i><span>Compartir en Twitter</span></a></li>
                                </ul>
                            </div>

                            @if ($otherTurismArticles->count() > 0)
                                <br>
                                <div class="carousel-box owl-wrapper">
                                    <div class="title-section">
                                        <h1><span>Otros artículos</span></h1>
                                    </div>
                                    <div class="owl-carousel" data-num="3">
                                        @foreach($otherTurismArticles as $otherArticle)
                                            <div class="item news-post image-post3">
                                                <img src="{{ asset('uploads/turismarticles/' . $otherArticle->image) }}" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="{{ url('/turismo/' . $otherArticle->slug) }}">{{ $otherArticle->title }}</a></h2>
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