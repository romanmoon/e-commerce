
    
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    
    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                            <li><a href="#"><i class="ti-headphone-alt"></i> +8801812459860 </a></li>
                                <li><a href="#"><i class="ti-email"></i> zawadhridoy2016@gmail.com </a></li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li>  <a href="https://www.google.com/maps/place/Ashulia+Bazar+Bus+Stop/@23.8976924,90.328817,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c2511186ded3:0xb03e8d9f51ad0e47!8m2!3d23.8976875!4d90.3310057"> <i class="ti-location-pin"></i> Store location</li></a>
                                <li><i class="ti-alarm-clock"></i> <a href="{{ route('view') }}">Daily deal</a></li>

                                

                                @guest
                                <li><i class="ti-user"></i> <a href="{{ route('login') }}">My account</a></li>
                               
                                <li><i class="ti-power-off"></i><a href="{{ route('register') }}#">Registration</a></li>
                                 @else
                                 <li><span>{{ Auth::user()->name }}</span></li>
                                 @if(auth()->user()->role=="admin")
                                 <li><i class="ti-alarm-clock"></i> <a href="{{route('dashboard')}}">Admin Dashboard</a></li>
                                 <li>
                                    @endif
                                 

                                     <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
 
                                @endif
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{asset('images/Logo.png')}}" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                      
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">

                               
                                <form action="{{route('product.search')}}" method="GET">
                                    <input name="search" placeholder="Search Products Here....." type="text">
                                    <button type="submit" class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                                                       <div class="sinlge-bar shopping">
                                
                                <a href="{{route('cartindex')}}" class="single-icon"><i class="ti-bag"></i>
                                    @guest
                                    <span class="total-count">0</span>
                                    @else
                                    <span class="total-count">{{\Cart::session(auth()->user()->id)->getTotalQuantity()}}</span>
                                    @endif
                                </a>
                                
                               
                                <!-- Shopping Item
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>
                                        <a href="{{route('cartindex')}}">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                            <h4><a href="#">Woman Ring</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                            <h4><a href="#">Woman Necklace</a></h4>
                                            <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                        </li>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$134.00</span>
                                        </div>
                                        <a href="checkout.html" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                                 End Shopping Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Header Inner -->
        <div class="header-inner">
    <div class="container">
        <div class="cat-nav-head">
            <div class="row">
                <div class="col-lg-3">
                    <div class="all-category">
                        <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                        <ul class="main-category">
                       
                        
                       
                        <li><a href="{{route('products')}}">accessories</a></li>
                        <!-- <li><a href="#">top 100 offer</a></li> -->
                        <li><a href="{{route('products')}}">sunglass</a></li>
                        <li><a href="{{route('products')}}">watch</a></li>
                        <li><a href="{{route('products')}}">man’s product</a></li>
                        <li><a href="{{route('products')}}">ladies</a></li>
                        <li><a href="{{route('products')}}">westrn dress</a></li>
                        <li><a href="{{route('products')}}">denim </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="menu-area">
                                <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">   
                                <div class="nav-inner"> 
                                    <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                                            <li><a href="{{route('products')}}">Products</a></li>                           
                                            <li><a href="{{route('contract')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                                <!--/ End Main Menu --> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!--/ End Header Inner --></header>
    <!--/ End Header -->