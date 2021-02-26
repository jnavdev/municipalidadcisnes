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
                                <iframe src="{{ asset('assets/web/pdf/pladeco2016-2017.pdf')}}" width="750" height="1000" style="border: none;"></iframe>
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