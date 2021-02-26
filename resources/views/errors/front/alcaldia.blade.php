@extends('web.layouts.master')
@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!-- block content -->
                    <div class="block-content">
                        <!-- single-post box -->
                        <div class="single-post-box">

                            <div class="title-post">
                                <h1>Alcaldía </h1>
                                <!-- <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li>
                                    <li><i class="fa fa-eye"></i>872</li>
                                </ul> -->
                            </div>
                            <div class="article-inpost">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="image-content">
                                            <div class="image-place">
                                                <img src="{{ asset('assets/web/images/equipo/rbahamonde.png') }}" alt="">
                                                <div class="hover-image">
                                                    <a class="zoom" href="{{ asset('assets/web/images/equipo/rbahamonde.png') }}">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <h5>Alcalde Dr. Ramón Bahamonde Cea.</h5>
                                            <span class="image-caption">rbahamonde@ptovaras.cl</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-content">
                                            <h2>Descripción. </h2>
                                            <p>Máxima autoridad municipal, elegida por votación popular. Le corresponde la dirección y administración superior y la supervigilancia del funcionamiento del Municipio. </p>
                                            <!-- <p>Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. </p>
                                            <p>Nunc iaculis mi in ante. Vivamus nibh feugiat est.</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span><strong>Secretarias</strong></span></li>
                                </ul>
                            </div>
                            <div class="prev-next-posts">
                                <div class="prev-post">
                                    <img src="{{ asset('assets/web/images/equipo/abahamondes.png') }}" alt="">
                                    <div class="post-content">
                                        <h2><a href="#" title="prev post">Alejandra Bahamondes <br>+56 65 2361202 </a></h2>
                                        <h2><a href="#" title="prev post">abahamonde@ptovaras.cl </a></h2>

                                    <!-- <ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>+56 65 2361202 </li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>abahamonde@ptovaras.cl</span></a></li>
											</ul> -->
                                    </div>
                                </div>
                                <div class="next-post">
                                    <img src="{{ asset('assets/web/images/equipo/mlehue.jpg') }}" alt="">
                                    <div class="post-content">
                                        <h2><a href="#" title="next post">Mónica Lehue<br>+56 65 2361315 </a></h2>
                                        <h2><a href="#" title="prev post">mlehue@ptovaras.cl </a></h2>
                                        <!-- <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a></li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form-box">
                                <div class="title-section">
                                    <h1><span>Dependen de Alcaldia:</span> <span class="email-not-published"></span></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/images/equipo/cflores.png') }}" alt="">
                                            <a class="category-post world" href="#">Jefa de Gabinete</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Claudia Flores</a></h2>
                                            <h2><a href="#">Fono: +56 65 2361129</a></h2>
                                            <h2><a href="#">Mail: cflores@ptovaras.cl</a></h2>
                                            <!-- <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                <li><i class="fa fa-eye"></i>872</li>
                                            </ul> -->
                                        </div>
                                        <!-- <div class="post-content">
                                            <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                            <a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/upload/news-posts/im8.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. De Comunicaciones</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre:</a></h2>
                                            <h2><a href="#">Fono: +56 65 2361107</a></h2>
                                            <h2><a href="#">Mail: </a></h2>
                                            <!-- <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                <li><i class="fa fa-eye"></i>872</li>
                                            </ul> -->
                                        </div>
                                        <!-- <div class="post-content">
                                            <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                            <a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/upload/news-posts/im8.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. De Turismo</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Lorena Burgos</a></h2>
                                            <h2><a href="#">Fono: +56 65 236164</a></h2>
                                            <h2><a href="#">Mail: lburgos@ptovaras.cl</a></h2>
                                            <!-- <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                <li><i class="fa fa-eye"></i>872</li>
                                            </ul> -->
                                        </div>
                                        <!-- <div class="post-content">
                                            <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                            <a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single-post box -->
                    </div>
                    <!-- End block content -->
                </div>
                @include('web.partials.sidebar')
            </div>

        </div>
    </section>
    <!-- End block-wrapper-section -->
@endsection