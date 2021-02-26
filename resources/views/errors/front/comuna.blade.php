@extends('web.layouts.master')

@section('content')
    <!-- single-post-wide-slider
			================================================== -->
    <section class="single-wide">
        <div class="image-slider">
            <ul class="bxslider">
                <li>
                    <div class="news-post image-post">
                        <img src="{{ asset('assets/web/images/comuna/puerto1.png')}}" alt="">
                       {{--<div class="hover-box">
                            <div class="inner-hover">
                                <div class="container">
                                    <h1>HISTORIA DE PUERTO VARAS </h1>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </li>
                <li>
                    <div class="news-post image-post">
                        <img src="{{ asset('assets/web/images/comuna/puerto2.png')}}" alt="">
                        {{--<div class="hover-box">
                            <div class="inner-hover">
                                <div class="container">
                                    <h1>HISTORIA DE PUERTO VARAS </h1>

                                </div>
                            </div>
                        </div>--}}
                    </div>
                </li>
            </ul>
        </div>

    </section>

    <!-- End single-post-wide-slider -->

    <!-- block-wrapper-section
        ================================================== -->
    <br>
    <br>
    <br>
   

    <section class="block-wrapper">
        <div class="container">

            <!-- block content -->
            <div class="block-content">
            <div class="title-post">
                                <h2>HISTORIA DE PUERTO VARAS </h2>
                                <!-- <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li>
                                    <li><i class="fa fa-eye"></i>872</li>
                                </ul> -->
                            </div>

                <!-- single-post box -->
                <div class="single-post-box wide-version">

                    <div class="share-post-box">
                        {{--<ul class="share-box">
                            <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
                        </ul>--}}
                    </div>

                    <div class="post-content">


                        <blockquote>
                            <p>Puerto Varas, la Ciudad de las Rosas, es una comuna ubicada en la provincia de Llanquihue, región de Los Lagos, Chile. Fue creada a partir de la colonización europea, con inmigrantes que se asentaron en las orillas del lago Llanquihue entre los años 1852 y 1853.
                            </p></blockquote>
                        <p>Al ser creado el territorio de Colonización del Lago Llanquihue por Decreto Supremo emanado por el Ministro del Interior, Antonio Varas, con fecha 27 de junio de 1853, se comenzó un paulatino poblamiento de la zona. Fueron 212 colonos, principalmente alemanes, que arribaron al sector de la Fábrica lugar donde terminaba el camino desde Melipulli.
                           </p>
                        <p>El sector de Puerto Chico de la ciudad en dicha época tuvo un rol protagónico por ser el medio para que los habitantes tuvieran comunicación y trasporte por el Lago Llanquihue. Gracias al tesón y esfuerzo característico de los colonos hermanos, que hicieron crecer este asentamiento, se manifestó un acelerado desarrollo.
                            .</p>

                        <p>Puerto Varas se caracterizó desde sus inicios por su enfoque turístico, puesto que era paso obligatorio a la ruta a Bariloche, por los lagos andinos. En 1934 los ferrocarriles del Estado construyeron el gran Hotel Puerto Varas, el más lujoso del sur de Chile.

                        </p>
                    </div>

                    <div class="article-inpost">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image-content">
                                    <div class="image-place">
                                        <img src="{{ asset('assets/web/images/comuna/p1.png')}}" alt="">
                                        <div class="hover-image">
                                            <a class="zoom" href="{{ asset('assets/web/images/comuna/p1.png')}}"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                    <span class="image-caption">Puerto Varas, la Ciudad de las Rosas.</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="image-content">
                                    <div class="image-place">
                                        <img src="{{ asset('assets/web/images/comuna/p2.png')}}" alt="">
                                        <div class="hover-image">
                                            <a class="zoom" href="{{ asset('assets/web/images/comuna/p2.png')}}"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                    <span class="image-caption">Puerto Varas, la Ciudad de las Rosas.</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="image-content">
                                    <div class="image-place">
                                        <img src="{{ asset('assets/web/images/comuna/p3.png')}}" alt="">
                                        <div class="hover-image">
                                            <a class="zoom" href="{{ asset('assets/web/images/comuna/p3.png')}}"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                    <span class="image-caption">Puerto Varas, la Ciudad de las Rosas.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image-content">
                                    <div class="image-place">
                                        <img src="{{ asset('assets/web/images/comuna/p4.png')}}" alt="">
                                        <div class="hover-image">
                                            <a class="zoom" href="{{ asset('assets/web/images/comuna/p4.png')}}"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                    <span class="image-caption">Puerto Varas, la Ciudad de las Rosas.</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="image-content">
                                    <div class="image-place">
                                        <img src="{{ asset('assets/web/images/comuna/p5.png')}}" alt="">
                                        <div class="hover-image">
                                            <a class="zoom" href="{{ asset('assets/web/images/comuna/p5.png')}}"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                    <span class="image-caption">Puerto Varas, la Ciudad de las Rosas.</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="image-content">
                                    <div class="image-place">
                                        <img src="{{ asset('assets/web/images/comuna/p6.png')}}" alt="">
                                        <div class="hover-image">
                                            <a class="zoom" href="{{ asset('assets/web/images/comuna/p6.png')}}"><i class="fa fa-arrows-alt"></i></a>
                                        </div>
                                    </div>
                                    <span class="image-caption">Puerto Varas, la Ciudad de las Rosas.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                   {{-- <div class="post-content">

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

                    </div>--}}








                </div>
                <!-- End single-post box -->

            </div>
            <!-- End block content -->

        </div>
    </section>
    <!-- End block-wrapper-section -->

    </div>

           ¡

            </div>

        </div>
    </section>
    <!-- End block-wrapper-section -->
@endsection