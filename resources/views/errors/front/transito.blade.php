@extends('web.layouts.master')
@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">

                <div class="col-sm-8">
                    <!-- block content -->
                    <div class="autor-box">

                        <img src="upload/users/avatar7.jpg" alt="">

                        <div class="autor-content">

                            <div class="autor-title">
                                <h1><span>Jane Smith</span><a href="autor-details.html">22 Posts</a></h1>
                                <ul class="autor-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>

                            <p>
                                Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada.
                            </p>

                        </div>

                    </div>
                </div>


            @include('web.partials.sidebar')
        </div>
    </section>
    <!-- End block-wrapper-section -->
@endsection