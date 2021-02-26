@extends('web.layouts.master')

@section('content')

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- single-post box -->
                        <div class="single-post-box wide-version">

                            <div class="post-content">

                                <h2>Plano Regulador.</h2>

                            </div>

                            <div class="article-inpost">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="image-content">
                                            <div class="image-place">
                                                <a href="{{ asset('assets/web/images/planos/lajunta.pdf')}}" target="_blank"><img src="{{ asset('assets/web/images/planos/Lajunta.jpg')}}" alt="" ></a>

                                            </div>
                                            <span class="image-caption">Plano la Junta.</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="image-content">
                                            <div class="image-place">
                                                <a href="{{ asset('assets/web/images/planos/Planos-Puerto-Puyuhuapi1.pdf')}}" target="_blank"><img src="{{ asset('assets/web/images/planos/Puyuhuapi.JPG')}}" alt="" ></a>
                                            </div>
                                            <span class="image-caption">Planos Puerto Puyuhuapi.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-content">


                            </div>

                            <div class="article-inpost">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="image-content">
                                            <div class="image-place">
                                                <a href="{{ asset('assets/web/images/planos/Plano-Puerto-Cisnes1.pdf')}}" target="_blank"><img src="{{ asset('assets/web/images/planos/Plano-Puerto-Cisnes1.jpg')}}" alt="" ></a>


                                            </div>
                                            <span class="image-caption">Plano Puerto Cisnes.</span>
                                        </div>
                                    </div>
                                   {{-- <div class="col-md-6">
                                        <div class="image-content">
                                            <div class="image-place">
                                                <img src="upload/news-posts/single-art7.jpg" alt="">
                                                <div class="hover-image">
                                                    <a class="zoom" href="upload/news-posts/single-art7.jpg"><i class="fa fa-arrows-alt"></i></a>
                                                </div>
                                            </div>
                                            <span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>



                            <div class="post-tags-box">
                                <ul class="tags-box">
                                    <li><i class="fa fa-tags"></i><span>Ordenanzas :</span></li>
                                    <li><a href="{{ asset('assets/web/images/planos/Plan_Regulador_de_Puerto_Cisnes_Nueva_Ordenanza_Local.pdf')}}" target="_blank">Local Plan Regulador Puerto Cisnes</a></li>
                                    <li><a href="{{ asset('assets/web/images/planos/InterurbanoPuyuhuapi-LaJunta.pdf')}}" target="_blank">Local Plan Regulador Puyuhuapi - La Junta</a></li>


                                </ul>
                            </div>




                            <div class="about-more-autor">

                                <div class="tab-content">





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
    <!-- single-post-wide-slider
			================================================== -->
   
@endsection