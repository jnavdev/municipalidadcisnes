@extends('web.layouts.master')

@section('content')


    !-- Container -->
    <div id="container">

        <!-- Header
            ================================================== -->
        <header class="clearfix fifth-style">
            <!-- Bootstrap navbar -->
            <!-- Bootstrap navbar -->
           

        </header>
        <!-- End Header -->

        <!-- block-wrapper-section
            ================================================== -->
        <section class="block-wrapper shadow-white">


            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">

                        <!-- block content -->
                        <div class="block-content">

                            <div class="grid-box">

                                <div class="news-post very-large-post">

                                    <div class="post-gallery">
                                        <ul class="bxslider">
                                            <li><img src="upload/news-posts/single3.jpg" alt=""></li>
                                            <li><img src="upload/news-posts/single2.jpg" alt=""></li>
                                            <li><img src="upload/news-posts/single1.jpg" alt=""></li>
                                        </ul>
                                        <span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
                                    </div>

                                    <div class="post-content">
                                        <p>Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. <br> Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor.</p>
                                        <a href="single-post.html" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                        <div class="share-box">
                                            <a class="likes" href="#"><i class="fa fa-heart-o"></i> <span>0</span></a>
                                            <ul class="share-list-post">
                                                <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- features-today-section
            ================================================== -->
                            <section class="features-today second-style">
                                <div class="">

                                    <div class="title-section">
                                        <h1><span>Today's Featured</span></h1>
                                    </div>

                                    <div class="features-today-box owl-wrapper">
                                        <div class="owl-carousel" data-num="4">

                                            <div class="item news-post standard-post">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/st1.jpg" alt="">
                                                    <a class="category-post world" href="world.html">Music</a>
                                                </div>
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="item news-post standard-post">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/st2.jpg" alt="">
                                                    <a class="category-post sport" href="sport.html">Sport</a>
                                                </div>
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="item news-post standard-post">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/st3.jpg" alt="">
                                                    <a class="category-post food" href="food.html">Food &amp; Health</a>
                                                </div>
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="item news-post standard-post">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/st4.jpg" alt="">
                                                    <a class="category-post sport" href="sport.html">Sport</a>
                                                </div>
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="item news-post standard-post">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/st1.jpg" alt="">
                                                    <a class="category-post travel" href="travel.html">Travel</a>
                                                </div>
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="item news-post standard-post">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/st1.jpg" alt="">
                                                    <a class="category-post world" href="world.html">Music</a>
                                                </div>
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="item news-post standard-post">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/st2.jpg" alt="">
                                                    <a class="category-post sport" href="sport.html">Sport</a>
                                                </div>
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="item news-post standard-post">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/st3.jpg" alt="">
                                                    <a class="category-post food" href="food.html">Food &amp; Health</a>
                                                </div>
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!-- End features-today-section -->
                            <!-- article box -->
                            <div class="article-box">
                                <div class="title-section">
                                    <h1><span>Latest Articles</span></h1>
                                </div>

                                <div class="news-post article-post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="post-gallery">
                                                <img alt="" src="upload/news-posts/art1.jpg">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    <li><i class="fa fa-eye"></i>872</li>
                                                </ul>
                                                <span class="post-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
                                                <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="news-post article-post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="post-gallery">
                                                <img alt="" src="upload/news-posts/art2.jpg">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    <li><i class="fa fa-eye"></i>872</li>
                                                </ul>
                                                <span class="post-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
                                                <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="news-post article-post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="post-gallery">
                                                <img alt="" src="upload/news-posts/art3.jpg">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    <li><i class="fa fa-eye"></i>872</li>
                                                </ul>
                                                <span class="post-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
                                                <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="news-post article-post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="post-gallery">
                                                <img alt="" src="upload/news-posts/art4.jpg">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
                                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                    <li><i class="fa fa-eye"></i>872</li>
                                                </ul>
                                                <span class="post-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
                                                <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End article box -->





                            <!-- Pagination box -->
                            <div class="pagination-box">
                                <ul class="pagination-list">
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#">9</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                                <p>Page 1 of 9</p>
                            </div>
                            <!-- End Pagination box -->

                        </div>
                        <!-- End block content -->

                    </div>

                    <div class="col-md-3 col-sm-4">

                        <!-- sidebar -->
                        <div class="sidebar large-sidebar">

                            <div class="widget search-widget">
                                <form role="search" class="search-form">
                                    <input type="text" id="search2" name="search" placeholder="Search here">
                                    <button type="submit" id="search-submit2"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <div class="widget social-widget">
                                <div class="title-section">
                                    <h1><span>Stay Connected</span></h1>
                                </div>
                                <ul class="social-share">
                                    <li>
                                        <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                                        <span class="number">9,455</span>
                                        <span>Subscribers</span>
                                    </li>
                                    <li>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <span class="number">56,743</span>
                                        <span>Fans</span>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <span class="number">43,501</span>
                                        <span>Followers</span>
                                    </li>
                                    <li>
                                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                        <span class="number">35,003</span>
                                        <span>Followers</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget features-slide-widget">
                                <div class="title-section">
                                    <h1><span>Featured Posts</span></h1>
                                </div>
                                <div class="image-post-slider">
                                    <ul class="bxslider">
                                        <li>
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/im3.jpg" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/im1.jpg" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="news-post image-post2">
                                                <div class="post-gallery">
                                                    <img src="upload/news-posts/im2.jpg" alt="">
                                                    <div class="hover-box">
                                                        <div class="inner-hover">
                                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="list-posts">

                                    <li>
                                        <img src="upload/news-posts/listw5.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="upload/news-posts/listw1.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw2.jpg" alt="">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="advertisement">
                                <div class="desktop-advert">
                                    <span>Advertisement</span>
                                    <img src="upload/addsense/250x250.jpg" alt="">
                                </div>
                                <div class="tablet-advert">
                                    <span>Advertisement</span>
                                    <img src="upload/addsense/200x200.jpg" alt="">
                                </div>
                                <div class="mobile-advert">
                                    <span>Advertisement</span>
                                    <img src="upload/addsense/300x250.jpg" alt="">
                                </div>
                            </div>

                            <div class="widget tab-posts-widget">

                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active">
                                        <a href="#option1" data-toggle="tab">Popular</a>
                                    </li>
                                    <li>
                                        <a href="#option2" data-toggle="tab">Recent</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="option1">
                                        <ul class="list-posts">
                                            <li>
                                                <img src="upload/news-posts/listw1.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <img src="upload/news-posts/listw2.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <img src="upload/news-posts/listw3.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <img src="upload/news-posts/listw4.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <img src="upload/news-posts/listw5.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="option2">
                                        <ul class="list-posts">

                                            <li>
                                                <img src="upload/news-posts/listw3.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <img src="upload/news-posts/listw4.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <img src="upload/news-posts/listw5.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="upload/news-posts/listw1.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li>
                                                <img src="upload/news-posts/listw2.jpg" alt="">
                                                <div class="post-content">
                                                    <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="widget post-widget">
                                <div class="title-section">
                                    <h1><span>Featured Video</span></h1>
                                </div>
                                <div class="news-post video-post">
                                    <img alt="" src="upload/news-posts/video-sidebar.jpg">
                                    <a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>
                                    <div class="hover-box">
                                        <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                    <p></p>
                                </div>
                                <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis. </p>
                            </div>

                        </div>
                        <!-- End sidebar -->

                    </div>

                </div>

            </div>
        </section>
        <!-- End block-wrapper-section -->

        <!-- footer
            ================================================== -->
        <footer>
            <div class="container">
                <div class="footer-widgets-part">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget text-widget">
                                <h1>About</h1>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                                <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </p>
                            </div>
                            <div class="widget social-widget">
                                <h1>Stay Connected</h1>
                                <ul class="social-icons">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget posts-widget">
                                <h1>Random Post</h1>
                                <ul class="list-posts">
                                    <li>
                                        <img src="upload/news-posts/listw4.jpg" alt="">
                                        <div class="post-content">
                                            <a href="travel.html">travel</a>
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in ultricies in, diam. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw1.jpg" alt="">
                                        <div class="post-content">
                                            <a href="business.html">business</a>
                                            <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <img src="upload/news-posts/listw3.jpg" alt="">
                                        <div class="post-content">
                                            <a href="tech.html">tech</a>
                                            <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget categories-widget">
                                <h1>Hot Categories</h1>
                                <ul class="category-list">
                                    <li>
                                        <a href="#">Business <span>12</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Sport <span>26</span></a>
                                    </li>
                                    <li>
                                        <a href="#">LifeStyle <span>55</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Fashion <span>37</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Technology <span>62</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Music <span>10</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Culture <span>43</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Design <span>74</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Entertainment <span>11</span></a>
                                    </li>
                                    <li>
                                        <a href="#">video <span>41</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Travel <span>11</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Food <span>29</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget flickr-widget">
                                <h1>Flickr Photos</h1>
                                <ul class="flickr-list">
                                    <li><a href="#"><img src="upload/flickr/1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="upload/flickr/2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="upload/flickr/3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="upload/flickr/4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="upload/flickr/5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="upload/flickr/6.jpg" alt=""></a></li>
                                </ul>
                                <a href="#">View more photos...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-last-line">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; COPYRIGHT 2015 hotmagazine.com</p>
                        </div>
                        <div class="col-md-6">
                            <nav class="footer-nav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="index.html">Purchase Theme</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->

    </div>
    <!-- End Container -->

@endsection