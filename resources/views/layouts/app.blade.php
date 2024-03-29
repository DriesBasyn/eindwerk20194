<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.cs')}}s">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout" {{--class="animsition--}}>
   {{-- <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

          --}}{{--  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>--}}{{--
        </div>
    </nav>--}}
   <!-- Header -->
   <header class="header1">
       <!-- Header desktop -->
       <div class="container-menu-header">
           <div class="topbar">
               <div class="topbar-social">
                   <a href="#" class="topbar-social-item fa fa-facebook"></a>
                   <a href="#" class="topbar-social-item fa fa-instagram"></a>
                   <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                   <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                   <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
               </div>

              {{-- <span class="topbar-child1">
					Free shipping for standard order over $100
				</span>--}}

               <div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>



               </div>
           </div>

           <div class="wrap_header">
               <!-- Logo -->
               <a href="{{url('/')}}" class="logo">
                   <img src="{{asset('images/icons/logo.png')}}" alt="IMG-LOGO">
               </a>

               <!-- Menu -->
               <div class="wrap_menu">
                   <nav class="menu">
                       <ul class="main_menu">
                           <li>
                               <a href="{{url('/')}}">Home</a>
                             {{--  <ul class="sub_menu">
                                   <li><a href="index.html">Homepage V1</a></li>
                                   <li><a href="home-02.html">Homepage V2</a></li>
                                   <li><a href="home-03.html">Homepage V3</a></li>
                               </ul>--}}
                           </li>

                           <li>
                               <a href="{{url('product')}}">Shop</a>
                           </li>

                          {{-- <li class="sale-noti">
                               <a href="product.html">Sale</a>
                           </li>--}}

                         {{--  <li>
                               <a href="cart.html">Features</a>
                           </li>--}}

                           <li>
                               <a href="{{url('blog')}}">About</a>
                           </li>

                           <li>
                               <a href="{{url('contact')}}">Contact</a>
                           </li>
                       </ul>
                   </nav>
               </div>

               <!-- Header Icon -->
               <div class="header-icons">
                   <a href="#" class="header-wrapicon1 dis-block">

                       @if (Auth::guest())
                           <a href="{{ url('/login') }}"> Login |</a>
                            <span> </span>
                           <a href="{{ url('/register') }}"> | Register </a>
                       @else
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   {{ Auth::user()->name }}
                               </a>

                               <ul class="dropdown-menu" role="menu">
                                   <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                               </ul>
                           </li>
                       @endif
                   </a>

                   <span class="linedivide1"></span>

                   <div class="header-wrapicon2">
                       <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">


                       <!-- Header cart noti -->
                       <div class="header-cart header-dropdown">
                           <ul class="header-cart-wrapitem">


                           </ul>

                           <div class="header-cart-total">
                               Total: {{Cart::subTotal()}}
                           </div>

                           <div class="header-cart-buttons">
                               <div class="header-cart-wrapbtn">
                                   <!-- Button -->
                                   <a href="{{url('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                       View Cart
                                   </a>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <!-- Header Mobile -->
       <div class="wrap_header_mobile">
           <!-- Logo moblie -->
           <a href="/" class="logo-mobile">
               <img src="{{asset('images/icons/logo.png')}}" alt="IMG-LOGO">
           </a>

           <!-- Button show menu -->
           <div class="btn-show-menu">
               <!-- Header Icon mobile -->
               <div class="header-icons-mobile">
                   <a href="#" class="header-wrapicon1 dis-block">
                       <img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
                   </a>

                   <span class="linedivide2"></span>

                   <div class="header-wrapicon2">
                       <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">


                       <!-- Header cart noti -->
                       <div class="header-cart header-dropdown">
                           <ul class="header-cart-wrapitem">


                           </ul>

                           <div class="header-cart-total">
                               Total: ${{Cart::subTotal()}}
                           </div>

                           <div class="header-cart-buttons">
                               <div class="header-cart-wrapbtn">
                                   <!-- Button -->
                                   <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                       View Cart
                                   </a>
                               </div>

                               <div class="header-cart-wrapbtn">
                                   <!-- Button -->
                                   <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                       Check Out
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
               </div>
           </div>
       </div>

       <!-- Menu Mobile -->
       <div class="wrap-side-menu" >
           <nav class="side-menu">
               <ul class="main-menu">
                  {{-- <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
                   </li>--}}

                   <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                       <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>


                       </div>
                   </li>

                   <li class="item-topbar-mobile p-l-10">
                       <div class="topbar-social-mobile">
                           <a href="#" class="topbar-social-item fa fa-facebook"></a>
                           <a href="#" class="topbar-social-item fa fa-instagram"></a>
                           <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                           <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                           <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                       </div>
                   </li>

                   <li class="item-menu-mobile">
                       <a href="{{url('/')}}">Home</a>
                     {{--  <ul class="sub-menu">
                           <li><a href="{{url('/')}}">Homepage V1</a></li>
                       </ul>
                       <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>--}}
                   </li>

                   <li class="item-menu-mobile">
                       <a href="{{url('product')}}">Shop</a>
                   </li>

                {{--   <li class="item-menu-mobile">
                       <a href="{{url('blog')}}">Blog</a>
                   </li>--}}

                   <li class="item-menu-mobile">
                       <a href="{{url('about')}}">About</a>
                   </li>

                   <li class="item-menu-mobile">
                       <a href="{{url('contact')}}">Contact</a>
                   </li>
               </ul>
           </nav>
       </div>
   </header>


    @yield('content')
   <!-- Footer -->
   <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
       <div class="flex-w p-b-90">
           <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
               <h4 class="s-text12 p-b-30">
                   GET IN TOUCH
               </h4>

               <div>
                   <p class="s-text7 w-size27">
                       Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                   </p>

                   <div class="flex-m p-t-30">
                       <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                       <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                       <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                       <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                       <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                   </div>
               </div>
           </div>

           <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
               <h4 class="s-text12 p-b-30">
                   Categories
               </h4>

               <ul>
                  {{-- @foreach($categories as $category)
                   <li class="p-b-9">
                       <a href="#" class="s-text7">
                           {{$category->name}}
                       </a>
                   </li>--}}
                {{--       @endforeach--}}

               </ul>
           </div>

           <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
               <h4 class="s-text12 p-b-30">
                   Links
               </h4>

               <ul>
                   <li class="p-b-9">
                       <a href="#" class="s-text7">
                           Search
                       </a>
                   </li>

                   <li class="p-b-9">
                       <a href="{{url('about')}}" class="s-text7">
                           About Us
                       </a>
                   </li>

                   <li class="p-b-9">
                       <a href="{{url('contact')}}" class="s-text7">
                           Contact Us
                       </a>
                   </li>

               </ul>
           </div>



           <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
               <h4 class="s-text12 p-b-30">
                   Newsletter
               </h4>

               <form>
                   <div class="effect1 w-size9">
                       <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                       <span class="effect1-line"></span>
                   </div>

                   <div class="w-size2 p-t-20">
                       <!-- Button -->
                       <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                           Subscribe
                       </button>
                   </div>

               </form>
           </div>
       </div>

       <div class="t-center p-l-15 p-r-15">
           <a href="#">
               <img class="h-size2" src="{{asset('images/icons/paypal.png" alt="IMG-PAYPAL')}}">
           </a>

           <a href="#">
               <img class="h-size2" src="{{asset('images/icons/visa.png" alt="IMG-VISA')}}">
           </a>

           <a href="#">
               <img class="h-size2" src="{{asset('images/icons/mastercard.png" alt="IMG-MASTERCARD')}}">
           </a>

           <a href="#">
               <img class="h-size2" src="{{asset('images/icons/express.png" alt="IMG-EXPRESS')}}">
           </a>

           <a href="#">
               <img class="h-size2" src="{{asset('images/icons/discover.png" alt="IMG-DISCOVER')}}">
           </a>

           <div class="t-center s-text8 p-t-20">
               Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
           </div>
       </div>
   </footer>



   <!-- Back to top -->
   <div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
   </div>

   <!-- Container Selection1 -->
   <div id="dropDownSelect1"></div>



   <!--===============================================================================================-->
   <script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
   <!--===============================================================================================-->
   <script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
   <!--===============================================================================================-->
   <script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
   <script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
   <!--===============================================================================================-->
   <script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
   <script type="text/javascript">
       $(".selection-1").select2({
           minimumResultsForSearch: 20,
           dropdownParent: $('#dropDownSelect1')
       });
   </script>
   <!--===============================================================================================-->
   <script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('js/slick-custom.js')}}"></script>
   <!--===============================================================================================-->
   <script type="text/javascript" src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
   <!--===============================================================================================-->
   <script type="text/javascript" src="{{asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
   <!--===============================================================================================-->
   <script type="text/javascript" src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
   <script type="text/javascript">
       $('.block2-btn-addcart').each(function(){
           var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
           $(this).on('click', function(){
               swal(nameProduct, "is added to cart !", "success");
           });
       });

       $('.block2-btn-addwishlist').each(function(){
           var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
           $(this).on('click', function(){
               swal(nameProduct, "is added to wishlist !", "success");
           });
       });
   </script>

   <!--===============================================================================================-->
   <script src="{{asset('js/main.js')}}"></script>


   <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
