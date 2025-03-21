@extends('front.master')

@section('content')



<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{asset('theme/assets/images/bg/page-bg.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">Terms and Conditions</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Terms</a></li>
                        <li class="active">Terms</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->
<!--====== Start Info Section ======-->
<section class="contact-info-section pt-100 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <!--=== Section Title ===-->
                <div class="section-title text-center mb-45 wow fadeInDown">
                    {{--  --}}
                    <div class="row">
                        <div class="col-xl-8" style="margin:0 auto">
                            <!--=== Place Content Wrap ===-->
                            <div class="place-content-wrap pt-45 wow fadeInUp" style="color:#000000">
                                {{-- <h3 class="title">Explore Tours</h3> --}}

                                <hr>
                                @foreach ($Terms as $terms)
                                <h3>{{$terms->title}}</h3>
                                <hr>
                                <p>
                                    {!! html_entity_decode($terms->content) !!}
                                </p>
                                @endforeach


                            </div>
                        </div>

                    </div>
                    {{--  --}}
                </div>
            </div>
        </div>

    </div>
</section><!--====== End Info Section ======-->



@endsection
