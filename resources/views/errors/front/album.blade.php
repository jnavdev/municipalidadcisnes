@extends('web.layouts.master')

@section('content')
    <br>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
                        <div class="single-post-box">
                            <div class="title-section">
                                <h1><span class="world">{{ $album->name }}</span></h1>
                            </div>

                            <div class="article-inpost">
                                <div class="row">
                                    @foreach ($album->images as $image)
                                        <div class="col-md-4">
                                            <div class="image-content">
                                                <div class="image-place">
                                                    <img src="{{ asset("uploads/images/{$image->name}") }}" alt="{{ $image->name }}">
                                                    <div class="hover-image">
                                                        <a class="zoom" href="{{ asset("uploads/images/{$image->name}") }}">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('web.partials.socialsidebar')
            </div>
        </div>
    </section>
@endsection