@extends('layouts.front')
@section('home')
<body>

<div class="preloader">
<div class="loader-ripple">
<div></div>
<div></div>
</div>
</div>




</header>


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

<!--<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title">Shop Single</h2>
<ul class="breadcrumb-menu">
<li><a href="index-2.html">Home</a></li>
<li class="active">Shop Single</li>
</ul>
</div>
</div>-->

@foreach($data as $info)
<div class="shop-item-single bg py-120">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="item-gallery mb-5">
<div class="flexslider-thumbnails">
<ul class="slides">
<li data-thumb="{{url('assets/img/shop/01.jpg')}}" rel="adjustX:10, adjustY:">
<img src="{{url($info->efoto)}}" alt="#">
</li>
<li data-thumb="{{url('assets/img/shop/02.jpg')}}">
<img src="{{url('assets/img/shop/02.jpg')}}" alt="#">
</li>
<li data-thumb="{{url('assets/img/shop/03.jpg')}}">
<img src="{{url('assets/img/shop/03.jpg')}}" alt="#">
</li>
<li data-thumb="{{url('assets/img/shop/04.jpg')}}">
<img src="{{url('assets/img/shop/04.jpg')}}" alt="#">
</li>
</ul>
</div>
</div>
</div>

<div class="col-lg-6">
    
<div class="single-item-info">
<h4 class="single-item-title">{{$info->cat}}</h4>
<div class="single-item-rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
<i class="far fa-star"></i>
<span class="rating-count"> (4 Customer Reviews)</span>
</div>
<div class="single-item-price">
<h4><del>$690</del><span>$650</span></h4>
</div>

