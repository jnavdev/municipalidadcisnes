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
                                                <h2><a href="{{ url('noticias/' . $banner->slug) }}" style="font-size: 18px;">{{ \Str::limit($banner->title,70)}}</a>  </h2>
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
                    <div class="news-post  default-size" style="cursor: pointer; cursor: hand;">
                        <a href="{{ $poster->url }}" @if ($url != '#') target="_blank"@endif><img style="width: 224px; height: 212px;" src="{{ asset('uploads/informations/' . $poster->image)}}" alt="{{ $poster->title }}"></a>
                        <div class="hover-box">
                            <div class="inner-hover">
                                <h2><a ></a></h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- features-today-section
           ================================================== -->


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
                                                <h2><a href="{{ url('noticias/' . $article->slug) }}">{{ \Str::limit($article->title,70)}}</a></h2>
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




    <!-- seccion Videos Home
 ================================================== -->
   {{-- <section class="feature-video">
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
    </section>--}}

    <!-- latest-videos-section
			================================================== -->
    <section class="latest-videos-section">
        <div class="container">
            <div class="title-section">
                <h1><span>Videos Cisnes</span></h1>
            </div>

            <!-- slider-caption-box -->
            <div class="slider-caption-box2">

                <div class="slider-holder">
                    <ul class="slider-call">
                        @foreach($videos as $video)
                            @php
                                $step1 = explode('v=', $video->url);
                                $step2 = explode('&',$step1[1]);
                                $video_id = $step2[0];
                            @endphp
                            <li>
                                <div class="news-post image-post">
                                    <!-- youtube -->
                                    <iframe class="videoembed" src="{{ "http://www.youtube.com/embed/$video_id" }}" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" data-devanime="fadeIn" data-devanime-delay="0.6s"></iframe>
                                    <!-- End youtube -->
                                </div>

                            </li>
                        @endforeach
                    </ul>
                </div>
                <div id="bx-pager">
                    @php
                        $i = 0;
                    @endphp
                    @foreach($videos as $video)
                        <a data-slide-index="{{ $i }}" href="">
                            <img src="{{ asset('assets/web/images/banner/video1.png') }}" alt="">
                            {{ $video->title }}
                            <span><i class="fa fa-clock-o"></i>{{ $video->created_at->format('d-m-Y') }}</span>
                        </a>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </div>
            </div>
            <!-- End slider-caption-box -->
        </div>
    </section>

    <br>
    <section class="features-today">
        <div class="container">
            <div class="title-section">
                <h1><a href="{{ url('/cisnes-informa') }}"><span>Cisnes Informa</span></a> <a href="{{ url('/cisnes-informa') }}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i> Ver Todo</a></h1>

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
                                    <li><i class="fa fa-user"></i> Ilustre Municipalidad de Cisnes</li>
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
    <!-- block-wrapper-section
     ================================================== -->
    <!-- features-today-section
              ================================================== -->
   {{-- <section class="features-today">
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
                                --}}{{--<a class="category-post food" href="#">Alcal</a>--}}{{--
                            </div>
                            <div class="post-content">
                                <h2><a href="{{ url('/servicios-municipales/' . $municipalService->slug) }}">{{ $municipalService->title }}</a></h2>
                                <ul class="post-tags">
                                    <!-- <li><i class="fa fa-clock-o"></i>27 may 2013</li> -->
                                    <li><i class="fa fa-user"></i> Ilustre Municipalidad de Cisnes</li>
                                    <!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
                                </ul>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>--}}
    <!-- End features-today-section -->

    <!-- End latest-videos-section -->
    <!-- End seccion Videos Home -->




@endsection
