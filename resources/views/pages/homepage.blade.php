@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jandra Global Traders Corp</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
  rel="stylesheet">

   <!-- Css Styles -->
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
   <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
   <link rel="stylesheet" href="css/nice-select.css" type="text/css">
   <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
   <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="css/style.css" type="text/css">

   {{-- @vite(['resources/css/bootstrap.min.css'])
   @vite(['resources/css/font-awesome.min.css'])
   @vite(['resources/css/elegant-icons.css'])
   @vite(['resources/css/magnific-popup.css'])
   @vite(['resources/css/nice-select.css'])
   @vite(['resources/css/owl.carousel.min.css'])
   @vite(['resources/css/slicknav.min.css'])
   @vite(['resources/css/style.css']) --}}

</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
  
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="#">Sign In</a>
            <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
            <span>PHP <i class="arrow_carrot-down"></i></span>
            <ul>
                <li>PHP</li>
                <li>EUR</li>
                <li>USD</li>
            </ul>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
        <a href="#"><img src="img/icon/heart.png" alt=""></a>
        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
        <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Fast & Easy Delivery, Hassle-Free Returns within 30 Days!</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('templates.header')
    <!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/hero-4.png" style="background-size: cover; background-position: center;">

        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-7 col-md-8">
              <div class="hero__text">
                <h6 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Welcome to</h6>
                <h2 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Jandra Global Traders Corp.</h2>
                <p style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Discover high-quality White - Jandra Surgical Masks for superior protection and comfort.</p>
                <a href="https://shopee.ph/jandra.ph" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                <div class="hero__social">
                  <a href="https://www.facebook.com/Jandra.PH"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/jandra.ph/?hl=en"><i class="fa fa-instagram"></i></a>
                  <a href="https://shopee.ph/jandra.ph"><i class="fa fa-shopping-cart"></i></a>
                  <!-- <<a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end of 1st-->
  
      <div class="hero__items set-bg" data-setbg="img/hero/hero-5.png">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-7 col-md-8">
              <div class="hero__text">
              <h6 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Introducing</h6>
  <h2 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Janda Limited Edition</h2>
  <p style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Discover the stylish and durable Black - ND99 Surgical Mask for ultimate protection and fashion.</p>
                <a href="https://shopee.ph/jandra.ph" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                <div class="hero__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end of 2nd-->
  
      <div class="hero__items set-bg" data-setbg="img/hero/hero-6.png">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-7 col-md-8">
              <div class="hero__text">
                <h6 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Discover</h6>
                <h2 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Jandra Kids Collection</h2>
                <p style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Explore our fun and colorful collection of surgical masks specially designed for kids.</p>
                <a href="https://shopee.ph/jandra.ph" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                <div class="hero__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end of 3rd-->
  
      <div class="hero__items set-bg" data-setbg="img/hero/hero-7.png">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-7 col-md-8">
              <div class="hero__text">
                <h6 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Experience</h6>
                <h2 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Jandra Lab Gown Collection</h2>
                <p style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Stay protected and comfortable with our high-quality lab gowns designed for laboratory professionals and medical personnel.</p>

                <a href="https://shopee.ph/jandra.ph" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                <div class="hero__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end of 4th-->
  
      <div class="hero__items set-bg" data-setbg="img/hero/hero-8.png">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-7 col-md-8">
              <div class="hero__text">
                <h6 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Discover</h6>
                <h2 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Jandra Dental Figurine Collection</h2>
                <p style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Explore our unique collection of dental-themed figurines, showcasing the artistry and beauty of dentistry in intricate designs.</p>

                <a href="https://shopee.ph/jandra.ph" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                <div class="hero__social">
                  <a href="https://www.facebook.com/Jandra.PH"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                  <a href="https://www.instagram.com/jandra.ph/?hl=en"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end of 5th-->
      <div class="hero__items set-bg" data-setbg="img/hero/hero-9.png">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-7 col-md-8">
              <div class="hero__text">
                <h6 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Discover</h6>
                <h2 style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Jandra Dental Figurine Collection</h2>
                <p style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Explore our unique collection of dental-themed figurines, showcasing the artistry and beauty of dentistry in intricate designs.</p>

                <a href="https://shopee.ph/jandra.ph" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                <div class="hero__social">
                  <a href="https://www.facebook.com/Jandra.PH"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                  <a href="https://www.instagram.com/jandra.ph/?hl=en"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end of 6th-->
    </div>
  </section>
