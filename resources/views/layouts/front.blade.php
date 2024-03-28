<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/motex/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Nov 2023 07:06:23 GMT -->

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content>
<meta name="keywords" content>

<title>Motex - Car Dealer And Automotive HTML5 Template</title>

<link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">



<link rel="stylesheet" href="{{url('elan2/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/all-fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/nice-select.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/style.css')}}">

<link rel="stylesheet" href="{{url('elan2/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/all-fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{url('elan2/assets/css/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/nice-select.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/flex-slider.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">


<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/all-fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/magnific-popup.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/nice-select.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<body>

<div class="preloader">
<div class="loader-ripple">
<div></div>
<div></div>
</div>
</div>
<header class="header">

<div class="header-top">
<div class="container">
<div class="header-top-wrapper">
<div class="header-top-left">
<div class="header-top-contact">

</div>
</div>
<div class="header-top-right">


</div>
</div>
</div>
</div>
<div class="main-navigation">
<nav class="navbar navbar-expand-lg">
<div class="container position-relative">
<a class="navbar-brand" href="index-2.html">
<img src="/assets/img/logo/logo.png" alt="logo">
</a>

<div class="collapse navbar-collapse" id="main_nav">

<ul class="navbar-nav">

@foreach($categories as $cat)

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">{{$cat->cat}}</a>

@php
$alts = App\Models\Category::where('maincat',$cat->id)->get();

 @endphp

 <ul class="dropdown-menu fade-down">
 @foreach($alts as $altcat)
<li><a class="dropdown-item" href="{{route('category',$altcat->id)}}">{{$altcat->cat}}</a></li>
@endforeach

</ul>
</li>
@endforeach
<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Inventory</a>
<ul class="dropdown-menu fade-down">
<li><a class="dropdown-item" href="inventory-grid.html">Inventory Grid</a></li>
<li><a class="dropdown-item" href="inventory-list.html">Inventory List</a></li>
<li><a class="dropdown-item" href="inventory-single.html">Inventory Single</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
<ul class="dropdown-menu fade-down">
<li><a class="dropdown-item" href="about.html">About Us</a></li>
<li class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="#">Car Listing</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="listing-grid.html">Listing Grid</a></li>
<li><a class="dropdown-item" href="listing-list.html">Listing List</a></li>
<li><a class="dropdown-item" href="listing-single.html">Listing Single</a>
<li><a class="dropdown-item" href="compare.html">Compare</a></li>
</ul>
</li>
<li class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="#">My Account</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
<li><a class="dropdown-item" href="profile.html">My Profile</a></li>
<li><a class="dropdown-item" href="profile-listing.html">My Listing</a></li>
<li><a class="dropdown-item" href="add-listing.html">Add Listing</a></li>
<li><a class="dropdown-item" href="profile-favorite.html">My Favorites</a>
</li>
<li><a class="dropdown-item" href="profile-message.html">Messages</a></li>
<li><a class="dropdown-item" href="profile-setting.html">Settings</a></li>
</ul>
</li>

<li class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="#">Services</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="service.html">Services</a></li>
<li><a class="dropdown-item" href="service-single.html">Service Single</a>
</li>
</ul>
</li>
<li class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="#">Dealer</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="dealer.html">Dealer</a></li>
<li><a class="dropdown-item" href="dealer-single.html">Dealer Single</a>
</li>
</ul>
</li>
<li class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="#">Extra Pages</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="404.html">404 Error</a></li>
<li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
<li><a class="dropdown-item" href="terms.html">Terms Of Service</a></li>
<li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
</ul>
</li>
<li><a class="dropdown-item" href="team.html">Our Team</a></li>
<li><a class="dropdown-item" href="pricing.html">Pricing Plan</a></li>
<li><a class="dropdown-item" href="calculator.html">Calculator</a></li>
<li><a class="dropdown-item" href="faq.html">Faq</a></li>
<li><a class="dropdown-item" href="testimonial.html">Testimonials</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
<ul class="dropdown-menu fade-down">
<li><a class="dropdown-item" href="shop.html">Shop</a></li>
<li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
<li><a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a></li>
<li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
<ul class="dropdown-menu fade-down">
<li><a class="dropdown-item" href="blog.html">Blog</a></li>
<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
</ul>
</li>
<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
</ul>



</div>
</div>




</header>
@yield('home')

<footer class="footer-area">
<div class="footer-widget">
<div class="container">
<div class="row footer-widget-wrapper pt-100 pb-70">
<div class="col-md-6 col-lg-4">
<div class="footer-widget-box about-us">
<a href="#" class="footer-logo">
<img src="assets/img/logo/logo-light.png" alt>
</a>
<p class="mb-3">
We are many variations of passages available but the majority have suffered alteration
in some form by injected humour words believable.
</p>
<ul class="footer-contact">
<li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
<li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
<li><a href="https://live.themewild.com/cdn-cgi/l/email-protection#88e1e6eee7c8edf0e9e5f8e4eda6ebe7e5"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="41282f272e012439202c312d246f222e2c">[email&#160;protected]</span></a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Quick Links</h4>
<ul class="footer-list">
<li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Update News</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Testimonials</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Our Dealers</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Support Center</h4>
<ul class="footer-list">
<li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Affiliates</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Booking Tips</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Sell Vehicles</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
<li><a href="#"><i class="fas fa-caret-right"></i> Sitemap</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="footer-widget-box list">
<h4 class="footer-widget-title">Newsletter</h4>
<div class="footer-newsletter">
<p>Subscribe Our Newsletter To Get Latest Update And News</p>
<div class="subscribe-form">
<form action="#">
<input type="email" class="form-control" placeholder="Your Email">
<button class="theme-btn" type="submit">
Subscribe Now <i class="far fa-paper-plane"></i>
</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-md-6 align-self-center">
<p class="copyright-text">
&copy; Copyright <span id="date"></span> <a href="#"> MOTEX </a> All Rights Reserved.
</p>
</div>
<div class="col-md-6 align-self-center">
<ul class="footer-social">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<li><a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>


<a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>




<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('assets/js/modernizr.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{url('assets/js/jquery.appear.min.js')}}"></script>
<script src="{{url('assets/js/jquery.easing.min.js')}}"></script>
<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{url('assets/js/counter-up.js')}}"></script>
<script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{url('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{url('assets/js/wow.min.js')}}"></script>
<script src="{{url('assets/js/flex-slider.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from live.themewild.com/motex/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Nov 2023 07:06:57 GMT -->
</html>