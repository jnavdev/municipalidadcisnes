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
                                <h1>Dirección de Desarrollo Comunitario </h1>
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
                                                <img src="{{ asset('assets/web/images/equipo/cbaez.png') }}" alt="">
                                                <div class="hover-image">
                                                    <a class="zoom" href="{{ asset('assets/web/images/equipo/cbaez.png') }}">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <h5>Directora Cristina Baez</h5>
                                            <span class="image-caption">cbaez@ptovaras.cl</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-content">
                                            <h2>Descripción. </h2>
                                            <p>Ejecuta acciones destinadas a la promoción del desarrollo económico, social y cultural de la comuna. De igual forma, administra los planes y programas asistenciales del Municipio como de otras entidades que le fueren encomendadas (red social de gobierno). </p>
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
                                        <h2><a href="#" title="prev post">Cecilia Cárdenas Mansilla <br>+56 65 2361250 </a></h2>
                                        <h2><a href="#" title="prev post">ccardenas@ptovaras.cl </a></h2>

                                    <!-- <ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>+56 65 2361202 </li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>abahamonde@ptovaras.cl</span></a></li>
											</ul> -->
                                    </div>
                                </div>

                            </div>
                            <div class="contact-form-box">
                                <div class="title-section">
                                    <h1><span>Dependen de DIDECO:</span> <span class="email-not-published"></span></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/upload/news-posts/im7.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. Social</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Carol Calzadilla.</a></h2>
                                            <h2><a href="#">Fono: +56 65 23611254</a></h2>
                                            <h2><a href="#">Mail: ccalzadilla@ptovaras.cl</a></h2>
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
                                            <img src="{{ asset('assets/web/images/equipo/fhuidobro.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de Organizaciones Comunitarias</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Francisco Huidobro</a></h2>
                                            <h2><a href="#">Fono: +56 65 2361269</a></h2>
                                            <h2><a href="#">Mail: fhuidobro@ptovaras.cl</a></h2>
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

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/upload/news-posts/im7.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de Fomento Productivo</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: María José Norambuena</a></h2>
                                            <h2><a href="#">Fono: +56 65 23611201</a></h2>
                                            <h2><a href="#">Mail: mnorambuena@ptovaras.cl</a></h2>
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
                                            <img src="{{ asset('assets/web/upload/news-posts/im7.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. Oficina de Deporte y Recreación</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: </a></h2>
                                            <h2><a href="#">Fono: +56 65 2361100</a></h2>
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
                            </div>
                            {{--<div class="row">
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/upload/news-posts/im7.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Oficina de Cultura</a>
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

                            </div>

--}}









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