<!-- Hero Section End -->

  <!-- Gallery Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img src="img/gallery/Photo_2.png" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water">
        <img src="img/gallery/Photo_1.png" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape">
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="img/gallery/Photo_4.png" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds">
        <img src="img/gallery/Photo_3.png" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water">
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="img/gallery/Photo_5.png" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea">
        <img src="img/gallery/Photo_6.png" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park">
      </div>
    </div>
  </div>
  <!-- Gallery End -->


    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="img/banner/banner-face.png" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Mask Collections 2023</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="img/banner/banner-8.png" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Stuffed Toys</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="img/banner/banner-face2.png" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Surgical Mask</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

        <!-- Product Section Begin -->
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="filter__controls">
                            {{-- <li data-filter=".hot-sales">Best Sellers</li> --}}
                            <li class="active" data-filter=".new-arrivals">New Arrivals</li>
                        </ul>
                    </div>
                </div>
                <div class="row product__filter">
                    @foreach ($newArrivals as $product)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ $product->image_file }}">
                                    <span class="label">New</span>
                                    <ul class="product__hover">                                       
                                        <li><a href="/shop/view/{{ $product->id }}"><img src="{{ asset('img/icon/search.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $product->name }}</h6>
                                    <h5>₱ {{ $product->price }}</h5>
                                    <div class="product__color__select">
                                        <label for="pc-1">
                                            <input type="radio" id="pc-1">
                                        </label>
                                        <label class="active black" for="pc-2">
                                            <input type="radio" id="pc-2">
                                        </label>
                                        <label class="grey" for="pc-3">
                                            <input type="radio" id="pc-3">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/pproduct-2.png">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Green Surgical Mask</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>₱67.24</h5>
                                <div class="product__color__select">
                                    <label for="pc-4">
                                        <input type="radio" id="pc-4">
                                    </label>
                                    <label class="active black" for="pc-5">
                                        <input type="radio" id="pc-5">
                                    </label>
                                    <label class="grey" for="pc-6">
                                        <input type="radio" id="pc-6">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/pproduct-4.png">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Beige Mask</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>₱60.9</h5>
                                <div class="product__color__select">
                                    <label for="pc-10">
                                        <input type="radio" id="pc-10">
                                    </label>
                                    <label class="active black" for="pc-11">
                                        <input type="radio" id="pc-11">
                                    </label>
                                    <label class="grey" for="pc-12">
                                        <input type="radio" id="pc-12">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="img/product/pproduct-6.png">
                                <span class="label">Sale</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Cat Dog</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>₱98.49</h5>
                                <div class="product__color__select">
                                    <label for="pc-16">
                                        <input type="radio" id="pc-16">
                                    </label>
                                    <label class="active black" for="pc-17">
                                        <input type="radio" id="pc-17">
                                    </label>
                                    <label class="grey" for="pc-18">
                                        <input type="radio" id="pc-18">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/pproduct-8.png">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Couple Toy</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>₱426.28</h5>
                                <div class="product__color__select">
                                    <label for="pc-22">
                                        <input type="radio" id="pc-22">
                                    </label>
                                    <label class="active black" for="pc-23">
                                        <input type="radio" id="pc-23">
                                    </label>
                                    <label class="grey" for="pc-24">
                                        <input type="radio" id="pc-24">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Product Section End -->

        <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Toy Collection<br /> <span>Mask Collection</span> <br />Accessories</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="img/banner/banner-7.png" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>₱249.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Jandra-Black Surgical Mask</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

        <!-- Instagram Section Begin -->
        <section class="instagram spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="instagram__pic">
                            <div class="instagram__pic__item set-bg" data-setbg="img/instagram/iinstagram-1.png"></div>
                            <div class="instagram__pic__item set-bg" data-setbg="img/instagram/iinstagram-2.png"></div>
                            <div class="instagram__pic__item set-bg" data-setbg="img/instagram/iinstagram-4.png"></div>
                            <div class="instagram__pic__item set-bg" data-setbg="img/instagram/iinstagram-3.png"></div>
                            <div class="instagram__pic__item set-bg" data-setbg="img/instagram/iinstagram-5.png"></div>
                            <div class="instagram__pic__item set-bg" data-setbg="img/instagram/iinstagram-6.png"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="instagram__text">
                            <h2>Instagram</h2>
                            <p>Welcome to Jandra Global Traders Corp, your premier dental supplier! We are passionate about delivering exceptional dental products and equipment to professionals worldwide, ensuring brighter smiles for all</p>
                            <h3>#Jandra_Global_Traders_Corp.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Instagram Section End -->
        <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Events</span>
                        <h2>Latest Events</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ $event->event_image }}"></div>
                            <div class="blog__item__text">
                                <span><img src="img/icon/calendar.png" alt=""> {{ Carbon::createFromFormat('Y-m-d', $event->event_date)->format('F d, Y') }}</span>
                                <h5>{{ $event->event_name }}</h5>
                                <a href="/events/{{ $event->id }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach                
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    @include('templates.footer')

  
  
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.nice-select.min.js"></script>
   <script src="js/jquery.nicescroll.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/jquery.countdown.min.js"></script>
   <script src="js/jquery.slicknav.js"></script>
   <script src="js/mixitup.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>