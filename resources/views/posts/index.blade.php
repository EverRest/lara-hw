@extends('layouts.master')

@section('content')
    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <div class="row row-rl-10 row-tb-20">
                <div class="page-content col-xs-12 col-sm-7 col-md-8">

                    <!-- Blog Area -->
                    <div class="blog-area blog-classic right-sidebar">

                        <div class="row row-tb-20">
                            @foreach($posts as $post)
                            <!-- Blog Post -->
                            <div data-id="{{$post->id}}" class="blog-post col-xs-12">
                                <article class="entry panel">
                                    <figure class="entry-media post-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="assets/images/blog/blog_01.jpg">
                                        <div class="entry-date">
                                            <h4>13</h4>
                                            <h6>JUN</h6>
                                        </div>
                                    </figure>
                                    <div class="entry-wrapper prl-20 prl-md-30 pt-20 pt-md-30 pb-15">
                                        <header class="entry-header">
                                            <h4 class="entry-title mb-10 mb-md-15 t-uppercase">
                                                <a href="blog_single_standard.html">{{$post->title}}</a>
                                            </h4>
                                            <div class="entry-meta mb-10">
                                                <ul class="tag-info list-inline">
                                                    <li><i class="icon fa fa-user"></i> By : {{$post->name}}</li>
                                                    <li><i class="icon fa fa-comments"></i> 14 Comments</li>
                                                </ul>
                                            </div>
                                        </header>
                                        <div class="entry-content">
                                            <p class="entry-summary">{{$post->content}}</p>
                                        </div>
                                        <footer class="entry-footer text-right">
                                            <a id="post-delete" href="post/delete/{{$post->id}}" class="more-link btn btn-link">Delete Post <i class="icon fa fa-delete"></i></a>
                                            <a href="post/edit/{{$post->id}}" class="more-link btn btn-link">Edit Post <i class="icon fa fa-long-arrow-right"></i></a>
                                        </footer>
                                    </div>
                                </article>
                            </div>
                            <!-- End Blog Post -->
                            @endforeach
                        </div>
                        <!-- Blog Pagination -->
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            <nav>
                                <!-- Page Pagination -->
                                <ul class="page-pagination">
                                    <li><a class="page-numbers previous" href="blog_classic_right_sidebar.html#">Previous</a>
                                    </li>
                                    <li><a href="blog_classic_right_sidebar.html#" class="page-numbers">1</a>
                                    </li>
                                    <li><span class="page-numbers current">2</span>
                                    </li>
                                    <li><a href="blog_classic_right_sidebar.html#" class="page-numbers">3</a>
                                    </li>
                                    <li><a href="blog_classic_right_sidebar.html#" class="page-numbers">4</a>
                                    </li>
                                    <li><span class="page-numbers dots">...</span>
                                    </li>
                                    <li><a href="blog_classic_right_sidebar.html#" class="page-numbers">20</a>
                                    </li>
                                    <li><a href="blog_classic_right_sidebar.html#" class="page-numbers next">Next</a>
                                    </li>
                                </ul>
                                <!-- End Page Pagination -->
                            </nav>
                        </div>
                        <!-- End Blog Pagination -->

                    </div>
                    <!-- End Blog Area -->

                </div>
                <div class="page-sidebar col-md-4 col-sm-5 col-xs-12">
                    <!-- Blog Sidebar -->
                    <aside class="sidebar blog-sidebar">
                        <div class="row row-tb-10">
                            <div class="col-xs-12">
                                <!-- Search Form -->
                                <div class="widget search-form panel ptb-30 prl-20">
                                    <div class="widget-body">
                                        <form method="post" action="blog_classic_right_sidebar.html#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for..." required="required">
                                                <span class="input-group-btn">
		        	<button class="btn" type="submit"><i class="fa fa-search font-16"></i></button>
		    	</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Search Form -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Recent Posts -->
                                <div class="widget recent-posts panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Recent Posts</h3>
                                    <div class="widget-body ptb-30">

                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object" src="assets/images/blog/thumb_1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="font-15 mb-10">
                                                    <a href="blog_classic_right_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>
                                                </h5>
                                                <ul class="post-meta list-inline">
                                                    <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                    <li><i class="ico fa fa-calendar mr-5"></i>20 Mar 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object" src="assets/images/blog/thumb_2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="font-15 mb-10">
                                                    <a href="blog_classic_right_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>
                                                </h5>
                                                <ul class="post-meta list-inline">
                                                    <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                    <li><i class="ico fa fa-calendar mr-5"></i>19 Mar 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object" src="assets/images/blog/thumb_3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="font-15 mb-10">
                                                    <a href="blog_classic_right_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>
                                                </h5>
                                                <ul class="post-meta list-inline">
                                                    <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                    <li><i class="ico fa fa-calendar mr-5"></i>15 Mar 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object" src="assets/images/blog/thumb_4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="font-15 mb-10">
                                                    <a href="blog_classic_right_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>
                                                </h5>
                                                <ul class="post-meta list-inline">
                                                    <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                    <li><i class="ico fa fa-calendar mr-5"></i>24 Mar 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="recent-post media">
                                            <div class="post-thumb media-left">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object" src="assets/images/blog/thumb_5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="font-15 mb-10">
                                                    <a href="blog_classic_right_sidebar.html#">Lorem ipsum dolor sit amet consetetur</a>
                                                </h5>
                                                <ul class="post-meta list-inline">
                                                    <li> <i class="ico fa fa-user mr-5"></i>John Doe</li>
                                                    <li><i class="ico fa fa-calendar mr-5"></i>29 Mar 2017</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Recent Posts -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Categories Widget -->
                                <div class="widget categories-widget panel pt-20 prl-20">
                                    <div class="widget-header">
                                        <h3 class="widget-title h-title">Blog Categories</h3>
                                    </div>
                                    <div class="widget-body ptb-20">
                                        <ul>
                                            @foreach($categories as $category)
                                            <li>
                                                <a href="{{$category->url}}">{{$category->name}} <span>1420</span></a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Categories Widget -->
                            </div>
                            <div class="col-xs-12">
                                <div class="widget archive-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Blog Archive</h3>
                                    <div class="widget-content ptb-20">
                                        <ul>
                                            <li>
                                                <a href="blog_classic_right_sidebar.html#">August 2017</a>
                                            </li>
                                            <li>
                                                <a href="blog_classic_right_sidebar.html#">June 2017</a>
                                            </li>
                                            <li>
                                                <a href="blog_classic_right_sidebar.html#">May 2017</a>
                                            </li>
                                            <li>
                                                <a href="blog_classic_right_sidebar.html#">April 2017</a>
                                            </li>
                                            <li>
                                                <a href="blog_classic_right_sidebar.html#">March 2017</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <!-- Popular Tags -->
                                <div class="widget popular-tags panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Popular Tags</h3>
                                    <div class="widget-body pt-30 pb-20">

                                        <div class="tags">
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Offers</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Stores</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Shop</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Sale</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Discount</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Health</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Cloths</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Travel</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Hotels</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Deals</a>
                                            <a href="blog_classic_right_sidebar.html#" class="badge">Coupons</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Popular Tags -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Instagram Widget -->
                                <div class="widget instagram-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Instagram</h3>
                                    <div class="widget-body ptb-30">

                                        <div class="row row-tb-5 row-rl-5">


                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="assets/images/instagram/instagram_01.jpg" alt="">
                                            </div>


                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="assets/images/instagram/instagram_02.jpg" alt="">
                                            </div>


                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="assets/images/instagram/instagram_03.jpg" alt="">
                                            </div>


                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="assets/images/instagram/instagram_04.jpg" alt="">
                                            </div>


                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="assets/images/instagram/instagram_05.jpg" alt="">
                                            </div>


                                            <div class="instagram-widget__item col-xs-4">
                                                <img src="assets/images/instagram/instagram_06.jpg" alt="">
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!-- End Instagram Widget -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Subscribe Widget -->
                                <div class="widget subscribe-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Subscribe to mail</h3>
                                    <div class="widget-content ptb-30">

                                        <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                        <form method="post" action="blog_classic_right_sidebar.html#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Your Email Address" required="required">
                                                <span class="input-group-btn">
		        	<button class="btn" type="submit">Sign Up</button>
		    	</span>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- End Subscribe Widget -->
                            </div>
                            <div class="col-xs-12">

                                <!-- Instagram Widget -->
                                <div class="widget subscribe-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Latest tweets</h3>
                                    <div class="widget-body ptb-20">

                                        <ul class="twitter-list">
                                            <li class="twitter-list__item">
                                                <p>
                                                    <i class="twitter-icon fa fa-twitter"></i>
                                                    <a href="blog_classic_right_sidebar.html#">@masum_rana :</a>
                                                    <span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                                                </p>
                                            </li>
                                            <li class="twitter-list__item">
                                                <p>
                                                    <i class="twitter-icon fa fa-twitter"></i>
                                                    <a href="blog_classic_right_sidebar.html#">@masum_rana :</a>
                                                    <span class="tweet-text">Recusandae sed, aperiam earum sapiente rem neque officiis quaerat.</span>
                                                </p>
                                            </li>
                                            <li class="twitter-list__item">
                                                <p>
                                                    <i class="twitter-icon fa fa-twitter"></i>
                                                    <a href="blog_classic_right_sidebar.html#">@masum_rana :</a>
                                                    <span class="tweet-text">Sed quaerat, error harum sunt, sapiente voluptas temporibus porro quam, magnam dolores recusandae.</span>
                                                </p>
                                            </li>
                                            <li class="twitter-list__item">
                                                <p>
                                                    <i class="twitter-icon fa fa-twitter"></i>
                                                    <a href="blog_classic_right_sidebar.html#">@masum_rana :</a>
                                                    <span class="tweet-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</span>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Instagram Widget -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Contact Us Widget -->
                                <div class="widget contact-us-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Got any questions?</h3>
                                    <div class="widget-body ptb-30">
                                        <p class="mb-20 color-mid">If you are having any questions, please feel free to ask.</p>
                                        <a href="contact_us_01.html" class="btn btn-block"><i class="mr-10 font-15 fa fa-envelope-o"></i>Drop Us a Line</a>
                                    </div>
                                </div>
                                <!-- End Contact Us Widget -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Trending Stores -->
                                <div class="widget trend-store-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Trending Stores</h3>
                                    <div class="widget-body ptb-30">


                                        <div class="trend-store-item media">
                                            <div class="post-thumb media-left">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object pr-10" width="90" src="assets/images/brands/brand_01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-5">
                                                    <a href="store_single_01.html">Amazon</a>
                                                    <span class="rating">
                        <span class="rating-stars" data-rating="4">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </span>
                                                </h5>
                                                <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </div>


                                        <div class="trend-store-item media">
                                            <div class="post-thumb media-left">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object pr-10" width="90" src="assets/images/brands/brand_02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-5">
                                                    <a href="store_single_01.html">Ashford</a>
                                                    <span class="rating">
                        <span class="rating-stars" data-rating="4">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </span>
                                                </h5>
                                                <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </div>


                                        <div class="trend-store-item media">
                                            <div class="post-thumb media-left">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object pr-10" width="90" src="assets/images/brands/brand_03.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-5">
                                                    <a href="store_single_01.html">DELL</a>
                                                    <span class="rating">
                        <span class="rating-stars" data-rating="4">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </span>
                                                </h5>
                                                <p class="color-mid">Upto 70% Rewards Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- End Trending Stores -->
                            </div>
                            <div class="col-xs-12">
                                <!-- Latest Reviews -->
                                <div class="widget posted-reviews-widget panel pt-20 prl-20">
                                    <h3 class="widget-title h-title">Recent Reviews</h3>
                                    <div class="widget-body ptb-30">
                                        <!-- Review -->
                                        <div class="review media">
                                            <div class="media-left pr-10">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object img-circle" src="assets/images/avatars/avatar_01.jpg" alt="Thumb" width="80">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-5">
                                                    <a href="blog_classic_right_sidebar.html#">John Doe</a>
                                                    <span class="rating">
                        <span class="rating-stars" data-rating="3">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </span>
                                                </h5>
                                                <p class="color-mid">Vivamus sem massa, cursus at mollis eu, euismod id risus. Ve...</p>
                                            </div>
                                        </div>
                                        <!-- End Review -->
                                        <!-- Review -->
                                        <div class="review media">
                                            <div class="media-left pr-10">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object img-circle" src="assets/images/avatars/avatar_02.jpg" alt="Thumb" width="80">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-5">
                                                    <a href="blog_classic_right_sidebar.html#">John Doe</a>
                                                    <span class="rating">
                        <span class="rating-stars" data-rating="3">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </span>
                                                </h5>
                                                <p class="color-mid">Nullam porttitor porta augue vel iaculis. Pellentesque a pre...</p>
                                            </div>
                                        </div>
                                        <!-- End Review -->
                                        <!-- Review -->
                                        <div class="review media">
                                            <div class="media-left pr-10">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object img-circle" src="assets/images/avatars/avatar_03.jpg" alt="Thumb" width="80">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-5">
                                                    <a href="blog_classic_right_sidebar.html#">John Doe</a>
                                                    <span class="rating">
                        <span class="rating-stars" data-rating="3">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </span>
                                                </h5>
                                                <p class="color-mid">Ut consequat eget nulla eu ultrices. Curabitur ac pellentesq...</p>
                                            </div>
                                        </div>
                                        <!-- End Review -->
                                        <!-- Review -->
                                        <div class="review media">
                                            <div class="media-left pr-10">
                                                <a href="blog_classic_right_sidebar.html#">
                                                    <img class="media-object img-circle" src="assets/images/avatars/avatar_04.jpg" alt="Thumb" width="80">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mb-5">
                                                    <a href="blog_classic_right_sidebar.html#">John Doe</a>
                                                    <span class="rating">
                        <span class="rating-stars" data-rating="3">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </span>
                    </span>
                                                </h5>
                                                <p class="color-mid">Duis eu lectus dictum, placerat quam sed, ornare urna....</p>
                                            </div>
                                        </div>
                                        <!-- End Review -->
                                    </div>
                                </div>
                                <!-- End Latest Reviews -->
                            </div>
                        </div>
                    </aside>
                    <!-- End Blog Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Container -->
@endsection