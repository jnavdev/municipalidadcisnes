@extends('web.layouts.master')

@section('content')
    <!-- block-wrapper-section
			================================================== -->
    <section class="block-wrapper">
        <div class="container">

            <!-- block content -->
            <div class="block-content non-sidebar">

                <!-- grid box -->
                <div class="grid-box">
                    <div class="title-section">
                        <h1><span class="world">CONCEJO MUNICIPAL</span></h1>
                    </div>

                    <div class="image-slider">
                        <ul class="bxslider">
                            <li>
                                <div class="news-post image-post2">
                                    <div class="post-gallery">
                                        <img src="{{ asset('assets/web/images/concejo/concejo1.png')}}" alt="">
                                        <div class="hover-box">
                                            <div class="inner-hover">

                                                <h2><a href="#">Concejo Municipal 2016 - 2020.</a></h2>
                                              {{--  <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    <li><i class="fa fa-eye"></i>872</li>
                                                    <a class="category-post world" href="#">business</a>
                                                </ul>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="news-post image-post2">
                                    <div class="post-gallery">
                                        <img src="{{ asset('assets/web/images/concejo/concejo2.png')}}" alt="">
                                        <div class="hover-box">
                                            <div class="inner-hover">

                                                <h2><a href="#">Concejo Municipal 2016 - 2020. </a></h2>
                                                {{--<ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    <li><i class="fa fa-eye"></i>872</li>
                                                </ul>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <!-- grid box -->
                    <div class="grid-box">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div class="post-gallery">
                                        <img src="{{ asset('assets/web/images/concejo/renato.png')}}" alt="">

                                    </div>
                                    <div class="post-title">
                                        <h2>Concejal Renato Aichele Horn (RN).</h2>
                                        <ul class="post-tags">

                                            <li><i class="fa fa-user"></i>Mail: concejal.aichele@ptovaras.cl</li>

                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        <p>Su compromiso con Puerto Varas es contribuir a que se los dineros públicos sean utilizados en los vecinos, en la ciudad y que sea visible el cambio.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div class="post-gallery">
                                        <img src="{{ asset('assets/web/images/equipo/aburto.png')}}" alt="">

                                        </a>
                                    </div>
                                    <div class="post-title">
                                        <h2>Concejal Javier Aburto Oyarzun (DC).</h2>
                                        <ul class="post-tags">

                                            <li><i class="fa fa-user"></i>Mail: concejal.aburto@ptovaras.cl</li>

                                        </ul>

                                    </div>
                                    <div class="post-content">
                                        <p>Su compromiso con Puerto Varas ...</p>
                                        {{--<a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div class="post-gallery">
                                        <img src="{{ asset('assets/web/images/concejo/becerra.png')}}" alt="">

                                    </div>
                                    <div class="post-title">
                                        <h2>Concejal Luis Becerra Vargas (IND)</h2>
                                        <ul class="post-tags">

                                            <li><i class="fa fa-user"></i>Mail: concejal.becerra@ptovaras.cl</li>

                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        <p>Su compromiso con Puerto Varas es aportar a recuperar la confianza en las autoridades, organizaciones ciudadanas y municipio. </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div class="post-gallery">
                                        <img src="{{ asset('assets/web/images/equipo/pcortes.png')}}" alt="">

                                    </div>
                                    <div class="post-title">
                                        <h2>Concejal Patricio Cortes Jones (IND).</h2>
                                        <ul class="post-tags">

                                            <li><i class="fa fa-user"></i>Mail: concejal.cortes@ptovaras.cl</li>

                                        </ul>

                                    </div>
                                   {{-- <div class="post-content">
                                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>

                                    </div>--}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div class="post-gallery">
                                        <img src="{{ asset('assets/web/images/equipo/rbenavides.png')}}" alt="">

                                    </div>
                                    <div class="post-title">
                                        <h2>Concejal Rosa Benavides Mundaca (DC).</h2>
                                        <ul class="post-tags">

                                            <li><i class="fa fa-user"></i>Mail: concejal.benavides@ptovaras.cl</li>

                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        <p>Quiere para Puerto Varas un desarrollo armónico con su tradición, historia y organizaciones. Sus compromisos con la comunidad son cumplir lo que dicta la ley, fiscalizar y velar por la probidad, equidad y participación ciudadana.
                                            .</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="news-post standard-post2">
                                    <div class="post-gallery">
                                        <img src="{{ asset('assets/web/images/equipo/msalazar.png')}}" alt="">

                                    </div>
                                    <div class="post-title">
                                        <h2>Concejal Marcelo Salazar Vallejos (UDI).</h2>
                                        <ul class="post-tags">

                                            <li><i class="fa fa-user"></i>Mail: concejal.salazar@ptovaras.cl</li>

                                        </ul>
                                    </div>
                                   {{-- <div class="post-content">
                                        <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>

                                    </div>--}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End grid box -->



                   {{-- <div class="center-button">
                        <a href="#"><i class="fa fa-refresh"></i> More from featured</a>
                    </div>--}}

                </div>
                <!-- End grid box -->

            </div>
            <!-- End block content -->
        </div>
    </section>
    <!-- End block-wrapper-section -->




            </div>

        </div>
    </section>
    <!-- End block-wrapper-section -->
@endsection