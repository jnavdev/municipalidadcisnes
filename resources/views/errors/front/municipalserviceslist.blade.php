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
                    @if ($miniArticles->count() > 0)
                        @foreach ($miniArticles as $miniArticle)
                            <li class="news-item"><span class="time-news">{{ $miniArticle->created_at->toFormattedDateString() }}</span>  <a href="{{ url('/noticias/' . $miniArticle->slug) }}">{{ $miniArticle->title }}</li>
                        @endforeach
                    @else
                        <li class="news-item"><span class="time-news">11:36 pm</span>  <a href="#">Nuevas autoridades de Puerto Varas solicitaron al contralor regional realizar una auditoría interna a la Municipalidad lacustre.</a> El Alcalde Ramón Bahamonde... </li>
                        <li class="news-item"><span class="time-news">12:40 pm</span>  <a href="#">Municipalidad de Puerto Varas prepara junto al Instituto Nacional de Estadísticas CENSO 2017</a> Hoy en .... </li>
                        <li class="news-item"><span class="time-news">11:36 pm</span>  <a href="#">Ramón Bahamonde: el fenómeno que se impone en Puerto Varas </a></li>
                    @endif
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
                        <div class="article-box">
                            <div class="title-section">
                                <h1><span class="world">Servicios Municipales</span></h1>
                            </div>

                            <div class="news-post article-post">
                                @foreach($municipalServices as $service)
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="post-gallery">
                                                <a href="{{ url('/servicios-municipales/' . $service->slug) }}"><img alt="" src="{{ asset('uploads/municipalservices/' . $service->image) }}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="post-content">
                                                <h2><a href="{{ url('/servicios-municipales/' . $service->slug) }}">{{ $service->title }}</a></h2>
                                                <p>
                                                    {{ strip_tags(substr($service->body, 0, 150)) }}[...]
                                                </p>
                                                <a href="{{ url('/servicios-municipales/' . $service->slug) }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Más información</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {!! $municipalServices->render() !!}
                    </div>
                </div>
                @include('web.partials.socialsidebar')
            </div>
        </div>
    </section>
@endsection