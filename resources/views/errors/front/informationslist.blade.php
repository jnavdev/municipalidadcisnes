@extends('web.layouts.master')

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
    <br>
    <!--FIN MINI NOTICIAS -->
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="grid-box">
                            <div class="title-section">
                                <h1><span class="world">Puerto Varas Informa</span></h1>
                            </div>

                            <div class="row">
                                @foreach ($informations as $information)
                                    <div class="col-md-4">
                                        <div class="news-post standard-post2">
                                            <div class="post-gallery">
                                                <a @if ($information->url != null) target="_blank" @endif href="@if ($information->url != null) {{ $information->url }} @else #informationModal{{ $information->id }} @endif"><img style="max-width: 230px; max-height: 157px;" src="{{ asset('uploads/informations/' . $information->image)}}" alt=""></a>
                                            </div>
                                            <div class="post-title">
                                                <h2><a @if ($information->url != null) target="_blank" @endif href="@if ($information->url != null) {{ $information->url }} @else #informationModal{{ $information->id }} @endif">{{ substr($information->title, 0, 20) }}[...]</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-user"></i>Ilustre Municipalidad de Puerto Varas</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($information->url == null)
                                        <div class="remodal" data-remodal-id="informationModal{{ $information->id }}">
                                            <button data-remodal-action="close" class="remodal-close"></button>
                                            <h3>{{ $information->title }}</h3>
                                            <p><img class="img-responsive" src="{{ asset('uploads/informations/' . $information->image) }}" alt=""></p>
                                            <br>
                                            <button data-remodal-action="cancel" class="btn btn-md btn-info">Cerrar</button>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        {!! $informations->render() !!}
                    </div>
                </div>
                @include('web.partials.socialsidebar')
            </div>
        </div>
    </section>
@endsection