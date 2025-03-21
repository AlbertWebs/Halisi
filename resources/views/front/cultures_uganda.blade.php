@extends('front.master')

@section('content')
{{-- @foreach ($Country as $Country) --}}

<style>

.bold{
    font-weight: bold !important;
}
</style>
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{url('/')}}/uploads/cultures/uganda.jpg);background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title" style="font-size: 55px">Cultural Tourism  Uganda </h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Countries</a></li>
                        <li class="active">Uganda</li>
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
                                               In Uganda, cultural tourism offers more than just a glimpse into the past; it's a living experience where you can engage with local communities and witness firsthand their rich heritage. One of the highlights of our cultural tours is the opportunity to encounter the Batwa people, Uganda's indigenous forest-dwelling community.
                                                The Batwa, also known as the "Keepers of the Forest," have a deep connection to Uganda's rainforests, and their way of life is intricately intertwined with nature. Through our tours, you'll have the chance to learn about their traditional hunting and gathering practices, their spiritual beliefs, and their unique relationship with the land.
                                                But our cultural exploration doesn't stop there. You'll also have the chance to visit the kingdom of Buganda, where ancient traditions thrive amidst the bustling modernity of Kampala. Explore vibrant markets, where the sights, sounds, and flavors of Uganda come together in a colorful fabric of life.
                                                Join us on a journey of cultural discovery with Halisi Africa Discoveries, where every step is an opportunity to connect with the soul of Uganda and leave a positive impact on the communities you visit.

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
                                            <img src="{{url('/')}}/uploads/cultures/uganda.jpg" alt="we Image">
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
