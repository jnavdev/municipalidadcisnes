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
                                <h1>Secretaría Comunal de Planificación </h1>
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
                                                <img src="{{ asset('assets/web/images/equipo/ichavez.png') }}" alt="">
                                                <div class="hover-image">
                                                    <a class="zoom" href="{{ asset('assets/web/images/equipo/ichavez.png') }}">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <h5>Ignacio Chavez Rosas</h5>
                                            <span class="image-caption">ichavez@ptovaras.cl</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-content">
                                            <h2>Descripción. </h2>
                                            <p>Unidad que asesora al Alcalde y al Concejo en la elaboración de la estrategia, presupuesto y plan regulador, como asimismo en la definición de las políticas y evaluación de los planes, programas y proyectos de desarrollo comunal. </p>
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
                                    <img src="{{ asset('assets/web/images/equipo/juribe.png') }}" alt="">
                                    <div class="post-content">
                                        <h2><a href="#" title="prev post">Julieta Uribe Bastidas <br>+56 65 2361217 </a></h2>
                                        <h2><a href="#" title="prev post">juribe@ptovaras.cl </a></h2>

                                    <!-- <ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>+56 65 2361202 </li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>abahamonde@ptovaras.cl</span></a></li>
											</ul> -->
                                    </div>
                                </div>

                            </div>
                            <div class="contact-form-box">
                                <div class="title-section">
                                    <h1><span>Dependen de Secpla:</span> <span class="email-not-published"></span></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="{{ asset('assets/web/images/equipo/asaldivia.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de Planificación Urbana y Desarrollo Territorial</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Andres Saldivia Ruiz</a></h2>
                                            <h2><a href="#">Fono  : +56 65 2361216</a></h2>
                                            <h2><a href="#">Mail  : asaldivia@ptovaras.cl</a></h2>
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
                                            <a class="category-post world" href="#">Depto. de Aseo y Ornato</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Jaime Klenner</a></h2>
                                            <h2><a href="#">Fono  : +56 65 2361186</a></h2>
                                            <h2><a href="#">Mail  : jklenner@ptovaras.cl</a></h2>
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
                                            <img src="{{ asset('assets/web/images/equipo/kmorales.jpg') }}" alt="">
                                            <a class="category-post world" href="#">Depto. de Medio Ambiente</a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="#">Nombre: Karina Morales Guzman</a></h2>
                                            <h2><a href="#">Fono  : +56 65 2361305</a></h2>
                                            <h2><a href="#">Mail  : kmorales@ptovaras.cl</a></h2>
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
                                            <img src="{{ asset('assets/web/images/equipo/srain.png') }}" alt="">
                                            <a class="category-post world" href="#">Oficina de Presupuesto</a>
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

                            </div>
                                <div class="row">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="news-post standard-post2">
                                                <div class="post-gallery">
                                                    <img src="{{ asset('assets/web/images/equipo/pcareau.jpg') }}" alt="">
                                                    <a class="category-post world" href="#">Encargada de Vivienda</a>
                                                </div>
                                                <div class="post-title">
                                                    <h2><a href="#">Nombre: Paula Careau</a></h2>
                                                    <h2><a href="#">Fono: +56 65 23611242</a></h2>
                                                    <h2><a href="#">Mail: pcareau@ptovaras.cl</a></h2>
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