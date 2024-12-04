<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <!-- bootstrap vs fontawesome-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"

        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-homev3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-res-v3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-fix-nav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-form-search-mobile.css') }}">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">
    <!-- GG FONT -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
    <header class="container" id="header-v3">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo"><a href="#"><img src="{{asset('img/logo.png')}}"
                        alt="holiwood"></a></div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 menu-mobile">
                <div class=" collapse navbar-collapse" id="myNavbar">

                    <form class="hidden-lg hidden-md form-group form-search-mobile">
                        <input type="text" name="search" placeholder="Search here..." class="form-control">
                        <button type="submit"><img src="img/Search.png" alt="search" class="img-responsive"></button>
                    </form>
                    <ul class="nav navbar-nav menu-main">

                        <li class="dropdown menu-home">
                            <a href="{{ route('web.home') }}" id="home-menu" class="dropdown-toggle">Home</a>
                        </li>
                        <li class="dropdown menu-home">
                            <a href="{{ route('web.shop') }}" id="home-menu" class="dropdown-toggle">ٍShop</a>
                        </li>
                        <li class="shop-menu dropdown"><a href="{{ route('web.shop') }}">Shop </a>
                           
                            <div class="dropdown-menu">
                                <div class="container container-menu">
                                    <ul class="row">
                                        <li class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                            <ul>

                                                <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
                                                    <ul>
                                                        <li><a href="#">CHECKING PAGE</a></li>
                                                        <li class="li-home li-one"><i
                                                                class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                                                href="shopping-cart.html">Shopping Cart</a></li>
                                                        <li class="li-home"><i
                                                                class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                                                href="checkout.html">Checkout</a></li>
                                                        <li class="li-home"><i
                                                                class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                                                href="order.html">Order</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
                                                    <ul>
                                                        <li><a href="#">OTHER PAGE</a></li>
                                                        <li class="li-home li-one"><i
                                                                class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                                                href="FAQ.html">FAQ</a></li>
                                                        <li class="li-home"><i
                                                                class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                                                href="login_register.html">Login/Register</a></li>
                                                        <li class="li-home"><i
                                                                class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                                                href="page404.html">Page404</a></li>
                                                        <li class="li-home"><i
                                                                class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                                                href="tracking.html">Tracking</a></li>
                                                        <li class="li-home"><i
                                                                class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                                                href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="col-lg-4 col-md-4 hidden-sm hidden-xs li-banner">
                                            <a href="#"><img src="img/340x240.png" alt="banner"></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="wedding-menu"><a href="about.html">About Us</a>
                            <figure id="wedding-1" class=" hidden-sm hidden-md hidden-xs"></figure>
                        </li>
                        <li class="blog-menu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <figure id="blog-1" class=" hidden-sm hidden-md hidden-xs"></figure>
                            <ul class="menu-home-lv2 dropdown-menu">
                                <li class="li-home"><i
                                        class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                        href="blog.html">Blog right sidebar</a></li>
                                <li class="li-home"><i
                                        class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                        href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                <li class="li-home"><i
                                        class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                        href="blog-no-sidebar.html">Blog no sidebar</a></li>
                                <li class="li-home"><i
                                        class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                        href="singel-post-left-sidebar.html">Singel post left sidebar</a></li>
                                <li class="li-home"><i
                                        class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                        href="singel-post-right-sidebar.html">Singel post right sidebar</a></li>
                                <li class="li-home"><i
                                        class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a
                                        href="singel-post-no-sidebar.html">Singel post no sidebar</a></li>
                            </ul>
                        </li>
                        <li class="contact-menu"><a href="contact.html">Contact</a>
                            <figure id="contact-1" class=" hidden-sm hidden-md hidden-xs"></figure>
                        </li>
                        <li class="hidden-lg hidden-md"><a href="#"><i class="far fa-user"></i> My Account</a>
                        </li>
                        <li>
                            <figure id="btn-close-menu" class="hidden-lg hidden-md"><i
                                    class="far fa-times-circle"></i></figure>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
                <ul class="nav navbar-nav navbar-right icon-menu">


                    <li id="input-search" class="hidden-sm hidden-xs">
                        <a href="#"><img id="search-img" src="img/Search.png" alt="search"></a>

                    </li>
                    <li class="icon-user hidden-sm hidden-xs"><a href="#"><i class="far fa-user"></i></a></li>
                    <li class="dropdown cart-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/cart.png"
                                id="img-cart" alt="cart"></a>
                        <div class="dropdown-menu">
                            <div class="cart-1">
                                <div class="img-cart"><img src="img/340x420.png" class="img-responsive"
                                        alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Pink roses</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="cart-1">
                                <div class="img-cart"><img src="img/340x420.png" class="img-responsive"
                                        alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Eleganr by BloomNation</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="cart-1">
                                <div class="img-cart"><img src="img/340x420.png" class="img-responsive"
                                        alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Queen Rose - Yellow</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="total">
                                <span>Total:</span>
                                <span>$621.6</span>
                            </div>
                            <div id="div-cart-menu">
                                <a href="#">ADD TO CART</a>
                                <a href="#" class="check">CHECK VIEW</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="navbar-header mobile-menu">
                <button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse"
                    data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

    </header>
