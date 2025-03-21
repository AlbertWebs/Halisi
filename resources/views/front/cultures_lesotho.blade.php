@extends('front.master')

@section('content')
{{-- @foreach ($Country as $Country) --}}

<style>

.bold{
    font-weight: bold !important;
}
</style>
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{url('/')}}/uploads/cultures/south-africa-742507_1280.jpg);background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title" style="font-size: 55px">Cultural Tourism  Lesotho </h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Countries</a></li>
                        <li class="active">Lesotho</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->
<!--====== Start Info Section ======-->
<section class="contact-info-section pt-100 pb-60">
    <div class="container">
        <div class="row align-items-xl-center">
            <div class="col-xl-12">
                <!--=== Section Title ===-->
                <div class="section-title text-center mb-45 wow fadeInDown">
                    {{--  --}}
                    {{-- <div class="justify-content-center text-center">
                    <h2 class="mb-3">Kenya's Tribes: <br>A Living Mosaic of Cultures</h2>
                    <div class="col-xl-12 ">
                    <p class="mb-3">Did you know Kenya boasts a mind-blowing 47 distinct ethnic groups, each with their own fascinating customs and traditions! Here's a taste of what awaits</p>
                    </div> --}}
                    </div>
                    
                    <div class="row">                        
                        <div class="col-xl-6">
                            <!--=== We Content Box ===-->
                            <div class="we-content-box  mb-10">                               
                                                            
                                <!--=== Features List ===-->
                                <div class="features-list_one">                                    
                                    <!--=== Single Features List ===-->
                                    <div class="single-features-list mb-40">
                                        <div class="icon-inner d-flex align-items-center">                                           
                                        </div>
                                        <div class="content ">
                                            {{-- <div class="icon mb-3"><h4> 
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                
                                                <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                Maasai</h4>
                                            </div>  --}}
                                            <p>
                                              Experience the rich cultural heritage of Lesotho with Halisi Africa Discoveries as we guide you through the kingdom's highlands. Explore ancient rock formations adorned with  rock paintings, offering a glimpse into the beliefs and traditions of Lesotho's earliest inhabitants. Our guided tours provide a unique opportunity to discover these ancient treasures, from the remote caves of Tsatsane Valley to accessible sites near Maseru like Ha Baroana and Liphofung. Immerse yourself in Lesotho's vibrant cultural traditions, including the iconic Sotho blanket and dynamic Basotho dances. Encounter sangomas, revered spiritual healers, as they share their ancestral wisdom. 
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">             
                            
                            <!--=== We Image Box ===-->
                            <div class="we-two_image-box mb-20">
                                <div class="row align-items-end">
                                    <div class="col-md-12">
                                        <!--=== We Image ===-->
                                        <div class="we-image mb-30">
                                            <img src="{{url('/')}}/uploads/cultures/lesotho-3706987_1280.jpg" alt="we Image">
                                        </div>
                                    </div>
                                    
                                </div>
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
