@extends('layouts.user')
@section('content')
    <div class="sitemap__section">
        <div class="container">
            <a href="/" class="sitemap__name">Home </a> <span class="text-white">/</span> <a
                href="/produk" class="sitemap__name">Products </a> <span class="text-white">/</span>
            <span class="text-white"><strong>{{ $produk->nama }}</strong></span>
        </div>
    </div>
    <div class="products__description-section section">
        <div class="container">
            <div class="col-md-12">
                <a href="/produk" class="btn__primary ms-0 ms-lg-4"> <i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                    <img src="/img/product/{{ $produk->gambar }}" alt="" class="categories__card product__highlight mb-4">
                    {{-- <div class="row">
                        <div class="col-4">
                            <img class="borad__image" src="{{ asset('/img/product/Frame 70.png')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="borad__image" src="{{ asset('/img/product/Frame 70-1.png')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="borad__image" src="{{ asset('/img/product/Frame 70-2.png')}}" alt="">
                        </div>
                    </div> --}}
                </div>

                <div class="col-lg-6 col-12">
                    <div class="product__definition ms-0 ms-lg-4">
                        <div class="product__title mb-5">
                            {{-- <h1 class="product__title-category mb-3">Woman </h1> --}}
                            <h1 class="product__title-name mb-5">{{ $produk->nama }}</h1>
                            <h1 class="product__title-price">Rp. {{ number_format($produk->harga) }}</h1>
                            <p>Stok : {{ number_format($produk->stok) }}</p>
                        </div>
                        <div class="product__subtitle">
                            <p class="product__paragraph mb-5">
                                {{ $produk->deskripsi }}
                            </p>
                        </div>
                    </div>
                    <form method="post" action="{{ url('pesanan') }}/{{ $produk->id }}">
                        @csrf
                        <div class="col-sm-6" style="margin-left: 20px">
                            {{-- <input type="text" class="form-control" name="jumlah_pesan" placeholder="Jumlah" required="">
                        </div>
                        <div > --}}
                            <div class="quantity mb-lg-3 mb-3">
                                <button class="plus-btn cart__quantity" type="button" name="button">
                                    <img src="{{ asset('img/logo/plus.svg') }}" alt="" />
                                </button>
                                <input type="text" name="jumlah_pesan" placeholder="0" required="">
                                <button class="minus-btn cart__quantity" type="button" name="button">
                                    <img src="{{ asset('img/logo/minus.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn__primary ms-0 ms-lg-4"><span class="me-2">Masukkan Keranjang</span>
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>

    {{-- <div class="section">
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
    </div> --}}


@endsection
@section('scripts')
   @parent
@endsection