@extends('layouts.user')
@section('content')
    <div class="sitemap__section">
        <div class="container">
            <a href="index.html" class="sitemap__name">Home </a> <span class="text-white">/</span> <a
                href="products.html" class="sitemap__name">Products </a> <span class="text-white">/</span>
            <span class="text-white"><strong>Product - Details</strong></span>
        </div>
    </div>

    <div class="products__description-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                    <img src="{{ asset('/img/product/Frame 70.png')}}" alt="" class="categories__card product__highlight mb-4">
                    <div class="row">
                        <div class="col-4">
                            <img class="borad__image" src="{{ asset('/img/product/Frame 70.png')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="borad__image" src="{{ asset('/img/product/Frame 70-1.png')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="borad__image" src="{{ asset('/img/product/Frame 70-2.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="product__definition ms-0 ms-lg-4">
                        <div class="product__title mb-5">
                            <h1 class="product__title-category mb-3">Woman </h1>
                            <h1 class="product__title-name mb-5">Orange Flow Dress</h1>
                            <h1 class="product__title-price">300K</h1>
                        </div>
                        <div class="product__subtitle">
                            <p class="product__paragraph mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt cras tellus arcu
                                gravida semper mi fringilla eu. Leo euismod ultrices sed natoque est molestie at.
                                Egestas gravida pharetra, facilisi libero. Venenatis sagittis duis sed .cursus erat
                                nibh. Sit massa mollis senectus gravida sit ornare sit magna. Nullam facilisis placerat
                                congue et elit. Elit sed at montes, integer. <br>
                                Fermentum accumsan id pellentesque varius cras mattis dictum lectus. Rutrum pellentesque
                                donec amet risus tempus elit mattis. Nec amet metus dignissim enim lacus. Condimentum id
                                lobortis cras auctor ac risus in in. Faucibus aliquam vitae amet, gravida tellus. Metus,
                                urna sed gravida cursus urna in non mattis nullam.
                            </p>
                        </div>
                    </div>
                    <button type="submit" class="btn__primary ms-0 ms-lg-4"><span class="me-2">Add To Cart</span>
                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                    </button>
                </div>

            </div>

        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="related__heading mb-5">
                <h1 class="related__title">Maybe You Like It</h1>
            </div>
            <div class="row">
                <div id="products" class="col-lg-3 col-12  mb-3">
                    <div class="card__">
                        <div class="product__img">
                            <a href="#">
                                <img class="product__image-2" src="{{ asset('/img/product/product-2.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product__detail">
                            <a href="">
                                <h1 id="products" class="product__name">Polkadot Dress</h1>
                            </a>
                            <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <div class="cart-action">
                            <button type="submit" class="btn__primary">
                                <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                            </button>
                            <h1 id="products" class="product__price">
                                300K
                            </h1>
                        </div>
                    </div>
                </div>
                <div id="products" class="col-lg-3 col-12 mb-3">
                    <div class="card__">
                        <div class="product__img">
                            <a href="#">
                                <img class="product__image-2" src="{{ asset('/img/product/product-3.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product__detail">
                            <a href="">
                                <h1 id="products" class="product__name">Polkadot Dress</h1>
                            </a>
                            <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <div class="cart-action">
                            <button type="submit" class="btn__primary">
                                <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                            </button>
                            <h1 id="products" class="product__price">
                                300K
                            </h1>
                        </div>
                    </div>
                </div>
                <div id="products" class="col-lg-3 col-12 mb-3">
                    <div class="card__">
                        <div class="product__img">
                            <a href="#">
                                <img class="product__image-2" src="{{ asset('/img/product/Frame 70.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product__detail">
                            <a href="">
                                <h1 id="products" class="product__name">Polkadot Dress</h1>
                            </a>
                            <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <div class="cart-action">
                            <button type="submit" class="btn__primary">
                                <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                            </button>
                            <h1 id="products" class="product__price">
                                300K
                            </h1>
                        </div>
                    </div>
                </div>
                <div id="products" class="col-lg-3 col-12 mb-3">
                    <div class="card__">
                        <div class="product__img">
                            <a href="#">
                                <img class="product__image-2" src="{{ asset('/img/product/Frame 54.png')}}" alt="">
                            </a>
                        </div>
                        <div class="product__detail">
                            <a href="">
                                <h1 id="products" class="product__name">Polkadot Dress</h1>
                            </a>
                            <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                        </div>
                        <div class="cart-action">
                            <button type="submit" class="btn__primary">
                                <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                            </button>
                            <h1 id="products" class="product__price">
                                300K
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
    @section('scripts')
    @parent
    
    @endsection