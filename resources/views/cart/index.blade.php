@extends('layouts.app2')
@section('content')
			
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Cart</a></li>
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
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							@foreach($cartItems as $cartItem)
							<tr>
								<td class="image" data-title="No"><img src="{{url('/uploads/product/'.$cartItem->associatedModel->product_image)}}" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">{{$cartItem->name}}</a></p>
									
								</td>
								<td class="price" data-title="Price"><span>BDT {{$cartItem->price}} </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										
										<form action="{{route('cartupdate',$cartItem->id)}}">

					<input type="number" value="{{$cartItem->quantity}}" name="quantity">
					<input type="submit" value="save">
					
				</form>

										
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>{{Cart::session(auth()->user()->id)->get($cartItem->id)->getpricesum()}}</span></td>
								<td class="action" data-title="Remove"><a href="{{route('cartdelete',$cartItem->id)}}"><i class="ti-trash remove-icon"></i></a></td>
							</tr>

							@endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="{{route('cart.coupon')}}"  method="get">
											<input name="coupon" placeholder="Enter Your Coupon">
											<button type="submit" class="btn">Apply</button>
										</form>
									</div>
									
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>BDT {{\Cart::session(auth()->user()->id)->getTotal()}}/=</span></li>
										<li>Shipping<span>Free</span></li>
										<li>You Save<span>BDT 0.00</span></li>
										<li class="last">You Pay<span>BDT {{\Cart::session(auth()->user()->id)->getTotal()}}/=</span></li>
									</ul>
									<div class="button5">
										<a href="{{route('checkout')}}" class="btn">Checkout</a>
										
										
										
										<a href="{{route('home')}}" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
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
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
				
	
	<!-- Start Footer Area -->
@endsection