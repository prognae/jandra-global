<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                    <p>Discover quality products. Fast delivery. Easy returns.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                    <div class="header__top__links">
                    <span>Placeholder</span>
                    <a href="#">FAQs</a>
                    </div>

                        <div class="header__top__hover">
                            <span>Php <i class="arrow_carrot-down"></i></span>
                            <ul>
                                <li>PHP</li>
                                <li>EUR</li>
                                <li>USD</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="/"><img src="{{ asset('img/jjandra_logo.png') }}" alt="" style="width: 196px; height: 43px;"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        @if (url()->current() === '/')
                            
                        @endif
                        <li class="{{ request()->is('/') ? 'active' : '' }}" id="homeLink"><a href="/">Home</a></li>
                        <li class="{{ request()->is('shop') ? 'active' : '' }}" id="shopLink"><a href="/shop">Shop</a></li>
                        <li class="{{ request()->is('showcase') ? 'active' : '' }}" id="showcaseLink"><a href="/showcase">Showcase</a></li>
                        <li class="{{ request()->is('blog') ? 'active' : '' }}" id="blogLink"><a href="/events">Events</a></li>
                        <li class="{{ request()->is('about') ? 'active' : '' }}" id="aboutLink"><a href="/about">About Us</a> </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{ asset('img/icon/search.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('img/icon/heart.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('img/icon/cart.png') }}" alt=""> <span>0</span></a>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

@push('scripts')
    <script>
        var class = document.getElementById('homeLink').className
        console.log('hello')
    </script>
@endpush

