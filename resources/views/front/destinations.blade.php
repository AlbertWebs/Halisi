@extends('front.master')

@section('content')
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{asset('theme/assets/images/bg/page-bg.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">Popular Destinations</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Popular Destinations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->
<br><br>


    <!--====== Start Destination Section ======-->
    <section class="destination-section pb-100">
        <div class="container">
            <div class="row justify-content-center">
                {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-place-item-two mb-30 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-10.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">Indonesia</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-place-item-two mb-30 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-11.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">New York</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @foreach ($Experience as $experience)
                <div class="col-lg-6 col-md-12">
                    <div class="single-place-item-two mb-30 wow fadeInUp">
                        <div class="place-img">
                            <img style="max-height:350px" src="{{url('/')}}/uploads/experiences/{{$experience->image_one}}" alt="Place Image">
                            <span class="tour-count">{{$experience->duration}} Day Trip</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">{{$experience->title}}</h3>
                                    <p class="price"><span class="currency"></span>{{$experience->location}}</p>
                                    <br>
                                    <strong>
                                        <a style="border:2px solid #ffffff; color:#ffffff" class="main-btn btn" href="{{url('/')}}/destinations/itinerary/{{$experience->slung}}">View Itinerary <i class="fas fa-paper-plane"></i></a>
                                    </strong>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="single-place-item-two mb-30">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-13.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">Nepal</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="single-place-item-two mb-30">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-14.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">Maldives</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="single-place-item-two mb-30">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-15.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">Dubai</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="single-place-item-two mb-30">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-16.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">France</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="single-place-item-two mb-30 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-12.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">Switzerland</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-place-item-two mb-30 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-18.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">Morocco</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-place-item-two mb-30 wow fadeInUp">
                        <div class="place-img">
                            <img src="{{asset('theme/assets/images/place/place-19.jpg')}}" alt="Place Image">
                            <span class="tour-count">5 Tours</span>
                            <div class="place-content">
                                <div class="info text-white">
                                    <h3 class="title mb-10">Hong Kong</h3>
                                    <p class="price"><span class="currency">$</span>225.63</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="gowilds-pagination wow fadeInUp text-center mt-30">
                        <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                        <li><a href="#" class="active">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--====== End Destination Section ======-->

@include('front.instagram')
<!--====== End Gallery Section ======-->
@endsection
