@extends('front.master')

@section('content')
        <!--====== Start Hero Section ======-->
        <section class="hero-section">
            <div class="hero-wrapper-three">
                <div class="hero-arrows"></div>
                <div class="hero-slider-three">
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="image-layer bg_cover" style="background-image: url('{{asset('theme/assets/images/hero/hero-three_img-1.jpg')}}');"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-7">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <span class="sub-title">Welcome to Halisi Africa Discoveries</span>
                                        <h1 data-animation="fadeInDown" data-delay=".4s">Learn ∙ Travel ∙ Explore</h1>
                                        <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                            <a href="about.html" class="main-btn primary-btn">Explore More<i class="fas fa-paper-plane"></i></a>
                                            <a href="about.html" class="main-btn secondary-btn">Learn More<i class="fas fa-paper-plane"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="image-layer bg_cover" style="background-image: url('{{asset('theme/assets/images/hero/hero-three_img-2.jpg')}}');"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-7">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <span class="sub-title">Welcome to Halisi Africa Discoveries</span>
                                        <h1 data-animation="fadeInDown" data-delay=".4s">Tour Travel
                                            & Camping</h1>
                                        <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                            <a href="about.html" class="main-btn primary-btn">Explore More<i class="fas fa-paper-plane"></i></a>
                                            <a href="about.html" class="main-btn secondary-btn">Learn More<i class="fas fa-paper-plane"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== Single Slider ===-->
                    <div class="single-slider">
                        <div class="image-layer bg_cover" style="background-image: url('{{asset('theme/assets/images/hero/hero-three_img-3.jpg')}}');"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-7">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content text-white">
                                        <span class="sub-title">Welcome to Halisi Africa Discoveries</span>
                                        <h1 data-animation="fadeInDown" data-delay=".4s">Tour Travel
                                            & Adventure</h1>
                                        <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                            <a href="about.html" class="main-btn primary-btn">Explore More<i class="fas fa-paper-plane"></i></a>
                                            <a href="about.html" class="main-btn secondary-btn">Learn More<i class="fas fa-paper-plane"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Section ======-->
        <!--====== Start Features Section ======-->

        <!--====== Start About Section ======-->
        <section class="about-section bg_cover pt-165 pb-210" style="background-image: url('{{asset('theme/assets/images/bg/about-bg-1.jpg')}}');">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6">
                        <!--=== About Image Box ===-->
                        <div class="about-image-box mb-50">
                            <img src="{{asset('theme/assets/images/about/about-2.jpg')}}" class="rounded-2" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--=== About Content Box ===-->
                        <div class="about-content-box text-white pl-lg-40 mb-50">
                            <!--=== Section Title ===-->
                            <div class="section-title mb-30">
                                <span class="sub-title">About Company</span>
                                <h2>We’re Number 1 Travel
                                    Adventure Company</h2>
                            </div>
                            <p class="mb-30">Sit amet consectetur. Velit integer tincidunt sceleries nodalesry volutpat neque fermentum malesuada sceleris quecy massa lacus
                                Ultrices eget leo cras odio blandit rhoncus eues feugiat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About Section ======-->
        <!--====== Start Fun Section ======-->
        <section class="fun-section">
            <div class="container">
                <!--=== Fun Wrapper ===-->
                <div class="fun-wrapper pt-60 pb-20 bg_cover" style="background-image: url('{{asset('theme/assets/images/bg/map.png')}}');">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30">
                                <div class="inner-counter text-center">
                                    <div class="icon">
                                        <i class="flaticon-journey"></i>
                                    </div>
                                    <div class="content text-white">
                                        <h2 class="number"><span class="count">356</span>+</h2>
                                        <p>Happy Traveler</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30">
                                <div class="inner-counter text-center">
                                    <div class="icon">
                                        <i class="flaticon-tent-1"></i>
                                    </div>
                                    <div class="content text-white">
                                        <h2 class="number"><span class="count">99</span>%</h2>
                                        <p>Positive Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30">
                                <div class="inner-counter text-center">
                                    <div class="icon">
                                        <i class="flaticon-reviews"></i>
                                    </div>
                                    <div class="content text-white">
                                        <h2 class="number"><span class="count">99</span>%</h2>
                                        <p>Positive Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!--=== Counter Item ===-->
                            <div class="single-counter-item-two mb-30">
                                <div class="inner-counter text-center">
                                    <div class="icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="content text-white">
                                        <h2 class="number"><span class="count">24</span>K+</h2>
                                        <p>Awards Winning</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Fun Section ======-->
        <!--====== Start Service Section ======-->
        <section class="service-section pt-100 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <!--=== Section Title ===-->
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">Popular Services</span>
                            <h2>Amazing Adventure Camping
                                Services for Enjoyed</h2>
                        </div>
                    </div>
                </div>
                <div class="slider-active-3-item">
                    <!--=== Service Item ===-->
                    <div class="single-service-item-three mb-40">
                        <div class="content">
                            <h3 class="title"><a href="#">Classic Tents</a></h3>
                            <p>Sit amet consecteturauris natoque name
                                pellentue augue mattis faucibus</p>
                            <img src="{{asset('theme/assets/images/service/service-4.jpg')}}" alt="service image">
                            <a href="#" class="btn-link">Read More<i class="far fa-long-arrow-right"></i></a>

                        </div>
                    </div>
                    <!--=== Service Item ===-->
                    <div class="single-service-item-three mb-40">
                        <div class="content">
                            <h3 class="title"><a href="#">Caravan Solar Tent</a></h3>
                            <p>We denounce with righteous indignation
                                and beguiled and demoralized</p>
                            <img src="{{asset('theme/assets/images/service/service-5.jpg')}}" alt="service image">
                            <a href="#" class="btn-link">Read More<i class="far fa-long-arrow-right"></i></a>

                        </div>
                    </div>
                    <!--=== Service Item ===-->
                    <div class="single-service-item-three mb-40">
                        <div class="content">
                            <h3 class="title"><a href="tour-details.html">Small Cabin Wood</a></h3>
                            <p>To take trivial example which undertakes
                                laborious physical exercise chooses</p>
                            <img src="{{asset('theme/assets/images/service/service-6.jpg')}}" alt="service image">
                            <a href="#" class="btn-link">Read More<i class="far fa-long-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Service Section ======-->
        <!--====== Start CTA Section ======-->
        <section class="cta-bg overlay bg_cover pt-150 pb-150" style="background-image: url('{{asset('theme/assets/images/bg/cta-bg2.jpg')}}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8">
                        <!--=== CTA Content Box ===-->
                        <div class="cta-content-box text-white">
                            <h2 class="mb-35">Ready to Travel? </h2>
                            <a href="about.html" class="main-btn secondary-btn">Call US <i class="far fa-phone"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <!--=== Play Box ===-->
                        <div class="play-box text-center">
                            <a href="https://www.youtube.com/watch?v=ibuUmMhD2Pg" class="video-popup"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End CTA Section ======-->
        <!--====== Start What We Section ======-->
        <section class="we-section pt-100 pb-50">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-6 order-2 order-xl-1">
                        <!--=== We Image Box ===-->
                        <div class="we-two_image-box mb-20">
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30">
                                        <img src="{{asset('theme/assets/images/gallery/we-3.jpg')}}" alt="we Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30">
                                        <img src="{{asset('theme/assets/images/gallery/we-4.jpg')}}" alt="we Image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30 pr-lg-30 text-md-end">
                                        <img src="{{asset('theme/assets/images/gallery/we-5.jpg')}}" alt="we Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 order-1 order-xl-2">
                        <!--=== We Content Box ===-->
                        <div class="we-content-box pl-lg-50 mb-10">
                            <!--=== Section Title ===-->
                            <div class="section-title mb-30">
                                <span class="sub-title">Why choose us</span>
                                <h2>Great Opportunity For
                                    Adventure & Travels</h2>
                            </div>
                            <!--=== Features List ===-->
                            <div class="features-list_one">
                                <!--=== Single Features List ===-->
                                <div class="single-features-list mb-40">
                                    <div class="icon-inner d-flex align-items-center">
                                        <div class="icon-check">
                                            <i class="fas fa-badge-check"></i>
                                        </div>
                                        <div class="icon">
                                            <i class="flaticon-helmet"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Safety First Always</h4>
                                        <p>Set perspiciatis unde omnis estenatus voluptatem
                                            accusantium laudantium totarem aperiae</p>
                                    </div>
                                </div>
                                <!--=== Single Features List ===-->
                                <div class="single-features-list mb-40">
                                    <div class="icon-inner d-flex align-items-center">
                                        <div class="icon-check">
                                            <i class="fas fa-badge-check"></i>
                                        </div>
                                        <div class="icon">
                                            <i class="flaticon-best-price"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Low Price & Friendly</h4>
                                        <p>Quis autem vel eum iure reprehenderit voluptate velit esse nihile molestiae consequatur.</p>
                                    </div>
                                </div>
                                <!--=== Single Features List ===-->
                                <div class="single-features-list mb-40">
                                    <div class="icon-inner d-flex align-items-center">
                                        <div class="icon-check">
                                            <i class="fas fa-badge-check"></i>
                                        </div>
                                        <div class="icon">
                                            <i class="flaticon-travel"></i>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4>Trusted Travel Guide</h4>
                                        <p>At vero accusamus dignissimos ducimus blanditiis
                                            praesentium voluptatum deleniti atque quos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End What We Section ======-->
        <!--====== Start Gallery Section ======-->
        <section class="gallery-section-two pb-100">
            <div class="container-fluid">
                <!--=== Gallery Slider ===-->
                <div class="slider-active-3-item-dot">
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="{{asset('theme/assets/images/gallery/gallery-7.jpg')}}" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">Tent Camping Inside Forest</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="{{asset('theme/assets/images/gallery/gallery-8.jpg')}}" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">Couple Tent Camping On Hills</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="{{asset('theme/assets/images/gallery/gallery-9.jpg')}}" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">Camping For Every Children</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                    <!--=== Gallery Item ===-->
                    <div class="single-gallery-item-two">
                        <div class="img-holder">
                            <img src="{{asset('theme/assets/images/gallery/gallery-8.jpg')}}" alt="Gallery Image">
                        </div>
                        <div class="content">
                            <h3 class="title">Couple Tent Camping On Hills</h3>
                            <a href="#">Adventure & Travel</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Gallery Section ======-->
        <!--====== Start Testimonial Section ======-->
        <section class="testimonial-section bg_cover pt-100 pb-100" style="background-image: url('{{asset('theme/assets/images/bg/map-bg.jpg')}}');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center text-white mb-60">
                            <span class="sub-title">Testimonials</span>
                            <h2>What Our Traveler Say About Our Tour Services</h2>
                        </div>
                    </div>
                </div>
                <div class="slider-active-3-item-dot">
                    <div class="gw-testimonial-item-two">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="{{asset('theme/assets/images/testimonial/quote.png')}}" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h4>Quality Services</h4>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>To take a trivial example which of
                                usev undertakes laborious physical
                                exercise excepto obtain advantage
                                from has any right to find fault with
                                man.</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{asset('theme/assets/images/testimonial/author-1.jpg')}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Douglas D. Hall</h3>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gw-testimonial-item-two">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="{{asset('theme/assets/images/testimonial/quote.png')}}" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h4>Quality Services</h4>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>To take a trivial example which of
                                usev undertakes laborious physical
                                exercise excepto obtain advantage
                                from has any right to find fault with
                                man.</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{asset('theme/assets/images/testimonial/author-2.jpg')}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Douglas D. Hall</h3>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gw-testimonial-item-two">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="{{asset('theme/assets/images/testimonial/quote.png')}}" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h4>Quality Services</h4>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>To take a trivial example which of
                                usev undertakes laborious physical
                                exercise excepto obtain advantage
                                from has any right to find fault with
                                man.</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{asset('theme/assets/images/testimonial/author-3.jpg')}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Douglas D. Hall</h3>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gw-testimonial-item-two">
                        <div class="testimonial-inner-content">
                            <div class="quote-rating-box">
                                <div class="icon">
                                    <img src="{{asset('theme/assets/images/testimonial/quote.png')}}" alt="quote icon">
                                </div>
                                <div class="ratings-box">
                                    <h4>Quality Services</h4>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p>To take a trivial example which of
                                usev undertakes laborious physical
                                exercise excepto obtain advantage
                                from has any right to find fault with
                                man.</p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{asset('theme/assets/images/testimonial/author-2.jpg')}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Douglas D. Hall</h3>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Testimonial Section ======-->
        <!--====== Start Blog Section ======-->
        <section class="blog-section pt-100 pb-60" id="News">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-45">
                            <span class="sub-title">News & Articles</span>
                            <h2>Amazing News & Blog For
                                Every Single Update</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-three mb-40">
                            <div class="post-thumbnail">
                                <img src="{{asset('theme/assets/images/blog/blog-7.jpg')}}" alt="Blog Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                    <h3 class="title"><a href="blog-details.html">Meet Skeleton Svelte Taile
                                            Sind For Reactive UIs</a></h3>
                                    <a href="blog-details.html" class="main-btn filled-btn">Read More<i class="far fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-three mb-40">
                            <div class="post-thumbnail">
                                <img src="{{asset('theme/assets/images/blog/blog-8.jpg')}}" alt="Blog Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                    <h3 class="title"><a href="blog-details.html">Web Vitals Tools Boost Your to
                                        Sen Performance Scores</a></h3>
                                    <a href="blog-details.html" class="main-btn filled-btn">Read More<i class="far fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Single Blog Post ===-->
                        <div class="single-blog-post-three mb-40">
                            <div class="post-thumbnail">
                                <img src="{{asset('theme/assets/images/blog/blog-9.jpg')}}" alt="Blog Image">
                            </div>
                            <div class="entry-content">
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i><a href="#">November 15, 2022</a></span>
                                    <h3 class="title"><a href="blog-details.html">Smashing Podcast Episode See
                                        With Paul Billion-Dollar Idea</a></h3>
                                    <a href="blog-details.html" class="main-btn filled-btn">Read More<i class="far fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Blog Section ======-->
        <!--====== Start Partners Section ======-->
        <section class="partners-section">
            <div class="container">
                <!--=== Partners Slider ===-->
                <div class="partner-slider-one pt-80 pb-70 wow fadeInUp">
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{url('/')}}/uploads/partners/1.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{asset('theme/assets/images/partner/partner-2.png')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{url('/')}}/uploads/partners/2.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{url('/')}}/uploads/partners/3.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{url('/')}}/uploads/partners/4.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{url('/')}}/uploads/partners/5.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{url('/')}}/uploads/partners/6.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{url('/')}}/uploads/partners/7.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                    <!--=== Partner Item ===-->
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="{{url('/')}}/uploads/partners/8.jpg" alt="Partner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Partners Section ======-->
@endsection
