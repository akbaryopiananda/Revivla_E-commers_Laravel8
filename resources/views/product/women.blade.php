@extends('layouts.user')
@section('content')
    <div class="sitemap__section">
        <div class="container">
            <a href="/" class="sitemap__name">Home</a> <span class="text-white">/</span> <span class="text-white"><strong> Products </strong></span>
        </div>
    </div>

    <div class="products__section section">
        <div class="container">
            <div class="row">
                <div id="" class="col-lg-2 col-12">
                    <div class="row swipe-wrap">
                        <div class="col-lg-12">
                            <ul class="categories__list">
                                <li class="mb-3 btn__secondary">
                                    <a class="list__name" href="/produk">All Product</a>
                                </li>
                                <li class="mb-3 btn__primary ">
                                    <a class="text-white p-auto" href="/produk/women">Women</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="/produk/men">Men</a>
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
                                        <h3 style="color: rgb(4, 4, 36)" id="products">{{ $produk->nama }}</h3>
                                        <p style="color: orange">Rp. {{number_format($produk->harga)}}</p>
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