@extends('web.layouts.master')

@section('content')
    @if ($miniArticles->count() > 0)
    <br>
    <section class="ticker-news">
        <div class="container">
            <div class="ticker-news-box">
                <span class="breaking-news">Noticias</span>
                <span class="new-news">Nuevas</span>
                <ul id="js-news">
                    @foreach ($miniArticles as $miniArticle)
                        <li class="news-item"><span class="time-news">{{ $miniArticle->created_at->toFormattedDateString() }}</span>  <a href="{{ url('/noticias/' . $miniArticle->slug) }}">{{ $miniArticle->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <br>
    @endif

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="article-box">
                            <div class="title-section">
                                <h1><span class="world">Puerto Varas en la Prensa</span></h1>
                            </div>

                            <div class="news-post article-post">
                                @foreach($presses as $press)
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="post-gallery">
                                                <a href="#modalPrensa{{ $press->id }}"><img alt="Prensa Puerto Varas" src="{{ asset('uploads/presses/' . $press->image) }}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="post-content">
                                                <p><strong>Fecha: </strong>{{ date('d-m-Y', strtotime($press->date)) }}</p>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-user"></i>Por Depto. Comunicaciones</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="remodal" data-remodal-id="modalPrensa{{ $press->id }}">
                                        <button data-remodal-action="close" class="remodal-close"></button>
                                        <p><img class="img-responsive" src="{{ asset('uploads/presses/' . $press->image) }}" alt="Prensa Puerto Varas"></p>
                                        <br>
                                        <p><strong>Fecha: </strong>{{ date('d-m-Y', strtotime($press->date)) }}</p>
                                        <br>
                                        <button data-remodal-action="cancel" class="btn btn-md btn-info">Cerrar</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {!! $presses->render() !!}
                    </div>
                </div>
                @include('web.partials.socialsidebar')
            </div>
        </div>
    </section>
@endsection