@extends('front.master-home')

@section('content')
     <!--====== Start Hero Section ======-->
     <section class="hero-section">
        <!--=== Hero Wrapper ===-->
        <div class="hero-wrapper-two">
            <!--=== Hero Slider ===-->
            <div class="hero-slider-two">
                <!--=== Single Slider ===-->
                <div class="single-slider">
                    <div class="image-layer bg_cover" style="background-image: url('{{url('/')}}/uploads/slider/pexels-africa-vacation-safaris-3529692.jpg');"></div>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--=== Hero Content ===-->
                                <div class="hero-content text-white text-center">
                                    <span class="ribbon">Sustainable Tourism</span>
                                    <h1 data-animation="fadeInDown" data-delay=".4s">Learn ∙ Travel ∙ Explore</h1>
                                    <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                        <a href="{{url('/')}}/about-us" class="main-btn primary-btn">Explore More<i class="fas fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Single Slider ===-->
                <!--=== Single Slider ===-->
                <div class="single-slider">
                    <div class="image-layer bg_cover" style="background-image: url('{{url('/')}}/uploads/slider/pexels-twilight-kenya-11866350.jpg');"></div>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--=== Hero Content ===-->
                                <div class="hero-content text-white text-center">
                                    <span class="ribbon">Amaizing Amboseli</span>
                                    <h1 data-animation="fadeInDown" data-delay=".4s">Learn ∙ Travel ∙ Explore</h1>
                                    <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                        <a href="{{url('/')}}/about-us" class="main-btn primary-btn">Explore More<i class="fas fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=== Single Slider ===-->
                <!--=== Single Slider ===-->
                <div class="single-slider">
                    <div class="image-layer bg_cover" style="background-image: url('{{url('/')}}/uploads/slider/pexels-nirav-shah-15904775.jpg');"></div>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!--=== Hero Content ===-->
                                <div class="hero-content text-white text-center">
                                    <span class="ribbon">Welcome to Halisi Africa Discoveries</span>
                                    <h1 data-animation="fadeInDown" data-delay=".4s"><strong>Learn ∙ Travel ∙ Explore</strong></h1>
                                    <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">
                                        <a href="about.html" class="main-btn primary-btn">Explore More<i class="fas fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </section><!--====== End Hero Section ======-->
        <!--====== Start Features Section ======-->
        <?php
    $About = DB::table('about')->get()

    ?>
        @foreach ($About as $about)
            <!--====== Start About Section ======-->
            <section class="about-section bg_cover pt-60 pb-60" style="background-image: url('{{asset('theme/assets/images/bg/about-bg-1.jpg')}}');">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-lg-6">
                            <!--=== About Image Box ===-->
                            <div class="about-image-box mbs-50">
                                <br> <br>
                                <img src="{{url('/')}}/uploads/banners/pexels-twilight-kenya-11866350.jpg" class="rounded-2" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!--=== About Content Box ===-->
                            <div class="about-content-box text-white pl-lg-40 mb-50">
                                <!--=== Section Title ===-->
                                <div class="section-title mb-30">
                                    <span class="sub-title">About Company</span>
                                    <h2>We’re Number #1 Travel
                                        Adventure Partner</h2>
                                </div>
                                {!! html_entity_decode($about->content) !!}


                            </div>
                        </div>
                        <div class="big-text pt-10s wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                            <img src="{{asset('theme/assets/images/bg/adventure.png')}}" alt="Halisi Afirca Discoveries">
                        </div>
                    </div>
                </div>
            </section><!--====== End About Section ======-->
        @endforeach

        <!--====== Start Service Section ======-->
        <section class="service-section pt-100 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <!--=== Section Title ===-->
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">Popular Activities</span>
                            <h2>Learn <strong>∙</strong> Travel <strong>∙</strong> Explore</h2>
                            <hr>
                        </div>
                    </div>
                </div>
               {{--  --}}
               <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!--=== Features Image Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInUp">
                            <div class="img-holder">
                                <img src="{{asset('theme/assets/images/features/feat-5.jpg')}}" alt="Tent Camping">
                                <div class="item-overlay">
                                    <div class="content">
                                        <h3 class="title">Tent Camping</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!--=== Features Image Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInDown">
                            <div class="img-holder">
                                <img src="{{asset('theme/assets/images/features/feat-6.jpg')}}" alt="Mountain Biking">
                                <div class="item-overlay">
                                    <div class="content">
                                        <h3 class="title">Mountain Biking</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!--=== Features Image Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInUp">
                            <div class="img-holder">
                                <img src="{{asset('theme/assets/images/features/feat-7.jpg')}}" alt="Fishing">
                                <div class="item-overlay">
                                    <div class="content">
                                        <h3 class="title">Fishing</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!--=== Features Image Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInDown">
                            <div class="img-holder">
                                <img src="{{asset('theme/assets/images/features/feat-8.jpg')}}" alt="Kayaking">
                                <div class="item-overlay">
                                    <div class="content">
                                        <h3 class="title">Kayaking</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!--=== Features Image Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInUp">
                            <div class="img-holder">
                                <img style="min-height:357px" src="{{url('/')}}/uploads/destinations/hot-air-balloon-safari-masai-mara-kenya-small.jpg" alt="Kayaking">
                                <div class="item-overlay">
                                    <div class="content">
                                        <h3 class="title">Hot Air Balloon</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!--=== Features Image Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInDown">
                            <div class="img-holder">
                                <img style="min-height:357px" src="{{url('/')}}/uploads/destinations/nairobi-city-tours.jpg" alt="Kayaking">
                                <div class="item-overlay">
                                    <div class="content">
                                        <h3 class="title">City Excursions</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!--=== Features Image Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInUp">
                            <div class="img-holder">
                                <img style="min-height:357px" src="{{url('/')}}/uploads/destinations/pexels-melissa-villarán-4938780.jpg" alt="Kayaking">
                                <div class="item-overlay">
                                    <div class="content">
                                        <h3 class="title">Zip Lining</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <!--=== Features Image Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInUp">
                            <div class="img-holder">
                                <img style="min-height:357px" src="{{url('/')}}/uploads/destinations/gorilla_nk-1200x800.webp" alt="Kayaking">
                                <div class="item-overlay">
                                    <div class="content">
                                        <h3 class="title">Gorilla Trekking</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
               {{--  --}}
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
                            <a href="tel:254700757752" class="main-btn secondary-btn">Call US <i class="far fa-phone"></i></a>
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
        @include('front.why')
        <!--====== Start Gallery Section ======-->
        <hr>
        {{--  --}}
        @include('front.tours')
        {{--  --}}

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
                    <?php
                       $Testimonial = DB::table('testimonial')->get();
                    ?>
                    @foreach($Testimonial as $testimony)
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
                            <p>
                                {!! html_entity_decode($testimony->content) !!}
                            </p>
                            <div class="author-thumb-title">
                                <div class="author-thumb">
                                    <img src="{{url('/')}}/uploads/testimonials/{{$testimony->image}}" alt="Author Image">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">{{$testimony->name}}</h3>
                                    <p class="position">{{$testimony->position}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section><!--====== End Testimonial Section ======-->
        <!--====== Start Blog Section ======-->
        {{-- <section class="blog-section pt-100 pb-60" id="News">
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
        </section> --}}
        <!--====== End Blog Section ======-->
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
