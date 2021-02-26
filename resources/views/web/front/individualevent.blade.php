@extends('web.layouts.master')

@section('title') {{ $event->title }} @endsection

@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="single-post-box">
                            <div class="title-post">
                                <h1>{{ $event->title }}</h1>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ date('d', strtotime($event->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($event->created_at))) }}, {{ date('Y', strtotime($event->created_at)) }}</li>
                                    <li><i class="fa fa-user"></i>Por Depto. Comunicaciones</li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><a class="facebook" target="_blank" href="http://www.facebook.com/sharer.php?u={{ Request::url() }}"><i class="fa fa-facebook"></i><span>Compartir en Facebook</span></a></li>
                                    <li><a class="twitter" target="_blank" href="http://twitter.com/share?text={{ $event->title }}&via=municisnes"><i class="fa fa-twitter"></i><span>Compartir en Twitter</span></a></li>
                                </ul>
                            </div>

                            <div class="post-gallery">
                                <ul class="bxslider">
                                    @foreach($event->images as $image)
                                        <li><img src="{{ asset('uploads/events/' . $image->image) }}" alt=""></li>
                                    @endforeach
                                </ul>
                                <span class="image-caption">Imágenes.</span>
                            </div>

                            <div class="post-content">
                                <h5>Fecha del evento: {{ date('d-m-Y', strtotime($event->date)) }}</h5>
                                <hr>
                                {!! $event->body !!}
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><a class="facebook" target="_blank" href="http://www.facebook.com/sharer.php?u={{ Request::url() }}"><i class="fa fa-facebook"></i><span>Compartir en Facebook</span></a></li>
                                    <li><a class="twitter" target="_blank" href="http://twitter.com/share?text={{ $event->title }}&via=municisnes"><i class="fa fa-twitter"></i><span>Compartir en Twitter</span></a></li>
                                </ul>
                            </div>

                            @if ($otherEvents->count() > 0)
                                <br>
                                <div class="carousel-box owl-wrapper">
                                    <div class="title-section">
                                        <h1><span>Otros eventos</span></h1>
                                    </div>
                                    <div class="owl-carousel" data-num="3">
                                        @foreach($otherEvents as $otherEvent)
                                            <div class="item news-post image-post3">
                                                <img src="{{ asset('uploads/events/' . $otherEvent->image) }}" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="{{ url('/eventos/' . $otherEvent->slug) }}">{{ $otherEvent->title }}</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>{{ date('d', strtotime($otherEvent->created_at)) }} de {{ trans('months.month.' . date('F', strtotime($otherEvent->created_at))) }}, {{ date('Y', strtotime($otherEvent->created_at)) }}</li>
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

                @include('web.partials.sidebar')

            </div>
        </div>
    </section>
@endsection