@extends('layouts.front')
@section('home')
<body>

<div class="preloader">
<div class="loader-ripple">
<div></div>
<div></div>
</div>
</div>





<div class="sidebar-popup">
<div class="sidebar-wrapper">
<div class="sidebar-content">
<button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
<div class="sidebar-logo">
<img src="{{url('assets/img/logo/logo.png')}}" alt>
</div>
<div class="sidebar-about">
<h4>About Us</h4>
<p>There are many variations of passages available sure there majority have suffered alteration in
some form by injected humour or randomised words which don't look even slightly believable.</p>
</div>
<div class="sidebar-contact">
<h4>Contact Info</h4>
<ul>
<li>
<h6>Email</h6>
<a href="https://live.themewild.com/cdn-cgi/l/email-protection#167f78707956736e777b667a733875797b"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="fc95929a93bc99849d918c9099d29f9391">[email&#160;protected]</span></a>
</li>
<li>
<h6>Phone</h6>
<a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a>
</li>
<li>
<h6>Address</h6>
<a href="#"><i class="far fa-location-dot"></i>25/B Milford Road, New York</a>
</li>
</ul>
</div>
<div class="sidebar-social">
<h4>Follow Us</h4>
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin"></i></a>
</div>
</div>
</div>
</div>

<main class="main">

<div class="hero-section">
<div class="hero-slider owl-carousel owl-theme">
<div class="hero-single" style="background: url(assets/img/slider/slider-1.jpg)">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12 col-lg-6">
<div class="hero-content">
<h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
Motex!</h6>
<h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
Best Way To Find Your <span>Dream</span> Car
</h1>
<p data-animation="fadeInLeft" data-delay=".75s">
There are many variations of passages orem psum available but the majority have
suffered alteration in some form by injected humour.
</p>
<div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
<a href="#" class="theme-btn">About More<i class="fas fa-arrow-right-long"></i></a>
<a href="#" class="theme-btn theme-btn2">Learn More<i class="fas fa-arrow-right-long"></i></a>
</div>
</div>
</div>
<div class="col-md-12 col-lg-6">
<div class="hero-right">
<div class="hero-img">
<img src="assets/img/slider/hero-1.png" alt data-animation="fadeInRight" data-delay=".25s">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="hero-single" style="background: url(assets/img/slider/slider-2.jpg)">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12 col-lg-6">
<div class="hero-content">
<h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
Motex!</h6>
<h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
Best Way To Find Your <span>Dream</span> Car
</h1>
<p data-animation="fadeInLeft" data-delay=".75s">
There are many variations of passages orem psum available but the majority have
suffered alteration in some form by injected humour.
</p>
<div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
<a href="#" class="theme-btn">About More<i class="fas fa-arrow-right-long"></i></a>
<a href="#" class="theme-btn theme-btn2">Learn More<i class="fas fa-arrow-right-long"></i></a>
</div>
</div>
</div>
<div class="col-md-12 col-lg-6">
<div class="hero-right">
<div class="hero-img">
<img src="assets/img/slider/hero-2.png" alt data-animation="fadeInRight" data-delay=".25s">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="hero-single" style="background: url(assets/img/slider/slider-3.jpg)">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12 col-lg-6">
<div class="hero-content">
<h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
Motex!</h6>
<h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
Best Way To Find Your <span>Dream</span> Car
</h1>
<p data-animation="fadeInLeft" data-delay=".75s">
There are many variations of passages orem psum available but the majority have
suffered alteration in some form by injected humour.
</p>
<div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
<a href="#" class="theme-btn">About More<i class="fas fa-arrow-right-long"></i></a>
<a href="#" class="theme-btn theme-btn2">Learn More<i class="fas fa-arrow-right-long"></i></a>
</div>
</div>
</div>
<div class="col-md-12 col-lg-6">
<div class="hero-right">
<div class="hero-img">
<img src="assets/img/slider/hero-4.png" alt data-animation="fadeInRight" data-delay=".25s">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="car-category py-120">
<div class="container">
<!--<div class="row">
<div class="col-lg-6 mx-auto">
<div class="site-heading text-center">
<span class="site-title-tagline"><i class="flaticon-drive"></i> Car Category</span>
<h2 class="site-title">Car By Body <span>Types</span></h2>
<div class="heading-divider"></div>
</div>-->
</div>
</div>

<div class="row">
 
@foreach($categories as $info)
<div class="col-6 col-md-4 col-lg-2"> 
<a href="" class="category-item wow fadeInUp" data-wow-delay=".25s">
<div class="category-img">
<img style="width:120px; height:130px;"  src="{{url($info->image)}}" alt>
</div>
<h5>{{$info->cat}}</h5>
</a>
</div>
@endforeach


</div>
</div>
</div>

<div class="car-area bg py-120">
<div class="container">
<!--<div class="row">
<div class="col-lg-6 mx-auto">
<div class="site-heading text-center">
<span class="site-title-tagline"><i class="flaticon-drive"></i> New Arrivals</span>
<h2 class="site-title">Let's Check Latest <span>Cars</span></h2>
<div class="heading-divider"></div>
</div>-->
</div>
</div>
<div class="row">


    @foreach($data as $info)
<div class="col-md-6 col-lg-4 col-xl-3">
<div class="car-item wow fadeInUp" data-wow-delay=".50s">
<div class="car-img">
<img style="width:320px; height:230px;" src="{{url($info->efoto)}}" alt>
<div class="car-btns">
<a href="#"><i class="far fa-heart"></i></a>
<a href="#"><i class="far fa-arrows-repeat"></i></a>
</div>
</div>
<div class="car-content">
<div class="car-top">
<h4><a href="#">{{$info->cat}}</a></h4>
<div class="car-rate">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>{{$info->city}}</span>
</div>
</div>
<ul class="car-list" style="height:130px;">
<li><i class="far fa-steering-wheel"></i>{{$info->title}}</li><br>
<li><i class="far fa-road"></i>{{$info->eabout}}</li>
<!--<li><i class="far fa-car"></i>Model: 2023</li>
<li><i class="far fa-gas-pump"></i>Hybrid</li>-->
</ul>
<div class="car-footer">
<span class="car-price">$90,250</span>
<a href="{{route('single',$info->eid)}}" class="theme-btn"><span class="far fa-eye"></span>Details</a>

</div>

</div>
</div>

</div>
@endforeach

</div>
</div>
</div>
</div>
<!--<div class="text-center mt-4">
<a href="#" class="theme-btn">Load More <i class="far fa-arrow-rotate-right"></i> </a>
</div>-->
</div>
</div>
</body>
@endsection
