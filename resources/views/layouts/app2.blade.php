<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta name="author" content="SSLCommerz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Title Tag  -->
    <title>RedStore-Zawad</title>
 
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('images/navlogo.png')}}">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- StyleSheet -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('css/niceselect.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/flex-slider.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
    
    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">   

</head>
<body class="js">
    @include('parts.header2')
    <div>

    @yield('content')
    </div>
    @include('parts.footer')

    <!-- Jquery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript">
// const $ = jQuery;
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
    <!-- Popper JS -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Color JS -->
    <script src="{{asset('js/colors.js')}}"></script>
    <!-- Slicknav JS -->
    <script src="{{asset('js/slicknav.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{asset('js/magnific-popup.js')}}"></script>
    <!-- Waypoints JS -->
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <!-- Countdown JS -->
    <script src="{{asset('js/finalcountdown.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{asset('js/nicesellect.js')}}"></script>
    <!-- Flex Slider JS -->
    <script src="{{asset('js/flex-slider.js')}}"></script>
    <!-- ScrollUp JS -->
    <script src="{{asset('js/scrollup.js')}}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{asset('js/onepage-nav.min.js')}}"></script>
    <!-- Easing JS -->
    <script src="{{asset('js/easing.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('js/active.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        
        @stack('js')
</body>
</html>

{{asset('


