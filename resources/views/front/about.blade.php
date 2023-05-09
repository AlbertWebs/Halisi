@extends('front.master')

@section('content')
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{asset('theme/assets/images/bg/page-bg.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">About Us</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->


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
                                <span class="sub-title">About Us</span>

                            </div>
                            <p class="mb-30">Sit amet consectetur. Velit integer tincidunt sceleries nodalesry volutpat neque fermentum malesuada sceleris quecy massa lacus
                                Ultrices eget leo cras odio blandit rhoncus eues feugiat<br>
                                Sit amet consectetur. Velit integer tincidunt sceleries nodalesry volutpat neque fermentum malesuada sceleris quecy massa lacus
                                Ultrices eget leo cras odio blandit rhoncus eues feugiat
                                <br>
                                Sit amet consectetur. Velit integer tincidunt sceleries nodalesry volutpat neque fermentum malesuada sceleris quecy massa lacus
                                Ultrices eget leo cras odio blandit rhoncus eues feugiat
                                <br>
                                Sit amet consectetur. Velit integer tincidunt sceleries nodalesry volutpat neque fermentum malesuada sceleris quecy massa lacus
                                Ultrices eget leo cras odio blandit rhoncus eues feugiat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About Section ======-->

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

<section class="gallery-section mbm-150">
    <div class="container-fluid">
        <div class="slider-active-5-item wow fadeInUp">
            <!--=== Single Gallery Item ===-->
            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="{{asset('theme/assets/images/gallery/gl-1.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <a href="{{asset('theme/assets/images/gallery/gl-1.jpg')}}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!--=== Single Gallery Item ===-->
            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="{{asset('theme/assets/images/gallery/gl-2.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <a href="{{asset('theme/assets/images/gallery/gl-2.jpg')}}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!--=== Single Gallery Item ===-->
            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="{{asset('theme/assets/images/gallery/gl-3.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <a href="{{asset('theme/assets/images/gallery/gl-3.jpg')}}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!--=== Single Gallery Item ===-->
            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="{{asset('theme/assets/images/gallery/gl-4.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <a href="{{asset('theme/assets/images/gallery/gl-4.jpg')}}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!--=== Single Gallery Item ===-->
            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="{{asset('theme/assets/images/gallery/gl-5.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <a href="{{asset('theme/assets/images/gallery/gl-5.jpg')}}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!--=== Single Gallery Item ===-->
            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="{{asset('theme/assets/images/gallery/gl-3.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <a href="{{asset('theme/assets/images/gallery/gl-3.jpg')}}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Gallery Section ======-->
@endsection
