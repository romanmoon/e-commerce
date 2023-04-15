@extends('layouts.app2')
@section('content')



		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a>Blog Single Sidebar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
			
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						
    <center>
        @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    </center>
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="image">
										<img src="{{url('/uploads/product/'.$product->product_image)}}" alt="#">
									</div>
									<div class="blog-detail">
										<h2 class="blog-title">{{$product->name}}</h2>
										
										
										<div class="content">
											<p>{{$product->description}}</p>
											<blockquote> <i class="fa fa-quote-left"></i> Do what you love to do and give it your very best. Whether it's business or baseball, or the theater, or any field. If you don't love what you're doing and you can't give it your best, get out of it. Life is too short. You'll be an old man before you know it. risus. Ut tincidunt, erat eget feugiat eleifend, eros magna dapibus diam.</blockquote>
											
										</div>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">{{$product->name}}</h3>
								<div class="product-price">
                                    <span>{{$product->price}}</span>
                                </div>
								
								<ul class="categor-list">
									<li></li>
									<br><br><br><br>
									<li><div class="product-action-2">
										<form action="{{route('formAddcart')}}" method="POST">
											@csrf 
											<input type="hidden" name="product" value="{{$product->id}}">
											<input type="number" min="1" class="form-control" name="quantity" value="1" required onchange="validateAmount(this.value,{{$product->id}} )">
											<br><br>

											<button type="submit" class="btn btn-primary">Add to cart</button>
										</form>
                                     <!-- <button type="button" class="btn btn-success"> <a title="Add to cart" href="{{route('addcart',$product->id)}}" style="color: red">Add to cart</a> </button>   -->
                                    </div></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
						
					</div>
				</div>
			</div>
		</section>



@endsection