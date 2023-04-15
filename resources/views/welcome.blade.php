@extends('layouts.app')
@section('content')

    <center>
        @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    </center>
    <!-- Slider Area -->
    <section class="hero-slider" >
        <!-- Single Slider -->
        <div class="single-slider" >

            <div class="container" style="background-image: url('imgs/banner.png');">
          
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text">
                                        <h1>Shirt For Man</h1>
                                        <div class="button">
                                            <a href="{{route('products')}}" class="btn">Shop Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->
    
    <!-- Start Small Banner  -->
    <section class="small-banner section">
        <div class="container-fluid">
            <div class="row">
                <!-- Single Banner  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="/imgs/mensummer-1.webp" alt="#">
                        <div class="content">
                            <p>Man's Collectons</p>
                            <h3>Summer travel <br> collection</h3>
                            <a href="{{route('mancollection')}}">Discover Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                
                 <!-- Single Banner  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="/imgs/bagcollection-1.WEBP" alt="#">
                        <div class="content">
                            <p>Bag Collectons</p>
                            <h3>Awesome Bag <br> 2021</h3>
                            <a href="{{route('bagcollection')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="imgs/kidscollection-1.jpg" alt="#">
                        <div class="content">
                            <p>Kid's Collectons</p>
                            <h3>Awesome Toy and Cloths <br> 2021</h3>
                            <a href="{{route('kidcollection')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
            </div>
        </div>
    </section>
    <!-- End Small Banner -->
    
    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
         <div class="row">
          <div class="col-12">
           <div class="section-title">
            <h2>Trending Item</h2>
           </div>
          </div>
         </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                                <!-- Tab Nav -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man
                                </a>
                            </li>
                             <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
                                </ul>
                                <!--/ End Tab Nav -->
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <!-- Start Single Tab -->
        <div class="tab-pane fade show active" id="man" role="tabpanel">
            <div class="tab-single">
                <div class="row">
                    @php

                use\App\Models\Product;
                use\App\User;

                $products=Product::orderBy('id','DESC')->where('for_whom',"man")->paginate(10);
                @endphp
                @foreach($products as $product)

                  <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('single_product',$product->id)}}">
                                    <img class="default-img"  src="{{url('/uploads/product/'.$product->product_image)}}" height="10" alt="#">
                                        <img class="hover-img" src="{{url('/uploads/product/'.$product->product_image)}}" alt="#">
                                </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="{{route('addcart',$product->id)}}">Add to cart</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('single_product',$product->id)}}">{{$product->name}}</a></h3>
                                <div class="product-price">
                                    <span>{{$product->price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                

                </div>
            </div>
        </div>
 <!-- For Women -->
                        <!--/ End Single Tab -->
                                
    <div class="tab-pane fade" id="women" role="tabpanel">
        <div class="tab-single">
            <div class="row">

                @php
                

                 $wproducts=Product::orderBy('id','DESC')->where('for_whom',"women")->paginate(10);
                @endphp
                @foreach($wproducts as $wproduct)

                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('single_product',$wproduct->id)}}">
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
                    </div>
@endforeach
</div>
</div>
</div>


                                <!--/ End Single Tab -->
                                <!-- Start Single Tab -->
        <div class="tab-pane fade" id="kids" role="tabpanel">
            <div class="tab-single">
                <div class="row">
                                        
                @php
                

                 $kproducts=Product::orderBy('id','DESC')->where('for_whom',"kid")->paginate(10);
                @endphp
                @foreach($kproducts as $kproduct)

                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('single_product',$kproduct->id)}}">
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
                    </div>
                @endforeach
                </div>
            </div>
        </div>
                                <!--/ End Single Tab -->
                                <!-- Start Single Tab -->
                                <div class="tab-pane fade" id="accessories" role="tabpanel">
                                    <div class="tab-single">
                                        <div class="row">
                                             @php
                

                 $eproducts=Product::orderBy('id','DESC')->where('for_whom',"accessories")->paginate(10);
                @endphp
                @foreach($eproducts as $eproduct)

                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('single_product',$eproduct->id)}}">
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
                    </div>
                @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                                <!-- Start Single Tab -->
                                <div class="tab-pane fade" id="essential" role="tabpanel">
                                    <div class="tab-single">
                                        <div class="row">
                                             @php
                

                 $esproducts=Product::orderBy('id','DESC')->where('for_whom',"essential")->paginate(10);
                @endphp
                @foreach($esproducts as $esproduct)

                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('single_product',$esproduct->id)}}">
                                    <img class="default-img" src="{{url('/uploads/product/'.$esproduct->product_image)}}" alt="#">
                                        <img class="hover-img" src="{{url('/uploads/product/'.$esproduct->product_image)}}" alt="#">
                                </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="{{route('addcart',$esproduct->id)}}">Add to cart</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('single_product',$esproduct->id)}}">{{$esproduct->name}}</a></h3>
                                <div class="product-price">
                                    <span>{{$esproduct->price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
                                <!--/ End Single Tab -->
                                
    </div>
</div>
</div>
</div>
</div>
</div>
    <!-- End Product Area -->
    
    <!-- Start Midium Banner  -->
    <section class="midium-banner">
        <div class="container">
            <div class="row">
                <!-- Single Banner  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="imgs/menscollection.PNG" alt="#">
                        <div class="content">
                            <p>Man's Collectons</p>
                            <h3>Man's items <br>Up to<span> 50%</span></h3>
                            <a href="{{route('mancollection')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
                <!-- Single Banner  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner">
                        <img src="imgs/womenscollection.JPG" alt="#">
                        <div class="content">
                            <p>Women Collection</p>
                            <h3>mid season <br> up to <span>70%</span></h3>
                            <a href="{{route('womancollection')}}" class="btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- /End Single Banner  -->
            </div>
        </div>
    </section>
    <!-- End Midium Banner -->
    
    <!-- Start Most Popular -->
    <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Hot Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->

                @php
                 $products=Product::orderBy('id','DESC')->paginate(10);
                @endphp
                @foreach($products as $product)
                        
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('single_product',$product->id)}}">
                                    <img class="default-img" src="{{url('/uploads/product/'.$product->product_image)}}" alt="#">
                                    <img class="hover-img" src="{{url('/uploads/product/'.$product->product_image)}}" alt="#">
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="{{route('addcart',$product->id)}}">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('single_product',$product->id)}}">{{$product->name}}</a></h3>
                                <div class="product-price">
                                    <span>{{$product->price}}</span>
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
    <!-- End Most Popular Area -->

    
    <!-- Start Shop Home List  -->
    <section class="shop-home-list section">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Latest Product</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single List  -->
                    @php
                 $products=Product::orderBy('id','DESC')->paginate(4);
                @endphp
                @foreach($products as $product)
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="{{url('/uploads/product/'.$product->product_image)}}" alt="#">
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h5 class="title"><a href="{{route('single_product',$product->id)}}">{{$product->name}}</a></h5>
                                    <p class="price with-discount">{{$product->price}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single List  -->
                    @endforeach
                    <!-- End Single List  -->
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Shop Home List  -->
    
    <!-- Start Shop Blog  -->
   
    <!-- End Shop Blog  -->
    
    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
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
    <!-- End Shop Services Area -->
    
   
    @endsection
    