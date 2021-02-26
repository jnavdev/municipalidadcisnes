@extends('web.layouts.master')

@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="article-box">
                            <div class="title-section">
                                <h1><span class="world">Noticias</span></h1>
                            </div>

                            <div class="news-post article-post">
                                @foreach($articles as $article)
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="post-gallery">
                                                <a href="{{ url('/noticias/' . $article->slug) }}"><img alt="" src="{{ asset('uploads/articles/' . $article->image) }}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="post-content">
                                                <h2><a href="{{ url('/noticias/' . $article->slug) }}">{{ $article->title }}</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>{{ date('d', strtotime($article->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($article->created_at))) }}, {{ date('Y', strtotime($article->created_at)) }}</li>
                                                    <li><i class="fa fa-user"></i>Por Depto. Comunicaciones</li>
                                                </ul>
                                                <p>
                                                    {{ strip_tags(substr($article->body, 0, 150)) }}[...]
                                                </p>
                                                <a href="{{ url('/noticias/' . $article->slug) }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Leer más</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {!! $articles->render() !!}
                    </div>
                </div>
                @include('web.partials.socialsidebar')
            </div>
        </div>
    </section>
@endsection