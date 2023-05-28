@extends('front.master')

@section('content')
@foreach ($Experience as $experience)
<?php
    $Itinerary = DB::table('itineries')->where('product_id',$experience->id)->get();
?>
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url('{{url('/')}}/uploads/experiences/{{$experience->image_one}}');">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">{{$experience->title}}</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/')}}">Experiences</a></li>
                        <li class="active">{{$experience->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->
<br><br>
<section class="place-details-section">
    <!--=== Place Slider ===-->
    <div class="place-slider-area overflow-hidden wow fadeInUp">
        <div class="place-slider">
            @foreach ($Itinerary as $itinerary)
            <div class="place-slider-item">
                <div class="place-img">
                    <img style="max-height:300px" src="{{url('/')}}/uploads/itineries/{{$itinerary->image_one}}" alt="{{$experience->title}}">
                </div>
            </div>
            @endforeach
            <div class="place-slider-item">
                <div class="place-img">
                    <img style="max-height:300px" src="{{url('/')}}/uploads/experiences/{{$experience->image_one}}" alt="{{$experience->title}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!--=== Tour Details Wrapper ===-->
        <div class="tour-details-wrapper pt-80">
            <!--=== Tour Title Wrapper ===-->
            <div class="tour-title-wrapper pb-30 wow fadeInUp">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tour-title mb-20">
                            <h3 class="title">{{$experience->title}}</h3>
                            <p><i class="far fa-map-marker-alt"></i>{{$experience->location}}</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tour-widget-info">
                            {{-- <div class="info-box mb-20">
                                <div class="icon">
                                    <i class="fal fa-box-usd"></i>
                                </div>
                                <div class="info">
                                    <h4><span>From</span>$96.54</h4>
                                </div>
                            </div> --}}
                            <div class="info-box mb-20">
                                <div class="icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="info">
                                    <h4><span>Durations</span>{{$experience->duration}} Days</h4>
                                </div>
                            </div>
                            <div class="info-box mb-20">
                                <div class="icon">
                                    <i class="fal fa-planet-ringed"></i>
                                </div>
                                <div class="info">
                                    <h4><span>Tour Type</span>Special Interest Safaris</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Tour Area Nav ===-->
            <div class="tour-area-nav pt-20 pb-20 wow fadeInUp">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        {{-- <div class="ratings-box">
                            <ul class="ratings">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><a href="#">(3k Riviews)</a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-md-8">
                        <div class="share-nav">
                            <a href="#">Share<i class="far fa-share"></i></a>
                            <a href="#">Reviews<i class="far fa-share"></i></a>
                            <a href="#">Whislist<i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <!--=== Place Content Wrap ===-->
                    <div class="place-content-wrap pt-45 wow fadeInUp">
                        <h3 class="title">Explore Tours</h3>
                        <p>
                            {{ html_entity_decode($experience->meta) }}
                        </p>
                        <hr>
                        <p>
                            {!! html_entity_decode($experience->content) !!}
                        </p>
                        <h4>Itinerary</h4>
                        <p>  {{ html_entity_decode($experience->meta) }}</p>
                        <div class="row align-items-lg-center">
                            <div class="col-lg-5">
                                <ul class="check-list">
                                    @foreach ($Itinerary as $Theitineraries)
                                    <li><i class="fas fa-badge-check"></i>{{$Theitineraries->day}}</li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="col-lg-7">
                                <img style="border:3px #63AB45 solid; border-radius:10px" src="{{url('/')}}/uploads/itineries/{{$Theitineraries->image_one}}" class="mb-20 w-100" alt="place image">

                            </div>
                        </div>
                        <br><br>
                        <hr>
                        <h4>Activities</h4>

                    </div>
                    <!--=== Days Area ===-->
                    <div class="days-area mb-55 wow fadeInUp">
                        <ul class="nav nav-tabs mb-35">
                            <?php $Count = 1; ?>
                            @foreach ($Itinerary as $Theitineraries)
                            @if($Count == 1)
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#day{{$Theitineraries->id}}">{{$Theitineraries->day}}</button>
                            </li>
                            @else
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#day{{$Theitineraries->id}}">{{$Theitineraries->day}}</button>
                            </li>
                            @endif
                            <?php $Count = $Count+1 ?>
                            @endforeach
                        </ul>
                        <?php $Counter = 1; ?>
                        <hr>
                        <div class="tab-content">
                            @foreach ($Itinerary as $Theitineraries)
                            @if($Counter == 1)
                            <div class="tab-pane fade show active" id="day{{$Theitineraries->id}}">
                                <div class="content-box">
                                    <p>
                                        {!! html_entity_decode($Theitineraries->content) !!}
                                    </p>
                                </div>
                            </div>
                            @else
                            <div class="tab-pane fade" id="day{{$Theitineraries->id}}">
                                <div class="content-box">

                                        <p>
                                            {!! html_entity_decode($Theitineraries->content) !!}
                                        </p>

                                </div>
                            </div>
                            @endif
                            <?php $Counter = $Counter+1 ?>
                            @endforeach
                        </div>
                    </div>
                    <!--=== Map Box ===-->


                </div>
                <div class="col-xl-4">
                    <!--=== Sidebar Widget Area ===-->
                    <div class="sidebar-widget-area pt-60 pl-lg-30">
                        <!--=== Booking Widget ===-->
                        <div class="sidebar-widget booking-form-widget wow fadeInUp mb-40">
                            <h4 class="widget-title">Booking Tour</h4>
                            <form class="sidebar-booking-form">
                                <div class="booking-date-time mb-20">
                                    <div class="booking-item">
                                        <label>Date</label>
                                        <div class="bk-item booking-time">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="text" placeholder="Select Date" class="datepicker">
                                        </div>
                                    </div>
                                    <div class="booking-item">
                                        <label>Time</label>
                                        <div class="bk-item booking-date">
                                            <i class="far fa-calendar-alt"></i>
                                            <select class="wide">
                                                <option value="01">12.00 Am</option>
                                                <option value="01">01.00 Am</option>
                                                <option value="01">02.00 Am</option>
                                                <option value="01">03.00 Am</option>
                                                <option value="01">04.00 Am</option>
                                                <option value="01">05.00 Am</option>
                                                <option value="01">06.00 Am</option>
                                                <option value="01">07.00 Am</option>
                                                <option value="01">08.00 Am</option>
                                                <option value="01">09.00 Am</option>
                                                <option value="01">10.00 Am</option>
                                                <option value="01">11.00 Am</option>
                                                <option value="01">12.00 Pm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-guest-box mb-20">
                                    <h6 class="mb-20">Tickets</h6>
                                    <div class="booking-item">
                                        <label>Adult (18+ years) </label>
                                        <div class="bk-item booking-user">
                                            <i class="far fa-user"></i>
                                            <select class="wide">
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="booking-item">
                                        <label>Youth (13-17 years) </label>
                                        <div class="bk-item booking-user">
                                            <i class="far fa-user"></i>
                                            <select class="wide">
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="booking-item">
                                        <label>Child (0-12 years) </label>
                                        <div class="bk-item booking-user">
                                            <i class="far fa-user"></i>
                                            <select class="wide">
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-extra mb-15 wow fadeInUp">
                                    <h6 class="mb-10">Aditional Services</h6>
                                    <div class="extra">
                                        <i class="fas fa-check-circle"></i>Service Per Boooking <span><span class="currency">-</span>-</span>
                                    </div>
                                    <div class="extra">
                                        <i class="fas fa-check-circle"></i>Service Per Person <span><span class="currency">-</span>-</span>
                                    </div>
                                </div>

                                <div class="submit-button">
                                    <button class="main-btn primary-btn">Get Quotation<i class="far fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--=== Booking Info Widget ===-->
                        <div class="sidebar-widget booking-info-widget wow fadeInUp mb-40">
                            <h4 class="widget-title">Tour Information</h4>
                            <ul class="info-list">
                                <li><span><i class="far fa-user-circle"></i>Max Guests<span>-</span></span></li>
                                <li><span><i class="far fa-user-circle"></i>Minimum Age<span>-</span></span></li>
                                <li><span><i class="far fa-map-marker-alt"></i>Tour Location<span>{{$experience->location}}</span></span></li>
                                <li><span><i class="far fa-globe"></i>Language<span>English</span></span></li>
                            </ul>
                        </div>
                        <!--=== Recent Place Widget ===-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endforeach

@include('front.instagram')
<!--====== End Gallery Section ======-->
@endsection
