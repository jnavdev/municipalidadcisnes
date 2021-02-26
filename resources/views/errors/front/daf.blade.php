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
                                <h1>Dirección de Administración y Finanzas </h1>
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
                                                <img src="{{ asset('assets/web/upload/news-posts/listw4.jpg') }}" alt="">
                                                <div class="hover-image">
                                                    <a class="zoom" href="{{ asset('assets/web/upload/news-posts/listw4.jpg') }}">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <h5>Loreto Vilches.-  Directora DAF</h5>
                                            <span class="image-caption">lvilchez@ptovaras.cl</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-content">
                                            <h2>Descripción. </h2>
                                            <p>Asesora al Alcalde en la administración del personal municipal y financiera de los bienes municipales. También se preocupa de la adecuada y oportuna provisión de los recursos humanos, materiales, financieros y tecnológicos a las distintas dependencias municipales. </p>
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
                                    <img src="{{ asset('assets/web/upload/news-posts/listw4.jpg') }}" alt="">
                                    <div class="post-content">
                                        <h2><a href="#" title="prev post">Paola Navarro  <br>+56 65 2361210 </a></h2>
                                        <h2><a href="#" title="prev post">pnavarro@ptovaras.cl </a></h2>

                                    <!-- <ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>+56 65 2361202 </li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>abahamonde@ptovaras.cl</span></a></li>
											</ul> -->
                                    </div>
                                </div>

                            </div>
                            <div class="contact-form-box">
                                <div class="title-section">
                                    <h1><span>Dependen de Dirección de Administración y Finanzas:</span> <span class="email-not-published"></span></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/images/equipo/rcarrion.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de Tesorería Municipal</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Robinson Carrión Carrión</a></h2>
                                            <h2><a href="#">Fono  : +56 65 2361108</a></h2>
                                            <h2><a href="#">Mail  : rcarrion@ptovaras.cl</a></h2>
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
                                            <img src="{{ asset('assets/web/images/equipo/nsaldivia.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de  Rentas y Patentes</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Norma Saldivia Vargas</a></h2>
                                            <h2><a href="#">Fono  : +56 65 2361229</a></h2>
                                            <h2><a href="#">Mail  : nsaldivia@ptovaras.cl</a></h2>
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
                            </br>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/images/equipo/srain.png') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de Contabilidad</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Sandra Rain Coñecar</a></h2>
                                            <h2><a href="#">Fono  : +56 65 2361118</a></h2>
                                            <h2><a href="#">Mail  : srain@ptovaras.cl</a></h2>
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
                                            <img src="{{ asset('assets/web/images/equipo/rloyola.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de Recursos Humanos</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Roberto Loyola Jelbes</a></h2>
                                            <h2><a href="#">Fono  : +56 65 2361143</a></h2>
                                            <h2><a href="#">Mail  : rloyola@ptovaras.cl</a></h2>
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
                            </br>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/images/equipo/jaguilar.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de Tránsito y Transporte Público</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: José Aguilar Rojas</a></h2>
                                            <h2><a href="#">Fono  : +56 65 2361205</a></h2>
                                            <h2><a href="#">Mail  : jaguilar@ptovaras.cl</a></h2>
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