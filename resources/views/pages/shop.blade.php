<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP | TEMPLATE</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
  rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/shop.css') }}" type="text/css">

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
            <a href="#">Sign in</a>
            <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
            <span>Php <i class="arrow_carrot-down"></i></span>
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
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('templates.header')
    <!-- Header Section End -->

       <!-- Breadcrumb Section Begin -->
       <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

       <!-- Shop Section Begin -->
       <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" id="search" class="search" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li ><a href="/shop">All Items</a></li>
                                                    <li ><a href="/shop/Dental Supplies">Dental Supplies</a></li>
                                                    <li><a href="/shop/Stuffed Toys">Stuffed Toys</a></li>
                                                    <li><a href="/shop/Masks">Masks</a></li>
                                                    <li><a href="/shop/Medicines">Medicines</a></li>
                                                    <li><a href="/shop/Lab Gowns">Lab Gown</a></li>
                                                    <li><a href="/shop/Figurines">Figurines</a></li>
                                                    <li><a href="/shop/Others">Others</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                <a href="javascript:void(0);" id="filter-tags" class="filter-tags" data-filter="all">All</a>
                                                <a href="javascript:void(0);" id="filter-tags" class="filter-tags" data-filter="Masks">Masks</a>
                                                <a href="javascript:void(0);" id="filter-tags" class="filter-tags" data-filter="Lab Gowns">Lab Gowns</a>
                                                <a href="javascript:void(0);" id="filter-tags" class="filter-tags" data-filter="Stuffed Toys">Stuffed Toys</a>
                                                <a href="javascript:void(0);" id="filter-tags" class="filter-tags" data-filter="Dental Supply">Dental Supply</a>
                                                <a href="javascript:void(0);" id="filter-tags" class="filter-tags" data-filter="Toothbrush">Toothbrush</a>
                                                <a href="javascript:void(0);" id="filter-tags" class="filter-tags" data-filter="Accessories">Accessories</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing <span id="result_count">{{ count($products) }}</span> results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products as $product)
                            <div style="list-style: none" class="item-card col-lg-4 col-md-6 col-sm-6" data-status="{{ $product->category }}">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $product->image_file ? $product->image_file  : asset('img/not-found.jpg') }}">
                                        <ul class="product__hover">
                                            <li><a href="/shop/view/{{ $product->id }}"><img src="img/icon/search.png" alt=""><span>Product details</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>{{ $product->name }}</h6>                                        
                                        <h5>₱{{ $product->price }}</h5>                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Begin -->
    @include('templates.footer')
  


   <!-- Js Plugins -->
   <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/mixitup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/shop.js') }}"></script>

</body>
</html>