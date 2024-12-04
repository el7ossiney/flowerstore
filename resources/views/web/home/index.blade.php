@extends('web.layouts.app')
@section('title','Home')
@section('content')
    <main>
        <div class="content-search">

            <div class="container container-100">
                <i class="far fa-times-circle" id="close-search"></i>
                <h3 class="text-center">what are your looking for ?</h3>
                <form method="get" action="/search" role="search" style="position: relative;">
                    <input type="text" class="form-control control-search" value="" autocomplete="off"
                        placeholder="Enter Search ..." aria-label="SEARCH" name="q">

                    <button class="button_search" type="submit">search</button>
                </form>
            </div>

        </div>
        @include('web.layouts.partials.slider-banner')



        <div class="show-img">
            <div class="container">
                <div class="row">
                    <div class="show-item">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-1">
                            <figure id="figure-show-1"><a href="#"><img src="img/890x490.png" class="img-responsive"
                                        alt="holiwood"></a></figure>
                            <div class="show-title-1">
                                <h1>Lavender<br>Collections</h1>
                                <h2>SALE UP TO 20% OFF</h2>
                                <a href="#">Read more</a>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-2">
                            <figure id="figure-show-2"><a href="#"><img src="img/430x490.png" class="img-responsive"
                                        alt="holiwood"></a></figure>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-3">
                            <figure id="figure-show-3"><a href="#"><img src="img/430x490.png" class="img-responsive"
                                        alt="holiwood"></a></figure>
                            <div class="show-title-2 title-1">
                                <h1>Rose</h1>
                                <span>( 40 items )</span>
                            </div>

                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-4">
                            <figure id="figure-show-4"><a href="#"><img src="img/890x490.png" class="img-responsive"
                                        alt="holiwood"></a></figure>
                            <div class="show-title-2 title-2">
                                <h2>SALE UP TO 30% OFF</h2>
                                <h1>Happy<br>Women's day</h1>
                                <a href="#">Shop now</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="category">
            <!-- Modal quick view -->
            <!-- --------------------------- -->
            <div class="container">
                <h1>Category of Jenstore</h1>
                <ul class="nav nav-tabs menu-category">
                    <li class="new-menu active"><a data-toggle="tab" href="#menu-tab-new" id="new-menu">New
                            Arrivals</a>
                        <figure id="new-2" class="hidden-xs"></figure>
                    </li>
                    <li class="shop-menu"><a data-toggle="tab" href="#menu-tab-shop">Shop</a>
                        <figure id="shop-2" class="hidden-xs"></figure>
                    </li>
                    <li class="wedding-menu"><a data-toggle="tab" href="#menu-tab-wedding">Wedding</a>
                        <figure id="wedding-2" class="hidden-xs"></figure>
                    </li>
                    <li class="holiday-menu"><a data-toggle="tab" href="#menu-tab-holiday">Holiday</a>
                        <figure id="holiday-2" class="hidden-xs"></figure>
                    </li>
                    <li class="other-menu"><a data-toggle="tab" href="#menu-tab-other">Other</a>
                        <figure id="other-2" class="hidden-xs"></figure>
                    </li>
                </ul>
                <div class="row">
                    <div class="tab-content">

                        <!-- ------tab new---------------- -->
						@include('web.layouts.partials.category.tab-new')
                        <!-- ------------end new arrial---- -->
                        <!-- ------------tab shop----------------- -->
						@include('web.layouts.partials.category.tab-shop')

                        <!-- -------------------------end tab shop--------------------- -->
                        <!-- ------tab wedding---------------- -->
						@include('web.layouts.partials.category.tab-wedding')

                        <!-- ------------end wedding---- -->
                        <!-- ------------tab holiday----------------- -->
						@include('web.layouts.partials.category.tab-holiday')

                        <!-- -------------------------end tab holiday--------------------- -->
                        <!-- ------------tab other----------------- -->
						@include('web.layouts.partials.category.tab-other')

                        <!-- -------------------------end tab other--------------------- -->
                    </div><!-- end tab content -->

                </div><!-- end row -->

            </div>
        </div>
        <!-- ------------------------- -->
        <div class="deal-day count">
            <h1>Deal of the day</h1>
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum<br
                    class="hidden-xs"> passages and more recently with desktop publishing software</p>
            <div id="countdown">
                <div id='tiles'></div>
                <ul class="labels">
                    <li>Days</li>
                    <li>Hours</li>
                    <li>Mins</li>
                    <li>Secs</li>
                </ul>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="product-slick slider">
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <figure class="hot"><a href="#"><img src="img/340x420.png"
                                        class="img-responsive" alt="holiwood"></a></figure>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <div class="prince">$200.7</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Rose</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <div class="prince">$350.4</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <figure class="hot"><a href="#"><img src="img/340x420.png"
                                        class="img-responsive" alt="holiwood"></a></figure>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <div class="prince">$200.7</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/340x420.png" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('web.layouts.partials.blog')

        @include('web.layouts.partials.feedback')

        @include('web.layouts.partials.img-link')
    @endsection
