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

                                <h2>Medio Ambiente.</h2>

                            </div>

                            <div class="article-inpost">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="image-content">
                                            <div class="image-place">
                                                <a href="{{ asset('assets/web/images/medioambiente/Formulario Denuncia Pto Cisnes.docx')}}" target="_blank">Formulario Medio Ambiente</a>

                                            </div>
                                            <span class="image-caption">Formulario Denuncia Pto Cisnes.</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="image-content">
                                            <div class="image-place">
                                                <a href="{{ asset('assets/web/images/medioambiente/Informe 3 R.doc')}}" target="_blank">Informe 3</a>
                                            </div>
                                            <span class="image-caption">Informe 3 R.</span>
                                        </div>
                                    </div>  <div class="col-md-6">
                                        <div class="image-content">
                                            <div class="image-place">
                                                <a href="{{ asset('assets/web/images/medioambiente/Modelo de Ordenanza Municipal Medio Ambiental revisada 2018.doc')}}" target="_blank">Ordenanza 3</a>
                                            </div>
                                            <span class="image-caption">Modelo de Ordenanza Municipal Medio Ambiental.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article-inpost">
                                <iframe src="{{ asset('assets/web/pdf/Documento_Estrategia_Ambiental_Municipal.pdf')}}" width="750" height="1000" style="border: none;"></iframe>
                            </div>

                            <div class="post-content">


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