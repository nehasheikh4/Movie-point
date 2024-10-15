@extends('pages.template')


@section('content')
<!-- breadcrumb area start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area-content">
                    <h1>Blog Details Page</h1>
                </div>
            </div>
        </div>
    </div>
</section><!-- breadcrumb area end -->
<!-- blog area start -->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="news-details">
                    <div class="single-news">
                        <div class="news-bg-1"></div>
                        <div class="news-date">
                            <h2><span>NOV</span> 25</h2>
                            <h1>2017</h1>
                        </div>
                    </div>
                    <h2>Transformers: The Last Knight</h2>
                    <a href="#"><i class="icofont icofont-users"></i>Animation, Movie, Action, Sci-Fi</a>
                    <a href="#"><i class="icofont icofont-comment"></i>1k Comments</a>
                    <p>Humans are at war with the Transformers, and Optimus Prime is gone. The key to saving the future lies buried in the secrets of the past and the hidden history of Transformers on Earth. Now it's up to the unlikely alliance of inventor Cade Yeager, Bumblebee, an English lord and an Oxford professor to save the world. Transformers: The Last Knight has a deeper mythos and bigger spectacle than its predecessors, yet still ends up being mostly hollow and cacophonous. The first "Transformers" movie that could actually be characterized as badass. Which isn't a bad thing. It may, in fact, be better.</p>
                    <div class="detail-author">
                        <div class="row flexbox-center">
                            <div class="col-lg-6 text-lg-left text-center">
                                <div class="details-author">
                                    <h4>By Admin:</h4>
                                    <img src="assets/img/author.png" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-6 text-lg-right text-center">
                                <div class="details-author">
                                    <h4>Share:</h4>
                                    <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                    <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                    <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                    <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                                    <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <img src="assets/img/blog-detail.png" alt="" />
                    </div>
                    <div class="details-reply">
                        <h2>Leave a Reply</h2>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input type="text" placeholder="Name"/>
                                        <i class="icofont icofont-ui-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input type="text" placeholder="Email"/>
                                        <i class="icofont icofont-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input type="text" placeholder="Phone"/>
                                        <i class="icofont icofont-phone"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="textarea-container">
                                        <textarea placeholder="Type Here Message"></textarea>
                                        <button><i class="icofont icofont-send-mail"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="details-comment">
                        <a class="theme-btn theme-btn2" href="#">Post Comment</a>
                        <p>You may use these HTML tags and attributes: You may use these HTML tags and attributes: You may use these HTML tags and attributes: </p>
                    </div>
                    <div class="details-thumb">
                        <div class="details-thumb-prev">
                            <div class="thumb-icon">
                                <i class="icofont icofont-simple-left"></i>
                            </div>
                            <div class="thumb-text">
                                <h4>Previous Post</h4>
                                <p>Standard Post With Gallery</p>
                            </div>
                        </div>
                        <div class="details-thumb-next">
                            <div class="thumb-text">
                                <h4>Next Post</h4>
                                <p>Standard Post With Preview Image</p>
                            </div>
                            <div class="thumb-icon">
                                <i class="icofont icofont-simple-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="blog-sidebar">
                    <h4>Recent Posts</h4>
                    <ul>
                        <li><a href="#">Transformers: The Last Knight</a></li>
                        <li><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></li>
                        <li><a href="#">Nostrud exercitation ullamco laboris</a></li>
                        <li><a href="#">Magnam aliquam quaerat voluptatem</a></li>
                        <li><a href="#">Magnam aliquam quaerat voluptatem</a></li>
                        <li><a href="#">Excepteur sint occaecat cupidatat proi</a></li>
                    </ul>
                    <h4>Recent Comments</h4>
                    <ul>
                        <li><a href="#">admin on Justice League</a></li>
                        <li><a href="#">admin on Mask Man</a></li>
                        <li><a href="#">admin on Angle Pori</a></li>
                        <li><a href="#">admin on The Man</a></li>
                        <li><a href="#">admin on WP Devil</a></li>
                    </ul>
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Feature</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Movie</a></li>
                        <li><a href="#">Trailers_video</a></li>
                        <li><a href="#">Uncategorized</a></li>
                    </ul>
                    <h4>Archives</h4>
                    <ul>
                        <li><a href="#">February 2018</a></li>
                        <li><a href="#">January 2018</a></li>
                        <li><a href="#">March 2018</a></li>
                        <li><a href="#">April 2018</a></li>
                    </ul>
                    <div class="portfolio-sidebar">
                        <img src="assets/img/sidebar/sidebar1.png" alt="sidebar" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- blog area end -->
@endsection
