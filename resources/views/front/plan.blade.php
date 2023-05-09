@extends('front.master')

@section('content')
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{asset('theme/assets/images/bg/page-bg.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">Plan My Trip</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Plan My Trip</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->
<br><br>
<!--====== Start Contact Section ======-->
<section class="contact-section pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title">Get In Touch</span>
                    <h2>Plan My Trip</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-area wow fadeInUp">
                    <form class="contact-form">
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
                                    <input type="date" placeholder="Website" class="form_control datepicker hasDatepicker" id="dp1683624198731" name="date" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea name="message" placeholder="How Would You Like Your Trip?" class="form_control" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group text-center">
                                    <button class="main-btn primary-btn">Plan Now!<i class="fas fa-paper-plane"></i></button>
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
@include('front.instagram')
<!--====== End Gallery Section ======-->
@endsection
