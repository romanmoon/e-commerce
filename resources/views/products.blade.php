@extends('layouts.app2')
@section('content')



<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
@if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
<!-- Shopping Cart -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Men's Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->

                    @foreach($mproducts as $mproduct)

                    <div class="single-product">
                        <div class="product-img">
                            <a href="">
                                <img class="default-img" src="{{url('/uploads/product/'.$mproduct->product_image)}}" alt="#">
                                <img class="hover-img" src="{{url('/uploads/product/'.$mproduct->product_image)}}" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>

                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="{{route('addcart',$mproduct->id)}}">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{route('single_product',$mproduct->id)}}">{{$mproduct->name}}</a></h3>
                            <div class="product-price">
                                <span>{{$mproduct->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->

<!-- Shopping Cart -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Women's Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->

                    @foreach($wproducts as $wproduct)

                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{url('/uploads/product/'.$wproduct->product_image)}}" alt="#">
                                <img class="hover-img" src="{{url('/uploads/product/'.$wproduct->product_image)}}" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>

                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="{{route('addcart',$wproduct->id)}}">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{route('single_product',$wproduct->id)}}">{{$wproduct->name}}</a></h3>
                            <div class="product-price">
                                <span>{{$wproduct->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->

<!-- Shopping Cart -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Kid's Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->

                    @foreach($kproducts as $kproduct)

                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{url('/uploads/product/'.$kproduct->product_image)}}" alt="#">
                                <img class="hover-img" src="{{url('/uploads/product/'.$kproduct->product_image)}}" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>

                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="{{route('addcart',$kproduct->id)}}">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{route('single_product',$kproduct->id)}}">{{$kproduct->name}}</a></h3>
                            <div class="product-price">
                                <span>{{$kproduct->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->

<!-- Shopping Cart -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Accessories Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    <!-- Start Single Product -->

                    @foreach($eproducts as $eproduct)

                    <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="{{url('/uploads/product/'.$eproduct->product_image)}}" alt="#">
                                <img class="hover-img" src="{{url('/uploads/product/'.$eproduct->product_image)}}" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>

                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="{{route('addcart',$eproduct->id)}}">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{route('single_product',$eproduct->id)}}">{{$eproduct->name}}</a></h3>
                            <div class="product-price">
                                <span>{{$eproduct->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->



<!-- Start Shop Services Area  -->
<section class="shop-services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->




<!-- Start Footer Area -->
@endsection