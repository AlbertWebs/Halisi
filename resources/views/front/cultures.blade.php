@extends('front.master')

@section('content')
@foreach ($Country as $Country)

<style>

.bold{
    font-weight: bold !important;
}
</style>
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{url('/')}}/uploads/cultures/{{$Country->image}});background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title" style="font-size: 55px">Cultural Tourism  {{$Country->country}} </h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Countries</a></li>
                        <li class="active">{{$Country->country}}</li>
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
                    <div class="justify-content-center text-center">
                    <h2 class="mb-3">Kenya's Tribes: <br>A Living Mosaic of Cultures</h2>
                    <div class="col-xl-12 ">
                    <p class="mb-3">Did you know Kenya boasts a mind-blowing 47 distinct ethnic groups, each with their own fascinating customs and traditions! Here's a taste of what awaits</p>
                    </div>
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
                                            <div class="icon mb-3"><h4> 
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                
                                                <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                Maasai</h4>
                                            </div> 
                                            <p>
                                               Unveiling the Maasai people of Kenya is an experience that transcends mere sightseeing. 
                                               They reside primarily in Narok County, but their presence graces other Kenyan regions like Kajiado, Laikipia, and Samburu. 
                                               Witnessing their  "adumu" dances is a vibrant introduction to their culture. 
                                               Their attire, a bold display of color, and intricate beadwork hold deeper meaning, reflecting social status and age groups. 
                                               At the heart of the Maasai way of life lies a deep connection to their livestock – cattle, sheep, and goats. These animals are not just possessions, but central to their semi-nomadic existence. 
                                               Engaging with the Maasai through responsible cultural tourism fosters understanding and appreciation for their unique traditions and the challenges they face in a modernizing world
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
                                            <img src="{{url('/')}}/uploads/cultures/{{$Country->image}}" alt="we Image">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row"> 
                        <div class="col-xl-5">             
                            
                            <!--=== We Image Box ===-->
                            <div class="we-two_image-box mb-20">
                                <div class="row align-items-end">
                                    <div class="col-md-12">
                                        <!--=== We Image ===-->
                                        <div class="we-image mb-30">
                                            <img src="{{url('/')}}/uploads/cultures/samburu.jpg" alt="we Image">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>                       
                        <div class="col-xl-7">
                            <!--=== We Content Box ===-->
                            <div class="we-content-box  mb-10">                               
                                                            
                                <!--=== Features List ===-->
                                <div class="features-list_one">                                    
                                    <!--=== Single Features List ===-->
                                    <div class="single-features-list mb-40">
                                        <div class="icon-inner d-flex align-items-center">                                           
                                        </div>
                                        <div class="content ">
                                            <div class="icon mb-3"><h4> 
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                
                                                <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                Samburu</h4>
                                            </div> 
                                            <p>
                                              The Samburu people are also known by the evocative moniker, "The Butterfly People." This nickname originates from their stunning attire, particularly the brightly colored beaded garments worn by both men and women. The intricate beadwork patterns, often featuring geometric shapes and symbolic designs, resemble the vibrant wings of butterflies, earning them this colorful designation from neighboring tribes. They call Samburu County home, a region marked by the vastness of the Ewaso Ng'iro River basin and the imposing presence of Mount Kenya. Central to their belief system is the sacred Mount Ololokwe, a revered dwelling place for their god, Nkai. The Samburu way of life revolves around pastoralism, with cattle, sheep, goats, and camels forming the cornerstone of their existence. These animals provide not just sustenance, but also clothing, social status, and a deep sense of identity. Their rich cultural heritage is evident in their exquisite beadwork, a vibrant language of colors and patterns adorning their clothing and everyday objects. Elaborate ceremonies mark life stages, with the Eunoto ritual celebrating a girl's passage into womanhood. Traditional dwellings called manyattas, constructed from branches and mud, offer shelter to extended families and their livestock, fostering a strong sense of community.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        

                    </div>

                    {{-- <div class="row">                        
                        
                        <div class="col-xl-6">             
                            
                            <!--=== We Image Box ===-->
                            <div class="we-two_image-box mb-20">
                                <div class="row align-items-end">
                                    <div class="col-md-12">
                                        <!--=== We Image ===-->
                                        <div class="we-image mb-30">
                                            <img src="{{url('/')}}/uploads/cultures/elmolo.jpg" alt="we Image">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div> --}}

                    <div class="row"> 
                        <div class="col-xl-6">         
                            
                            <!--=== We Image Box ===-->
                            <div class="we-two_image-box mb-20">
                                <div class="row align-items-end">
                                    <div class="col-md-12">
                                        <!--=== We Image ===-->
                                        <div class="we-image mb-30">
                                            <img src="{{url('/')}}/uploads/cultures/luo.jpg" alt="we Image">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>                       
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
                                            <div class="icon mb-3">
                                                <h4> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                    
                                                    <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                    Luo People
                                                </h4>
                                            </div> 
                                            <p>
                                                Head to the shores of Lake Victoria and get ready to be swept away by the rich traditions of the Luo people. Witness their  dances (bhis) and elaborate ceremonies, and learn about their diverse mythologies. 
                                            </p>
                                        </div>
                                    </div>
                                     <div class="single-features-list mb-40">
                                        <div class="icon-inner d-flex align-items-center">                                           
                                        </div>
                                        <div class="content ">
                                            <div class="icon mb-3"><h4> 
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                
                                                <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                El Molo People</h4>
                                            </div> 
                                            <p>
                                               On the shores of the vast Lake Turkana, you'll find a unique community – the El Molo people. Renowned for their exceptional fishing skills and body decorations. Explore alongside these resilient people and learn about their  traditions.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        

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
                                            <div class="icon mb-3">
                                                <h4> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                    
                                                    <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                   Explore the UNESCO World Heritage Site – the sacred Mijikenda Kaya forests
                                                </h4>
                                            </div> 
                                            <p>
                                                Discover the kayas (fortified villages) hidden within, remnants of an era showcasing the ingenuity and cultural heritage of the Mijikenda people. Make sure to visit the sacred Kaya Kinondo forest, a place of immense spiritual significance.
                                            </p>
                                            <h4 class="pt-5">Festivals: A Celebration of Life and Traditions</h4>

                                            <p class="pt-3">
                                                <span class="bold">The Irreecha festival</span> is a culturally significant event celebrated by the Oromo people in Ethiopia and parts of Kenya notably Marsabit and Tana River County, marking the end of the rainy season and the start of the harvest. It involves colorful rituals, traditional music and dance, and communal gatherings where participants express gratitude to Waaqaa (God) for the blessings of nature. Central to the festival is the gathering at sacred sites near water bodies, where prayers and thanksgiving are offered, while participants don traditional attire and carry symbols of renewal and prosperity. Irreecha serves as a platform for social and political gatherings, fostering community unity and providing an opportunity to discuss important issues.
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
                                            <img src="{{url('/')}}/uploads/cultures/mijikenda.jpg" alt="we Image">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

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
                                            <div class="icon mb-3">
                                                <h4> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                    
                                                    <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                   Turkana Cultural Festival (Tobong'u Lore)
                                                </h4>
                                            </div> 
                                            <p>
                                                Take in the colorful Turkana Cultural Festival, which highlights the rich history of the Turkana people, showcasing the rich heritage of the Turkana people and surrounding communities. Witness traditional dances, music, storytelling, and the unique spectacle of camel races. Celebrate with the locals and learn about the importance of cultural preservation.
                                            </p>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

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
                                            <div class="icon mb-3">
                                                <h4> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                    
                                                    <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                    Maralal International Camel Derby
                                                </h4>
                                            </div> 
                                            <p>
                                                Feeling adventurous?<br> Get your adrenaline pumping at the thrilling Maralal International Camel Derby! Watch skilled riders from around the world compete in races across the rugged desert terrain of Maralal, Samburu County. Experience the vibrant Samburu culture through traditional dances, music, and local crafts.
                                            </p>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

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
                                            <div class="icon mb-3">
                                                <h4> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                    
                                                    <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                   Mombasa Old Town
                                                </h4>
                                            </div> 
                                            <p>
                                               Explore Mombasa, a cultural heritage site with a rich history. Guided tours of Fort Jesus, a 16th-century Portuguese fort, offer a glimpse into Kenya's colonial past. Explore the bustling atmosphere of the Old Town and discover the unique blend of African, Arabic, and European influences that shaped Mombasa's cultural heritage.
                                            </p>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

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
                                            <div class="icon mb-3">
                                                <h4> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                    
                                                    <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                    Lamu Island
                                                </h4>
                                            </div> 
                                            <p>
                                                Step back in time on the idyllic island of Lamu, a UNESCO World Heritage Site. Explore the maze of narrow streets adorned with traditional Swahili architecture. Witness the renowned Lamu dhows, elaborately crafted wooden sailing vessels, a testament to the island's rich maritime history. Participate in the vibrant Lamu Dhow Festival, a celebration of Lamu's maritime heritage featuring traditional dhow races and cultural performances. Sail on a dhow yourself and experience the thrill of navigating the turquoise waters surrounding the island.
                                            </p>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row"> 
                        <div class="col-xl-6">        
                            
                            <!--=== We Image Box ===-->
                            <div class="we-two_image-box mb-20">
                                <div class="row align-items-end">
                                    <div class="col-md-12">
                                        <!--=== We Image ===-->
                                        <div class="we-image mb-30">
                                            <img src="{{url('/')}}/uploads/cultures/leo.png" alt="we Image">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

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
                                            <div class="icon mb-3">
                                                <h4> 
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                                    
                                                    <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                                    The Bomas of Kenya
                                                </h4>
                                            </div> 
                                            <p>
                                               Want a taste of Kenya's diverse cultural diversity in one location? Visit the Bomas of Kenya! This unique center, located near Nairobi, features traditional homesteads representing Kenya's 42 ethnic groups. Witness demonstrations of traditional crafts, dances, and music, gaining a deeper appreciation for the richness and vibrancy of Kenyan culture.

                                                Experience Kenya Authentically with Halisi Africa Discoveries
                                                Travel with a purpose with Halisi Africa Discoveries. We choose tours operated by local communities, ensuring they directly benefit from tourism. Explore Kenya'

                                            </p>
                                            
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


@endforeach
@endsection
