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
                                <h1><span class="world">Eventos</span></h1>
                            </div>

                            <div class="news-post article-post">
                                @foreach($events as $event)
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="post-gallery">
                                                <a href="#modalEvento{{ $event->id }}"><img alt="" src="{{ asset('uploads/events/' . $event->image) }}"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="post-content">
                                                <h2><a href="#modalEvento{{ $event->id }}">{{ $event->title }}</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-user"></i>Por Depto. Comunicaciones</li>
                                                </ul>
                                                <p><strong>Fecha del evento: </strong> {{ date('d', strtotime($event->date)) }} de {{ trans('months.month.' . date('F', strtotime($event->date))) }}, {{ date('Y', strtotime($event->date)) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="remodal" data-remodal-id="modalEvento{{ $event->id }}">
                                        <button data-remodal-action="close" class="remodal-close"></button>
                                        <h3>{{ $event->title }}</h3>
                                        <p><img class="img-responsive" src="{{ asset('uploads/events/' . $event->image) }}" alt=""></p>
                                        <br>
                                        <p><strong>Fecha del evento: </strong>{{ date('d', strtotime($event->date)) }} de {{ trans('months.month.' . date('F', strtotime($event->date))) }}, {{ date('Y', strtotime($event->date)) }}</p>
                                        <br>
                                        <button data-remodal-action="cancel" class="btn btn-md btn-info">Cerrar</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {!! $events->render() !!}
                    </div>
                </div>
                @include('web.partials.socialsidebar')
            </div>
        </div>
    </section>
@endsection