@extends('layouts.front')

@section('home')
<main class="main">
 


<div class="car-area grid bg py-120">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="car-sidebar">
<div class="car-widget">
<div class="car-search-form">
<h4 class="car-widget-title">Search</h4>
<form action="#">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search">
<button type="search"><i class="far fa-search"></i></button>
</div>
</form>
</div>
</div>
<div class="car-widget">
<h4 class="car-widget-title">Brands</h4>
<ul>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="brand">
<label class="form-check-label" for="brand"> All Brands</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="brand1">
<label class="form-check-label" for="brand1"> BMW</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" checked type="checkbox" id="brand2">
<label class="form-check-label" for="brand2"> Toyota</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="brand3">
<label class="form-check-label" for="brand3"> Ferrari</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" checked type="checkbox" id="brand4">
<label class="form-check-label" for="brand4"> Audi</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="brand5">
<label class="form-check-label" for="brand5"> Tesla</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="brand6">
<label class="form-check-label" for="brand6"> Mercedes</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="brand7">
<label class="form-check-label" for="brand7"> Hyundai</label>
</div>
</li>
</ul>
</div>
<div class="car-widget">
<h4 class="car-widget-title">Price Range</h4>
<div class="price-range-box">
<div class="price-range-input">
<input type="text" id="price-amount" readonly>
</div>
<div class="price-range"></div>
</div>
</div>
<div class="car-widget">
<h4 class="car-widget-title">Transmission</h4>
<ul>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="tran1">
<label class="form-check-label" for="tran1"> Automatic</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" checked type="checkbox" id="tran2">
<label class="form-check-label" for="tran2"> Manual</label>
</div>
</li>
</ul>
</div>
<div class="car-widget">
<h4 class="car-widget-title">Fuel Type</h4>
<ul>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="fuel1">
<label class="form-check-label" for="fuel1"> Gas</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" checked type="checkbox" id="fuel2">
<label class="form-check-label" for="fuel2"> Hybrid</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="fuel3">
<label class="form-check-label" for="fuel3"> Diesel</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="fuel4">
<label class="form-check-label" for="fuel4"> Eletric</label>
</div>
</li>
</ul>
</div>
<div class="car-widget">
<h4 class="car-widget-title">Features</h4>
<ul>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="feature1">
<label class="form-check-label" for="feature1"> Airbag - Driver</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" checked type="checkbox" id="feature2">
<label class="form-check-label" for="feature2"> Airbag - Passenger</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="feature3">
<label class="form-check-label" for="feature3"> Alloy Wheels</label>
</div>
</li>
<li>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="feature4">
<label class="form-check-label" for="feature4"> Anti-lock Braking System</label>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="col-md-12">
<div class="car-sort">
<h6>Showing 1-10 of 50 Results</h6>
<div class="car-sort-list-grid">
<a class="car-sort-grid active" href="listing-grid.html"><i class="far fa-grid-2"></i></a>
<a class="car-sort-list" href="listing-list.html"><i class="far fa-list-ul"></i></a>
</div>
<div class="col-md-3 car-sort-box">
<select class="select">
<option value="1">Sort By Default</option>
<option value="5">Sort By Featured</option>
<option value="2">Sort By Latest</option>
<option value="3">Sort By Low Price</option>
<option value="4">Sort By High Price</option>
</select>
</div>
</div>
</div>
   
<div class="row">
 @foreach($data as $info)

<div class="col-md-6 col-lg-4">
<div class="car-item">
<div class="car-img">
<img src="{{url($info->efoto)}}" style="width:200px; height:320px;" alt>
<div class="car-btns">
<a href="#"><i class="far fa-heart"></i></a>
<a href="#"><i class="far fa-arrows-repeat"></i></a>
</div>
</div>
<div class="car-content">
<div class="car-top">
<h4><a href="">{{$info->cat}}</a></h4>
<div class="car-rate">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<span>5.0 (58.5k Review)</span>
</div>
</div>
<ul class="car-list">
<li><i class="far fa-steering-wheel"></i>{{$info->title}}</li>
<li><i class="far fa-road"></i>{{$info->haqqinda}}</li>
<li><i class="far fa-car"></i>Model: 2023</li>
<li><i class="far fa-gas-pump"></i>Hybrid</li>
</ul>
<div class="car-footer">
<span class="car-price">$22,620</span>
<a href="{{route('single',$info->eid)}}" class="theme-btn"><span class="far fa-eye"></span>Details</a>
</div>
</div>
</div>
</div>
@endforeach
</div>



<div class="pagination-area">
<div aria-label="Page navigation example">
<ul class="pagination">
<li class="page-item">
<a class="page-link" href="#" aria-label="Previous">
<span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
</a>
</li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
</a>
</li>
</ul>
</div>
</div>

</div>
</div>
</div>
</div>

</main>

@endsection