<p class="mb-4">
There are many variations of passages of Lorem Ipsum available, but the majority have
suffered alteration in some form, by injected humour, or randomised words which don't
look even slightly believable.
</p>
<div class="single-item-content">
<h5>Stock: <span>Available</span></h5>
<h5>SKU: <span>676TYWV</span></h5>
</div>
<div class="single-item-action">
<h5 class="title">Quantity:</h5>
<div class="cart-qty">
<button class="minus-btn bg-white"><i class="fal fa-minus"></i></button>
<input class="quantity bg-white" type="text" value="1" disabled>
<button class="plus-btn bg-white"><i class="fal fa-plus"></i></button>
</div>
<div class="item-single-btn-area">
<button class="theme-btn"><span class="far fa-shopping-cart"></span>Add to
cart</button>
<a href="#" class="single-item-btn"><i class="far fa-heart"></i></a>
<a href="#" class="single-item-btn"><i class="far fa-exchange-alt"></i></a>
</div>
</div>
<div class="single-item-content">
<h5>Category: <span>Car Parts</span></h5>
<h5>Tags: <span>Car, Shop, Tire</span></h5>
</div>
<hr>
<div class="single-item-share">
<span>Share:</span>
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>
<a href="#"><i class="fab fa-linkedin-in"></i></a>
<a href="#"><i class="fab fa-pinterest-p"></i></a>
</div>
</div>
</div>
</div>
@endforeach
<div class="single-item-details">
<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<button class="nav-link active" id="nav-tab1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Description</button>
<button class="nav-link" id="nav-tab2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Additional
Info</button>
<button class="nav-link" id="nav-tab3" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Reviews
(05)</button>
</div>
</nav>
<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-tab1">
<div class="single-item-desc">
<p>
There are many variations of passages of Lorem Ipsum available, but the majority
have suffered alteration in some form, by injected humour, or randomised words which
don't look even slightly believable. If you are going to use a passage of Lorem
Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
chunks as necessary, making this the first true generator on the Internet.
</p>
<p>
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
</p>
</div>
</div>
<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-tab2">
<div class="single-additional-info">
<p>
There are many variations of passages of Lorem Ipsum available, but the majority
have suffered alteration in some form, by injected humour, or randomised words which
don't look even slightly believable. If you are going to use a passage of Lorem
Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of
text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
chunks as necessary, making this the first true generator on the Internet.
</p>
<p>
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
</p>
</div>
</div>
<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-tab3">
<div class="single-item-review">
<div class="blog-comments">
<h3>Reviews (05)</h3>
<div class="blog-comments-wrapper">
<div class="blog-comments-single">
<img src="assets/img/blog/com-1.jpg" alt="thumb">
<div class="blog-comments-content">
<h5>Jesse Sinkler</h5>
<span><i class="far fa-clock"></i> 31 Jan, 2023</span>
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
<a href="#"><i class="far fa-reply"></i> Reply</a>
</div>
</div>
<div class="blog-comments-single">
<img src="assets/img/blog/com-2.jpg" alt="thumb">
<div class="blog-comments-content">
<h5>Daniel Wellman</h5>
<span><i class="far fa-clock"></i> 31 Jan, 2023</span>
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
<a href="#"><i class="far fa-reply"></i> Reply</a>
</div>
</div>
<div class="blog-comments-single">
<img src="assets/img/blog/com-3.jpg" alt="thumb">
<div class="blog-comments-content">
<h5>Kenneth Evans</h5>
<span><i class="far fa-clock"></i> 31 Jan, 2023</span>
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
<a href="#"><i class="far fa-reply"></i> Reply</a>
</div>
</div>
</div>
<div class="blog-comments-form bg-white">
<h3>Leave A Review</h3>
<form action="#">
<div class="row">
<div class="col-md-12">
<div class="form-group review-rating">
<label>Your Rating</label>
<div>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
<i class="far fa-star"></i>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name*">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" class="form-control" placeholder="Your Email*">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" rows="5" placeholder="Your Comment*"></textarea>
</div>
<button type="submit" class="theme-btn"><span class="far fa-paper-plane"></span> Submit Review</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="related-item">
<div class="row">
<div class="col-12 mx-auto">
<div class="site-heading">
<h2 class="site-title">Related Items</h2>
</div>
</div>
</div>
<div class="shop-item-wrapper">
<div class="row align-items-center">
<div class="col-md-6 col-lg-3">
<div class="shop-item">
<div class="shop-item-img">
<span class="shop-item-sale">Sale</span>
<img src="assets/img/shop/01.jpg" alt>
<div class="shop-item-meta">
<a href="#"><i class="far fa-heart"></i></a>
<a href="#"><i class="far fa-eye"></i></a>
<a href="#"><i class="far fa-shopping-cart"></i></a>
</div>
</div>
<div class="shop-item-info">
<div class="shop-item-rate">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<a href="#">
<h4 class="shop-item-title">Car Engine Parts</h4>
</a>
<div class="shop-item-price"><del>$560</del> $510</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="shop-item">
<div class="shop-item-img">
<img src="assets/img/shop/03.jpg" alt>
<div class="shop-item-meta">
<a href="#"><i class="far fa-heart"></i></a>
<a href="#"><i class="far fa-eye"></i></a>
<a href="#"><i class="far fa-shopping-cart"></i></a>
</div>
</div>
<div class="shop-item-info">
<div class="shop-item-rate">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<a href="#">
<h4 class="shop-item-title">Car Engine Parts</h4>
</a>
<div class="shop-item-price">$680</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="shop-item">
<div class="shop-item-img">
<img src="assets/img/shop/04.jpg" alt>
<div class="shop-item-meta">
<a href="#"><i class="far fa-heart"></i></a>
<a href="#"><i class="far fa-eye"></i></a>
<a href="#"><i class="far fa-shopping-cart"></i></a>
</div>
</div>
<div class="shop-item-info">
<div class="shop-item-rate">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<a href="#">
<h4 class="shop-item-title">Car Engine Parts</h4>
</a>
<div class="shop-item-price">$710</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="shop-item">
<div class="shop-item-img">
<span class="shop-item-sale">Sale</span>
<img src="assets/img/shop/02.jpg" alt>
<div class="shop-item-meta">
<a href="#"><i class="far fa-heart"></i></a>
<a href="#"><i class="far fa-eye"></i></a>
<a href="#"><i class="far fa-shopping-cart"></i></a>
</div>
</div>
<div class="shop-item-info">
<div class="shop-item-rate">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>
<a href="#">
<h4 class="shop-item-title">Car Engine Parts</h4>
</a>
<div class="shop-item-price"><del>$920</del> $900</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</main>


</body>
@endsection

