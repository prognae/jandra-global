<!DOCTYPE html>
<html>
<head>
  <title>Dental Product Showcase</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="#">

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
</head>

<style>
  body {
  background-color: #f8f9fa;
  font-family: 'Roboto', sans-serif;
}

.navbar {
  background-color: #ffffff;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar-brand {
  font-size: 24px;
  font-weight: 700;
  color: #333333;
}

.navbar-nav .nav-item .nav-link {
  color: #333333;
  font-size: 16px;
  font-weight: 500;
}

.jumbotron {
  background-image: url('header-background.jpg');
  background-size: cover;
  background-position: center;
  color: #ffffff;
  padding: 150px 0;
  text-align: center;
}

.jumbotron h1 {
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 30px;
}

.jumbotron p {
  font-size: 18px;
  margin-bottom: 30px;
}

.btn-primary {
  background-color: #d6254e;
  border-color: #d6254e;
  font-size: 16px;
  font-weight: 500;
  padding: 12px 30px;
  border-radius: 30px;
}

.btn-primary:hover {
  background-color: #b1163b;
  border-color: #b1163b;
}

.card {
  border: none;
  margin-bottom: 30px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s;
  overflow: hidden;
}

.card:hover {
  transform: translateY(-5px);
}

.card-img-top {
  height: 200px;
  object-fit: cover;
}

.card-title {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 10px;
}

.card-text {
  font-size: 16px;
  margin-bottom: 20px;
  color: #777777;
}

.fa-star {
  color: #f1c40f;
}



</style>
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

  <header class="jumbotron text-center">
    <h1>Welcome to Jandra Global Trader Corps</h1>
    <p>Discover the latest dental products and technologies</p>
    <a class="btn btn-primary" href="#">View Products</a>
  </header>
  <hr>

  <section class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="img/product/pproduct-1.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">Description of Product 1</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/product/pproduct-2.png" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text">Description of Product 2</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/product/pproduct-3.png" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text">Description of Product 3</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
<!-- Gallery Start -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery End -->


    <!-- Footer Section Begin -->
    @include('templates.footer')


   <!-- Js Plugins -->
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
