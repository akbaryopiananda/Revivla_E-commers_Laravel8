@extends('layouts.user')
@section('content')
<!--//////////Hero Section//////////-->
<div class="hero__section section">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url(/img/hero-1.png)">
                <div class="container">
                    <div class="col-lg-5 col-7">
                        <div class="hero__heading">
                            <h1 class="hero__title" data-aos="fade-down" data-aos-duration="1000">Get Your Best
                                Fashion
                                Only On Revivla.co</h1>
                        </div>
                        <a class="btn__primary" data-aos="fade-up" data-aos-duration="1000">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(/img/hero-2.png)">
                <div class="container">
                    <div class="col-lg-5 col-7">
                        <div class="hero__heading">
                            <h1 class="hero__title" data-aos="fade-down">Improve Your Confident With Best Dress</h1>
                        </div>
                        <a class="btn__primary" data-aos="fade-up">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(/img/hero-3.png)">
                <div class="container">
                    <div class="col-lg-5 col-7">
                        <div class="hero__heading">
                            <h1 class="hero__title" data-aos="fade-down">Look Good To Every Generation</h1>
                        </div>
                        <a class="btn__primary" data-aos="fade-up">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--//////////End Hero Section///////////-->

<!--//////////trending Section///////////-->
<div class="trending-section section">
    <div class="container">
        <div class="trending__heading">
            <h1 class="trending__title">On Trending</h1>
        </div>

        <div id="slider" class="trending__product swipe">
            <div class="row swipe-wrap">
                <div class="col-12 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="card__">
                        <div class="product__img">
                            <a href="#">
                                <img class="product__image" src="{{ ('/img/product/product-1.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product__detail">
                            <a href="">
                                <h1 class="product__name">Polkadot Dress</h1>
                            </a>
                            <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <div class="cart-action">
                            <button type="submit" class="btn__primary"><span class="me-2">Add To Cart</span>
                                <img src="{{ ('/img/logo/Buy-White.svg')}}" alt="">
                            </button>
                            <h1 class="product__price">
                                300K
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 mb-lg-0 mb-4">
                    <div class="card__">
                        <div class="product__img">
                            <a href="#">
                                <img class="product__image" src="{{ ('/img/product/product-2.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product__detail">
                            <a href="">
                                <h1 class="product__name">Polkadot Dress</h1>
                            </a>
                            <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <div class="cart-action">
                            <button type="submit" class="btn__primary"><span class="me-2">Add To Cart</span>
                                <img src="{{ ('/img/logo/Buy-White.svg')}}" alt="">
                            </button>
                            <h1 class="product__price">
                                300K
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="card__">
                        <div class="product__img">
                            <a href="#">
                                <img class="product__image" src="{{ ('/img/product/product-3.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product__detail">
                            <a href="">
                                <h1 class="product__name">Polkadot Dress</h1>
                            </a>
                            <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <div class="cart-action">
                            <button type="submit" class="btn__primary"><span class="me-2">Add To Cart</span>
                                <img src="{{ ('/img/logo/Buy-White.svg')}}" alt="">
                            </button>
                            <h1 class="product__price">
                                300K
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--////////// End trending Section///////////-->

<!--////////// Data Statistik Section ///////////-->
<div class="data__section section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                <div class="data__statistik">
                    <div class="data__number">
                        <h1 class="data__total">526 +</h1>
                        <p class="data__name">Buyer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="data__statistik">
                    <div class="data__number">
                        <h1 class="data__total">51 +</h1>
                        <p class="data__name">New User</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="data__statistik">
                    <div class="data__number">
                        <h1 class="data__total">5 +</h1>
                        <p class="data__name">Product Categories</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="data__statistik">
                    <div class="data__number">
                        <h1 class="data__total">65 +</h1>
                        <p class="data__name">Loyal Buyer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--////////// End Data Statistik Section ///////////-->


<!--////////// Categpories Section ///////////-->
<div class="categories-section section">
    <div class="container custom-con">
        <div class="row">
            <div class="col-lg-6 col-12 mb-lg-0 mb-4">

                <div class="categories__card categories__image"
                    style="background-image: url(/img/categories/categories-woman.png);">
                    <div class="categories__action">
                        <div class="categories_desc mb-4">
                            <h1 class="categories__name">Women Catalog</h1>
                            <p class="categories__detail">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <a href="#" class="btn__secondary-white"><span class="me-2">Open Catalog</span>
                            <img src="{{ ('/img/logo/Arrow - Right.svg')}}" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-12">
                <div class="categories__card categories__image"
                    style="background-image: url(/img/categories/categories-man.png);">
                    <div class="categories__action">
                        <div class="categories_desc mb-4">
                            <h1 class="categories__name">Men Catalog</h1>
                            <p class="categories__detail">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <a href="#" class="btn__secondary-white"><span class="me-2">Open Catalog</span>
                            <img src="{{ ('/img/logo/Arrow - Right.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--////////// End Categpories Section ///////////-->

<!--////////// Call To Action Section ///////////-->
<div class="cta__section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta__card" style="background-image: url(/img/cta.png)">
                    <div class="cta__title">
                        <h1 class="cta__name mb-5">Go Now Because Style is Number 1</h1>
                        <div class="cta__button">
                            <a href="#" class="btn__primary">Explore Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--////////// End Call To Action Section ///////////-->

<!--////////// Brand Section ///////////-->
<div class="brand__section section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6 mb-3 mb-lg-0">
                <img src="{{ ('/img/brand/zara.png')}}" alt="">
            </div>
            <div class="col-lg-3 col-6 mb-3 mb-lg-0">
                <img src="{{ ('/img/brand/gucci.png')}}" alt="">
            </div>
            <div class="col-lg-3 col-6 mb-3 mb-lg-0">
                <img src="{{ ('/img/brand/lv.png')}}" alt="">
            </div>
            <div class="col-lg-3 col-6 mb-3 mb-lg-0">
                <img src="{{ ('/img/brand/ysl.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!--//////////End Brand Section ///////////-->
@endsection
@section('scripts')
@parent

@endsection