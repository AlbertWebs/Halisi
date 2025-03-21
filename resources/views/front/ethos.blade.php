<?php
    $About = DB::table('about')->get()

?>
<style>
   .ethos h2 {
  text-decoration: line-through;
}

</style>
@foreach ($About as $about)
<section class="we-section pt-100 pb-50">
    <div class="container">
        <div class="row align-items-xl-center">
         
           <div class="col-xl-5 order-2 order-xl-1">
             
           <p class="mb-3">Join us on a journey of discovery where adventure and purpose converge. With Halisi Africa Discoveries, your African adventure becomes a force for good, leaving a lasting positive legacy on the very place you explore. 
           Let us be your guide as you experience the magic of Africa, one transformative journey at a time.</p>
                <!--=== We Image Box ===-->
                <div class="we-two_image-box mb-20">
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <!--=== We Image ===-->
                            <div class="we-image mb-30">
                                <img src="{{url('/')}}/uploads/images/green-1968581_1280.png" alt="we Image">
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                           
                            <div class="we-image mb-30">
                                <img src="{{url('/')}}/uploads/destinations/hot-air-balloon-safari-masai-mara-kenya-small.jpg" alt="we Image">
                            </div>
                        </div>
                        <div class="col-md-12">
                            
                            <div class="we-image mb-30 pr-lg-30 text-md-end">
                                <img src="{{url('/')}}/uploads/destinations/Amboseli-National-park-weather.jpg" alt="we Image">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-7 order-1 order-xl-2">
                <!--=== We Content Box ===-->
                <div class="we-content-box pl-lg-50 mb-10">
                    <!--=== Section Title ===-->
                    <div class="section-title mb-30 ethos">
                        {{-- <span class="sub-title">Ethos</span> --}}
                       <h2>Ethos</h2>
                    </div>
                    <span class="sub-title mb-3">Our Commitment: The 5 Pillars of Halisi Africa Discoveries</span>
                   
                    <!--=== Features List ===-->
                    <div class="features-list_one">
                        <!--=== Single Features List ===-->
                        <div class="single-features-list mb-40">
                            <div class="icon-inner d-flex align-items-center">
                                <div class="icon-check">
                                    <i class="fas fa-badge-check"></i>
                                </div>
                                <div class="icon">
                                   <i class="fa fa-arrow-down"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Conservation</h4>
                                <p>
                                   We act as stewards of Africa's rich biodiversity and landscapes. Our active support for conservation efforts ensures these  resources endure for future generations.
                                </p>
                            </div>
                        </div>
                        <!--=== Single Features List ===-->
                        <div class="single-features-list mb-40">
                            <div class="icon-inner d-flex align-items-center">
                                <div class="icon-check">
                                    <i class="fas fa-badge-check"></i>
                                </div>
                                <div class="icon">
                                    <i class="flaticon-growth" width="30"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Community</h4>
                                <p>
                                    Responsible travel, when approached thoughtfully, can be a powerful tool for positive social impact. We collaborate with local communities, guaranteeing they directly benefit from tourism initiatives.
                                </p>
                            </div>
                        </div>
                        <!--=== Single Features List ===-->
                        <div class="single-features-list mb-40">
                            <div class="icon-inner d-flex align-items-center">
                                <div class="icon-check">
                                    <i class="fas fa-badge-check"></i>
                                </div>
                                <div class="icon">
                                    <i class="flaticon-growth"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Cultural Preservation</h4>
                                <p>
                                   Africa boasts a rich heritage, brimming with traditions and knowledge systems. We celebrate this legacy, fostering authentic connections and immersive cultural experiences for our travelers.
                                </p>
                            </div>
                        </div>
                        <!--=== Single Features List ===-->
                        <div class="single-features-list mb-40">
                            <div class="icon-inner d-flex align-items-center">
                                <div class="icon-check">
                                    <i class="fas fa-badge-check"></i>
                                </div>
                                <div class="icon">
                                    <i class="flaticon-growth"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Climate Action</h4>
                                <p>
                                    We acknowledge the profound impact of climate change on Africa's future. We champion sustainable practices and advocate for responsible tourism that contributes to a greener future for all.
                                </p>
                            </div>
                        </div>
                        <!--=== Single Features List ===-->
                        <div class="single-features-list mb-40">
                            <div class="icon-inner d-flex align-items-center">
                                <div class="icon-check">
                                    <i class="fas fa-badge-check"></i>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30">
                                    
                                    <path fill="#63ab45" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256-96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
                                </div>
                            </div>
                            <div class="content">
                                <h4>Changemakers</h4>
                                <p>
                                    We champion the empowerment of women within African communities. We actively support initiatives that promote gender equality and leadership, fostering positive change at the grassroots level.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!--====== End What We Section ======-->
@endforeach
