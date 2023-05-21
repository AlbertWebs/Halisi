@extends('front.master')

@section('content')
<section class="page-banner overlay pt-170 pb-170 bg_cover" style="background-image: url({{asset('theme/assets/images/bg/page-bg.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">Our Products</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Merchandise</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->
<br><br>


<section class="products-section pt-100 pb-90">
    <div class="container">
        <!--====== Products Filter ======-->
        <div class="page-item-filter mb-40 wow fadeInUp">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <!--====== Show Text ======-->
                    <div class="show-text mb-20">
                        <h6>Showing Results 09 Of 55</h6>
                    </div>
                </div>
                <div class="col-md-5">
                    <!--====== Product Dropdown ======-->
                    <div class="product-dropdown float-md-end">
                        <span class="title">Sort By</span>
                        <select class="wide">
                            <option data-display="Default">Default</option>
                            <option value="01">Best Products</option>
                            <option value="02">Highest Price</option>
                            <option value="03">Lowest Price</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-1.jpg')}}" alt="Product Image">
                        <div class="tag">
                            <span class="off">10% OFF</span>
                        </div>
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Leather Heels Shoe</a></h4>
                            <span class="price"><span class="prev-price"><span class="currency">$</span>28.00</span><span class="currency">$</span>25.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-2.jpg')}}" alt="Product Image">
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Womens Stylish Bag</a></h4>
                            <span class="price"><span class="currency">$</span>14.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-3.jpg')}}" alt="Product Image">
                        <div class="tag">
                            <span class="feat">Features</span>
                            <span class="off">10% OFF</span>
                        </div>
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Smart Watch Black</a></h4>
                            <span class="price"><span class="prev-price"><span class="currency">$</span>28.00</span><span class="currency">$</span>25.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-4.jpg')}}" alt="Product Image">
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Brown Leather Belt</a></h4>
                            <span class="price"><span class="currency">$</span>19.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-5.jpg')}}" alt="Product Image">
                        <div class="tag">
                            <span class="off">10% OFF</span>
                        </div>
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Green Front Sweater</a></h4>
                            <span class="price"><span class="prev-price"><span class="currency">$</span>28.00</span><span class="currency">$</span>25.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-6.jpg')}}" alt="Product Image">
                        <div class="tag">
                            <span class="off">10% OFF</span>
                        </div>
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Black Summer T-shirt</a></h4>
                            <span class="price"><span class="prev-price"><span class="currency">$</span>28.00</span><span class="currency">$</span>25.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-8.jpg')}}" alt="Product Image">
                        <div class="tag">
                            <span class="best">Best Saller</span>
                        </div>
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Handbag Leather</a></h4>
                            <span class="price"><span class="currency">$</span>05.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-7.jpg')}}" alt="Product Image">
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Cotton Shirt Classic</a></h4>
                            <span class="price"><span class="currency">$</span>25.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-9.jpg')}}" alt="Product Image">
                        <div class="tag">
                            <span class="off">10% OFF</span>
                        </div>
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Red Cap Protection</a></h4>
                            <span class="price"><span class="prev-price"><span class="currency">$</span>28.00</span><span class="currency">$</span>25.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-10.jpg')}}" alt="Product Image">
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">High Heel Shoes</a></h4>
                            <span class="price"><span class="currency">$</span>25.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-11.jpg')}}" alt="Product Image">
                        <div class="tag">
                            <span class="off">10% OFF</span>
                        </div>
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Classic Tan Felt Hat</a></h4>
                            <span class="price"><span class="prev-price"><span class="currency">$</span>28.00</span><span class="currency">$</span>25.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <!--=== Single Product Item ===-->
                <div class="single-product-item mb-50 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/shop/product-12.jpg')}}" alt="Product Image">
                        <div class="content-hover">
                            <a href="#" class="main-btn primary-btn">Add To Cart <i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h4 class="title"><a href="products-details.html">Red Stylish Ladies Bag</a></h4>
                            <span class="price"><span class="currency">$</span>23.00</span>
                        </div>
                        <ul class="ratings">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="gowilds-pagination wow fadeInUp text-center">
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
</section><!--====== End Products Section ======-->

@include('front.instagram')
<!--====== End Gallery Section ======-->
@endsection
