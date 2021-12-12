@extends('layouts.user')
@section('content')
    <div class="sitemap__section">
        <div class="container">
            <a class="sitemap__name">Home</a> <span class="text-white">/</span> <span class="text-white"><strong> Products </strong></span>
        </div>
    </div>

    <div class="products__section section">
        <div class="container">
            <div class="row">
                <div id="" class="col-lg-2 col-12">
                    <div class="row swipe-wrap">
                        <div class="col-lg-12">
                            <ul class="categories__list">
                                <li class="mb-3 btn__primary">
                                    <a class="text-white p-auto" href="">All Product</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="">Women</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="">Men</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="">Trendy</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="">Unisex</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-9 col-12">
                    <div class="row">
                        @foreach ($data as $produk)
                            
                        
                        <div id="products" class="col-lg-4 col-12  mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="/img/product/{{ $produk->gambar }}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">{{ $produk->nama }}</h1>
                                        
                                    </a>
                                    <h1 id="products" class="product__price">
                                        Rp. {{number_format($produk->harga)}}
                                    </h1>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <a href="{{ url('pesanan')}}/{{ $produk->id }}">
                                            <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                        </a>
                                    </button>
                                    <p>Stok : {{ $produk->stok }}</p>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
        </div>
    </div>


    @endsection
    @section('scripts')
    @parent
    
    @endsection