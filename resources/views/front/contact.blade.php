@extends('front.master')

@section('content')
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{asset('theme/assets/images/bg/page-bg.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->
<?php
  $Settings = DB::table('sitesettings')->get();
?>
@foreach ($Settings as $Set)


<!--====== Start Info Section ======-->
<section class="contact-info-section pt-100 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <!--=== Section Title ===-->
                <div class="section-title text-center mb-45 wow fadeInDown">
                    <span class="sub-title">Contact Us</span>
                    <h2>Ready to Get Our Best Services!
                    Feel Free to Contact With Us</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!--=== Contact Info Item ===-->
                <div class="contact-info-item text-center mb-40 wow fadeInUp">
                    <div class="icon">
                        <img src="{{asset('theme/assets/images/icon/icon-1.png')}}" alt="icon">
                    </div>
                    <div class="info">
                        <span class="title">Office Location</span>
                        <p>{{$Set->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!--=== Contact Info Item ===-->
                <div class="contact-info-item text-center mb-40 wow fadeInDown">
                    <div class="icon">
                        <img src="{{asset('theme/assets/images/icon/icon-2.png')}}" alt="icon">
                    </div>
                    <div class="info">
                        <span class="title">Email Address</span>
                        <p><a href="mailto:info@halisiafricadiscoveries.com"><span class="__cf_email__" data-cfemail="">{{$Set->mobile_one}}</span></a></p>
                        <p><a href="https://halisiafricadiscoveries.com/">halisiafricadiscoveries.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!--=== Contact Info Item ===-->
                <div class="contact-info-item text-center mb-40 wow fadeInUp">
                    <div class="icon">
                        <img src="{{asset('theme/assets/images/icon/icon-3.png')}}" alt="icon">
                    </div>
                    <div class="info">
                        <span class="title">Hotline</span>
                        <p><a href="tel:{{$Set->mobile}}">{{$Set->mobile}}</a></p>
                        <p><a href="tel:{{$Set->mobile_one}}">{{$Set->mobile_one}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Info Section ======-->
@endforeach
<!--====== Start Contact Map Section ======-->
<section class="contact-page-map pb-100 wow fadeInUp">
    <!--=== Map Box ===-->
    <div class="map-box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16314137.732402142!2d35.3843494!3d-3.3639165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe145849f15414bf%3A0x437aa8a42154d!2sHalisi%20Africa%20Discoveries!5e0!3m2!1sen!2ske!4v1683019793212!5m2!1sen!2ske"></iframe>
    </div>
</section><!--====== End Contact Map Section ======-->
<!--====== Start Contact Section ======-->
<section class="contact-section pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title">Get In Touch</span>
                    <h2>Send Us Message</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-area wow fadeInUp">
                    <form class="contact-form" action="{{url('/')}}/send-message" method="POST">
                        @csrf
                        <input type="hidden" name="switch" value="message">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" placeholder="Name" class="form_control" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" placeholder="Phone Number" class="form_control" name="number" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="email" placeholder="Email Address" class="form_control" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" placeholder="Booking" class="form_control" name="subject" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea name="message" placeholder="Write Message" class="form_control" rows="6"></textarea>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="col-lg-12 col-md-12" id="TheCapcha">
                                <div class="g-recaptcha" data-sitekey="6LcyuF4mAAAAAAgt5KFmxuQS7i_j0Ua1nWIW1D-N" data-callback="correctCaptcha"></div>
                                <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                            </div>
                            {{--  --}}
                            <br>
                            <div class="col-lg-12">
                                <div class="form_group text-center">
                                    <button type="submit" class="main-btn primary-btn">Send Us Message<i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Section ======-->
<!--====== Start Gallery Section ======-->
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
