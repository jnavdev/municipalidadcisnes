@extends('web.layouts.master')

@section('content')
    <section class="heading-news2">
        <div class="container">
            <div class="iso-call heading-news-box">
                <div class="image-slider snd-size">
                    <ul class="bxslider">
                        @foreach ($banners as $banner)
                            <li onclick="window.open('{{ url('noticias/' . $banner->slug) }}', '_blank')" style="cursor: pointer; cursor: hand;">
                                <div class="news-post image-post">
                                    <img style="height: 450px; object-fit: cover;" src="{{ asset('uploads/articles/' . $banner->image)}}" alt="{{ $banner->title }}">
                                    <div class="hover-box ">
                                        <div class="inner-hover hover-box-principal ">
                                           <div>
                                            <h2><a href="{{ url('noticias/' . $banner->slug) }}" style="font-size: 18px;">{{ str_limit($banner->title,70)}}</a>  </h2>
                                            <ul class="post-tags">
                                                {{-- <li><i class="fa fa-clock-o"></i>27 may 2013</li> --}}
                                                <li><i class="fa fa-user"></i>Por Depto. Comunicaciones</li>
                                            </ul>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                @foreach($posters as $poster)
                    @php
                        $url = '';
                        if ($poster->url) {
                            $url = $poster->url;
                        } else {
                            $url = '#';
                        }
                    @endphp
                    <div class="news-post  default-size" onclick="window.open('{{ $url }}', '_blank')" style="cursor: pointer; cursor: hand;">
                        <a target="_blank" href="{{ $poster->url }}"><img style="width: 224px; height: 212px;" src="{{ asset('uploads/informations/' . $poster->image)}}" alt="{{ $poster->title }}"></a>
                        <div class="hover-box">
                            <div class="inner-hover">
                                <h2><a href="{{ $url }}" target="_blank"></a></h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ticker-news">
        <div class="container">
            <div class="ticker-news-box">
                <span class="breaking-news">Noticias</span>
                <span class="new-news">Nuevas</span>
                <ul id="js-news">
                    @foreach ($miniArticles as $miniArticle)
                        <li class="news-item"><span class="time-news">{{ date('d', strtotime($miniArticle->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($miniArticle->created_at))) }}, {{ date('Y', strtotime($miniArticle->created_at)) }}</span>  <a href="{{ url('noticias/' . $miniArticle->slug) }}">{{ $miniArticle->title }}.</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <!-- features-today-section
               ================================================== -->
    <section class="features-today">
        <br><br>
        <div class="container">

            <div class="title-section">
                <h1><a href="{{ url('/servicios-municipales') }}"><span>Servicios Municipales</span></a></h1>
            </div>

            <div class="features-today-box owl-wrapper">
                <div class="owl-carousel" data-num="4">

                    @foreach ($municipalServices as $municipalService)
                        <div class="item news-post standard-post">
                            <div class="post-gallery">
                                <a href="{{ url('/servicios-municipales/' . $municipalService->slug) }}"><img src="{{ asset('uploads/municipalservices/' . $municipalService->image)}}" alt="{{ $municipalService->title }}"></a>
                                {{--<a class="category-post food" href="#">Alcal</a>--}}
                            </div>
                            <div class="post-content">
                                <h2><a href="{{ url('/servicios-municipales/' . $municipalService->slug) }}">{{ $municipalService->title }}</a></h2>
                                <ul class="post-tags">
                                    <!-- <li><i class="fa fa-clock-o"></i>27 may 2013</li> -->
                                    <li><i class="fa fa-user"></i> Ilustre Municipalidad de Puerto Varas</li>
                                    <!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
                                </ul>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>
    <!-- End features-today-section -->

    <!-- block-wrapper-section
    ================================================== -->
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!-- block content -->
                    <div class="block-content">

                        <!-- block content -->
                        <div class="block-content">

                            <!-- masonry box -->
                            <div class="masonry-box">

                                <div class="title-section">
                                    <h1><a href="{{ url('/noticias') }}"><span>Noticias</span></a> <a href="{{ url('/noticias') }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i> Ver Todo</a></h1>
                                </div>

                                <div class="latest-articles iso-call">

                                    @foreach ($articles as $article)
                                        <div class="news-post standard-post2 default-size">
                                            <div class="post-gallery">
                                                <a href="{{ url('noticias/' . $article->slug) }}"><img src="{{ asset('uploads/articles/' . $article->image)}}" alt=""></a>
                                            </div>
                                            <div class="post-title">
                                                <h2><a href="{{ url('noticias/' . $article->slug) }}">{{ str_limit($article->title,70)}}</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>{{ date('d', strtotime($article->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($article->created_at))) }}, {{ date('Y', strtotime($article->created_at)) }}</li>
                                                    <li><i class="fa fa-user"></i>Por Depto. Comunicaciones</li>
                                                    <!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- End masonry box -->
                        </div>
                        <!-- End block content -->
                    </div>
                    <!-- End block content -->
                </div>
                @include('web.partials.sidebar')

            </div>

        </div>
    </section>
    <!-- End block-wrapper-section -->



    <!-- features-today-section
        ================================================== -->
    <section class="features-today">
        <div class="container">
            <div class="title-section">
                <h1><a href="{{ url('/puerto-varas-informa') }}"><span>Puerto Varas Informa</span></a> <a href="{{ url('/puerto-varas-informa') }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i> Ver Todo</a></h1>

            </div>

            <div class="features-today-box owl-wrapper">
                <div class="owl-carousel" data-num="4">
                    @foreach ($informations as $information)
                        <div class="item news-post standard-post">
                            <div class="post-gallery">
                                <a @if ($information->url != null) target="_blank" @endif href="@if ($information->url != null) {{ $information->url }} @else #informationModal{{ $information->id }} @endif"><img style="max-width: 263px; max-height: 179px;" src="{{ asset('uploads/informations/' . $information->image)}}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h2><a @if ($information->url != null) target="_blank" @endif href="@if ($information->url != null) {{ $information->url }} @else #informationModal{{ $information->id }} @endif">{{ $information->title }}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-user"></i> Ilustre Municipalidad de Puerto Varas</li>
                                </ul>
                            </div>
                            @if ($information->url == null)
                                <div id="modals">
                                    <div class="remodal" data-remodal-id="informationModal{{ $information->id }}">
                                        <button data-remodal-action="close" class="remodal-close"></button>
                                        <h3>{{ $information->title }}</h3>
                                        <p><img class="img-responsive" src="{{ asset('uploads/informations/' . $information->image) }}" alt=""></p>
                                        <br>
                                        <button data-remodal-action="cancel" class="btn btn-md btn-info">Cerrar</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End features-today-section -->
    <!-- seccion Videos Home
 ================================================== -->
    <section class="feature-video">
        <div class="container">
            <div class="title-section white">
                <h1><span>Videos</span></h1>
            </div>

            <div class="features-video-box owl-wrapper">
                <div class="owl-carousel" data-num="4">

                    @foreach ($videos as $video)
                        <div class="item news-post video-post">
                            <a href="https://www.youtube.com/watch?v={{ substr($video->url, 30) }}" class="video-link"><i class="fa fa-play-circle-o"></i></a>
                            <img alt="" src="{{ asset('uploads/articles/' . $video->article->image)}}">
                            <div class="hover-box">
                                <h2><a href="{{ url('noticias/' . $video->article->slug) }}">{{ $video->article->title }}</a></h2>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ date('d', strtotime($video->article->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($video->article->created_at))) }}, {{ date('Y', strtotime($video->article->created_at)) }}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End seccion Videos Home -->


    <!-- block-wrapper-section
     ================================================== -->
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- masonry box -->
                        <div class="masonry-box">

                            <!-- grid box -->
                            <div class="grid-box">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="title-section">
                                            <h1><span>Concursos y Licitaciones</span></h1>
                                        </div>
                                        <ul class="list-posts">
                                            <li>
                                                <a href="{{ asset('assets/web/CONCURSO.pdf') }}" target="_blank">CONCURSO.pdf
                                                    <img src="{{ asset('assets/web/images/ord.png')}}" alt="Ordenanzas municipales" style="height: 80px;">
                                                </a>
                                                <div class="post-content">
                                                    <h2><a href="{{ asset('assets/web/CONCURSO.pdf') }}" target="_blank">Resultados del concurso Director CESFAM Puerto Varas</a></h2>

                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i> Puerto Varas</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="{{ asset('assets/web/RESULTADOS.pdf') }}" target="_blank">Psicolaboral.pdf
                                                    <img src="{{ asset('assets/web/images/ord.png')}}" alt="Ordenanzas municipales" style="height: 80px;">
                                                </a>
                                                <div class="post-content">
                                                    <h2><a href="{{ asset('assets/web/RESULTADOS.pdf') }}" target="_blank">Resultados Psicolaboral concurso Director CESFAM Puerto Varas</a></h2>

                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i> Puerto Varas</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="{{ asset('assets/web/concursos/BASES-TECNICAS-CONCURSO.pdf')}}" target="_blank">
                                                    <img src="{{ asset('assets/web/images/concurso-monitor.jpg')}}" alt="Concurso" style="height: 80px;">
                                                </a>
                                                <div class="post-content">
                                                    <h2><a href="{{ asset('assets/web/concursos/BASES-TECNICAS-CONCURSO.pdf')}}" target="_blank">Monitor Comunitario</a></h2>

                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i> Puerto Varas</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="title-section">
                                            <h1><span>Ordenanzas</span></h1>
                                        </div>
                                        <ul class="list-posts">
                                            <li>
                                                <a href="https://www.portaltransparencia.cl/PortalPdT/pdtta/-/ta/MU236/AR/AREST/8311042" target="_blank">
                                                    <img src="{{ asset('assets/web/images/ord.png')}}" alt="Ordenanzas municipales" style="height: 80px;">
                                                </a>
                                                <div class="post-content">
                                                    <h2><a href="https://www.portaltransparencia.cl/PortalPdT/pdtta/-/ta/MU236/AR/AREST/8311042" target="_blank">Ordenanzas</a></h2>

                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i> Puerto Varas</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="{{ asset('assets/web/TODASLASORGANIZACIONES.xlsx') }}" target="_blank">
                                                    <img src="{{ asset('assets/web/images/COSOC.png')}}" alt="Ordenanzas municipales" style="height: 80px;">
                                                </a>
                                                <div class="post-content">
                                                    <h2><a href="{{ asset('assets/web/TODASLASORGANIZACIONES.xlsx') }}" target="_blank">COSOC</a></h2>

                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i> Puerto Varas</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="title-section">
                                            <h1><span>Otros</span></h1>
                                        </div>

                                        <ul class="list-posts">
                                            {{--<li>
                                                <a href="{{ url('http://www.censo2017.cl') }}" target="_blank"><img style="height: 80px;" src="{{ asset('assets/web/images/censo.jpg')}}" alt=""></a>
                                                <div class="post-content">
                                                    <h2><a href="{{ url('http://www.censo2017.cl') }}" target="_blank">Censo 2017</a></h2>
                                                    <ul class="post-tags">
                                                        <li><a href="{{ asset('assets/web/images/FolletoCenso2017.pdf') }}" target="_blank"><i class="fa fa-clock-o"></i>Folleto Censo 2017</li></a>
                                                    </ul>
                                                </div>
                                            </li>
--}}
                                            <li>
                                                <a href="{{ url('https://www.facebook.com/BtcaPuertoVaras') }}" target="_blank">
                                                    <img style="height: 80px;" src="{{ asset('assets/web/images/bp.jpg')}}" alt="">
                                                </a>
                                                <div class="post-content">
                                                    <h2><a href="{{ url('https://www.facebook.com/BtcaPuertoVaras') }}" target="_blank">Biblioteca Paul Harris </a></h2>
                                                    <ul class="post-tags">
                                                        <li><a href="{{ url('https://bibliotecapaulharris.wordpress.com/') }}" target="_blank"><i class="fa fa-clock-o"></i>Blog Biblioteca</li></a>
                                                    </ul>
                                                </div>
                                            </li>
                                            {{--<li>
                                                <img src="{{ asset('assets/web/images/prog3.png')}}" alt="">
                                                <div class="post-content">
                                                    <h2><a href="#">Academia Municipal</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 Diciembre 2016</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/web/images/prog1.png')}}" alt="">
                                                <div class="post-content">
                                                    <h2><a href="#">Alerta Hogar... </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 Diciembre 2016</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <img src="{{ asset('assets/web/images/prog2.png')}}" alt="">
                                                <div class="post-content">
                                                    <h2><a href="#">Concurso Alta Dirección Pública </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 Diciembre 2016</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/web/images/prog3.png')}}" alt="">
                                                <div class="post-content">
                                                    <h2><a href="#">Academia Municipal</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 Diciembre 2016</li>
                                                    </ul>
                                                </div>
                                            </li>--}}
                                        </ul>
                                    </div>



                                </div>

                            </div>
                            <!-- End grid box -->

                        </div>
                        <!-- End masonry box -->


                    </div>
                    <!-- End block content -->

                </div>



            </div>

        </div>
    </section>
    <!-- End block-wrapper-section -->
@endsection