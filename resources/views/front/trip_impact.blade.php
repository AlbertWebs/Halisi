@extends('front.master')

@section('content')
<?php
    $About = DB::table('about')->get()

?>
@foreach ($About as $about)


<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{asset('theme/assets/images/bg/page-bg.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">Impact Trips</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Impact Trips</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->

    <!--====== Start About Section ======-->
        <section class="about-section pt-100">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="section-title text-center mb-30">
                        <span class="sub-title">Impact Trips</span>
                        <h2>
                            Making a Difference in Africa.
                        </h2>
                        <p>Climate Change Mitigation and Adaptation Strategies.</p>
                        
                    </div>
                    <div class="col-xl-6">
                        <!--=== About Content Box ===-->
                        <div class="about-content-box text-center mb-55 wow fadeInDown">
                            
                            In collaboration with County governments and development partners, we implement innovative climate change mitigation and adaptation strategies. For instance, in Lamu, Kilifi and Kwale Counties, we partner with local women's groups on mangrove restoration projects. These initiatives not only sequester carbon and protect coastal ecosystems but also provide alternative livelihoods for communities vulnerable to climate change impacts. Through training in agroforestry, climate-smart agriculture, and financial literacy, we empower women to build resilience and adapt to changing environmental conditions.
                            <h2>
                               Advocacy on Governance Structures and Women's Rights.  
                            </h2>
                            <p>Advocacy</p>
                            Halisi Africa Discoveries believes that tourism can be a powerful force for positive change. We go beyond showcasing the beauty of Africa and actively advocate for social justice issues alongside inspiring local communities. By partnering with women's groups across Lamu, Kajiado, Kwale, Kilifi, and Laikipia counties, we focus on four key areas:
                            <ol>
                                <li><span style="font-weight: bold">Good Governance:</span> We advocate for transparency and accountability in local governance. Your trip itinerary might involve supporting initiatives that promote citizen participation and empower communities to hold leaders responsible.</li>
                                <li><span style="font-weight: bold">Women's Empowerment: </span> We champion increased participation of women in decision-making platforms. Your adventure could include interacting with inspiring female leaders or visiting projects that promote women's education and economic opportunities.</li>
                                <li><span style="font-weight: bold">Combating Gender-Based Violence:</span> Halisi Africa Discoveries raises awareness about gender-based violence and supports organizations working to end it. You may have the opportunity to visit shelters or programs that empower women and girls.</li>
                                <li><span style="font-weight: bold">Women's Rights:</span> We believe in equal access to education, healthcare, and economic opportunities for all. Your trip might involve visiting projects that provide women with vocational training or microloans, equipping them to build a brighter future.</li>
                            </ol>
                            
                        </div>
                    </div>

                    <div class="col-xl-6 order-2 order-xl-1">
                        <!--=== We Image Box ===-->
                        <div class="we-two_image-box mb-20">
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30">
                                        <img src="{{url('/')}}/uploads/destinations/ol-seki-hemingways-lodge-mara-naboisho-small.jpg" alt="we Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30">
                                        <img src="{{url('/')}}/uploads/destinations/hot-air-balloon-safari-masai-mara-kenya-small.jpg" alt="we Image">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!--=== We Image ===-->
                                    <div class="we-image mb-30 pr-lg-30 text-md-end">
                                        <img src="{{url('/')}}/uploads/cultures/women-6719908_1280.jpg" alt="we Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!--=== About Content Box ===-->
                        <div class="about-content-box text-center mb-55 wow fadeInDown">                            
                            
                            <h2>
                                Partnership with Seedball Kenya for Rangeland and Forest Restoration. 
                            </h2>
                            As part of our commitment to environmental stewardship, we have partnered with Seedball Kenya to integrate forest and rangeland restoration into our trips. Guests are provided with seedballs to distribute during game drives, contributing to reforestation and habitat restoration efforts. This collaborative approach not only enhances biodiversity but also supports local communities by improving ecosystem services and livelihood opportunities.
                            Through these comprehensive initiatives, we strive to create a holistic approach to sustainable tourism that addresses environmental, social, and economic challenges. 

                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Section ======-->


        <!--====== Start About Section ======-->
        <section class="about-section bg_cover pt-100 pb-100" style="background-image: url('{{asset('theme/assets/images/bg/about-bg-1.jpg')}}');">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6">
                        <!--=== About Image Box ===-->
                        <div class="about-image-box mb-50">
                            <br> <br> <br>
                            <img src="{{url('/')}}/uploads/banners/pexels-twilight-kenya-11866350.jpg" class="rounded-2" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--=== About Content Box ===-->
                        <div class="about-content-box text-white pl-lg-40 mb-50">
                            <!--=== Section Title ===-->
                            
                            <h4 style="color:#63AB45">Mission</h4>
                            <p>At Halisi Africa Discoveries our mission is to provide exceptional travel experiences that empower women and promote environmental sustainability. We strive to create meaningful connections between travelers and local communities, while actively working to protect and preserve the natural world.</p>
                            <br>
                            <h4 style="color:#63AB45">Vision</h4>
                            <p>
                                Our vision is to be a leading tour planning company that sets the standard for women empowerment and environmental sustainability in the travel industry. We aim to inspire travelers to explore the world responsibly, supporting local communities and preserving the planet for future generations.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About Section ======-->

        @include('front.why')

        @include('front.ethos')

        <section class="features-section pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">Tailored Tours</h4>
                                <p>We specialize in crafting personalized itineraries that cater to the unique interests and preferences of our clients. Our team of experienced travel planners will curate unforgettable journeys, taking into account the cultural, social, and ecological aspects of each destination.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="fa fa-female"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">Women Empowerment Experiences</h4>
                                <p>We offer tours that highlight and support women-owned businesses, cooperatives, and local initiatives. These experiences provide opportunities for cultural exchange, knowledge sharing, and economic empowerment of women in the communities we visit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="flaticon-solar-energy"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">Sustainable Accommodations</h4>
                                <p>We prioritize eco-friendly accommodations that are committed to reducing their environmental footprint. From eco-lodges to green hotels, we partner with accommodations that promote energy efficiency, waste reduction, water conservation, and support local communities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="flaticon-cycling"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">Conservation and Education</h4>
                                <p>We believe in the power of education to drive positive change. Our tours include educational activities and workshops focused on environmental conservation, sustainability practices, and cultural awareness. By fostering a deeper understanding of our planet, we aim to inspire travelers to become responsible global citizens.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="flaticon-fishing"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">Responsible Tourism </h4>
                                <p>
                                    We are dedicated to practicing and promoting responsible tourism principles. Our tours prioritize the preservation of local cultures, heritage, and biodiversity. We encourage sustainable transportation options, minimize waste, and support local economies by engaging in fair trade practices.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">Social Impact</h4>
                                <p>At Halisi Africa Discoveries, we are committed to creating a positive social impact. We actively collaborate with local organizations and NGOs to support women's empowerment projects, community development initiatives, and environmental conservation efforts. A portion of our profits is reinvested in these projects to make a lasting difference in the communities we work with.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <!--=== Fancy Icon Box ===-->
                        <div class="fancy-icon-box mb-30 wow fadeInUp">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <h4 class="title">Environmental Stewardship</h4>
                                <p>We recognize the urgent need to protect our planet. Halisi Africa Discoveries takes environmental stewardship seriously by promoting sustainable practices throughout our operations. We minimize single-use plastics, encourage responsible wildlife interactions, and promote environmental education among our clients and partners.

                                    Join us on a journey that empowers women, supports local communities, and helps preserve our planet for future generations. Together, we can make a difference, one sustainable tour at a time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Features Section ======-->

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
@endforeach
@endsection
