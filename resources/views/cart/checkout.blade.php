@extends('layouts.app2')
@section('content')


		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="#">Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Make Your Checkout Here</h2>
							<p>Please register in order to checkout more quickly</p>
							<!-- Form -->
							<form class="form" method="post" action="{{route('orders.store')}}">
								@csrf
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Full Name<span>*</span></label>
											<input type="text" name="fullname" value="{{auth()->user()->name}}" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>State<span>*</span></label>
											<input type="string" name="state" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>City<span>*</span></label>
											<input type="text" name="city" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Zip<span>*</span></label>
											<input type="number" name="zip" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Full Address<span>*</span></label>
											<input type="string" name="fulladdress" required>	
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Phone<span>*</span></label>
											<input type="string" name="phone"required>
										</div>
									</div>
									
								</div>
							
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>CART  TOTALS</h2>
								<div class="content">
									<ul>
										<li>Sub Total<span>BDT {{\Cart::session(auth()->user()->id)->getTotal()}}/=</span></li>
										<li>(+) Shipping<span>BDT 00.00</span></li>
										<li class="last">Total<span>BDT {{\Cart::session(auth()->user()->id)->getTotal()}}/=</span></li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Payments</h2>
								<div class="form-check">
		<label class="form-checck-label">
			<input type="radio" class="form-checck-input" name="payment_mathod" value="cash_on_delivery" required>
		</label>
		Cash On Delivery
		
	</div>
	<div class="form-check">
		<label class="form-checck-label">
			<input type="radio" class="form-checck-input" name="payment_mathod" value="paypal" disabled>
			Bkash (coming soon*)
		</label>
		
	</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="images/payment-method.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">

	<button type="submit" class="btn btn-primary mt-3">Place Order</button>
										
									</div>
								</div>
							</div>
							</form>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		
		<!-- Start Shop Services Area  -->
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
		<!-- End Shop Services -->
		
		

@endsection