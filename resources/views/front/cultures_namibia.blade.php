@extends('front.master')

@section('content')
{{-- @foreach ($Country as $Country) --}}

<style>

.bold{
    font-weight: bold !important;
}
</style>
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{url('/')}}/uploads/cultures/himba-2011398_1280.jpg);background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title" style="font-size: 55px">Cultural Tourism  Namibia </h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Countries</a></li>
                        <li class="active">Namibia</li>
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
                                             Namibia's cultural dimension is a rich blend of diverse traditions and communities, with the Himba people shining as a distinct and fascinating group. Living predominantly in the arid landscapes of northwestern Namibia, the Himba are known for their striking appearance and deep-rooted customs. From their intricate hairstyles to their unique reddish skin tone, the Himba offer a glimpse into a way of life steeped in tradition and connectedness to the land.
At the heart of Himba culture lies a strong sense of community and respect for age-old traditions. Family bonds are paramount, with elders leading extended family units and women revered for their roles as caregivers and artisans. Rituals and ceremonies punctuate the Himba's lives, marking significant milestones and reinforcing their cultural identity. Despite embracing some modern influences, the Himba remain steadfast in preserving their heritage, offering visitors the chance to engage with their customs and learn about their way of life through cultural tours in Namibia.

Ready to experience cultural tourism in Namibia as it is aptly referred to as a melting pot of cultures due to the different traditions and communities such as: Nama, Damara, Baster, Coloureds, Hereros, Himbas, Germans, Afrikaaners, San, Aawambo as well as others. Plan with us today.
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
                                            <img src="{{url('/')}}/uploads/cultures/himba-6397124_1280.jpg" alt="we Image">
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
