@extends('layouts.user')
@section('content')
    <div class="sitemap__section">
        <div class="container">
            <a class="sitemap__name">Home</a> <span class="text-white">/</span> <span class="text-white"><strong> Check Out
                </strong></span>
        </div>
    </div>

    <div class="cart__section mb-5">
        <div class="col-lg-12">
            <div class="container">
                <div class="cart__bag mb-4">
                    <h1 class="form__title mb-5">CheckOut  Details</h1>
                    <div class="col-md-12">
                        <a href="/produk" class="btn__primary ms-0 ms-lg-4"> <i class="fa fa-arrow-left"></i> Belanja lagi</a>
                    </div>   
                    @if(!empty($pesanan))
                    <p style="text-align: right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    @foreach ($pesanan_details as $pesanan_detail)
                        
                    <div class="item card_ mb-4 align-items-center">
                        <div class="col-lg-3 col-12">
                            <div class="image">
                                <img src="/img/product/{{ $pesanan_detail->produk->gambar }}" class="image__product" alt="" />
                            </div>
                        </div>

                        <div class="col-lg-3 col-12">
                            <div class="description">
                                <h1 class="cart__name">{{ $pesanan_detail->produk->nama }}</h1>
                            </div>
                        </div>

                        <div class="col-lg-1 col-12">
                            <div class="quantity mb-lg-0 mb-3">
                                <button class="plus-btn cart__quantity" type="button" name="button">
                                    <img src="{{ asset('/img/logo/plus.svg')}}" alt="" />
                                </button>
                                <input type="text" name="name" value="{{ $pesanan_detail->jumlah }}">
                                <button class="minus-btn cart__quantity" type="button" name="button">
                                    <img src="{{ asset('/img/logo/minus.svg')}}" alt="" />
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-2 col-12">
                            <div class="total__price">
                                <p class="login__subtitle mb-4 d-lg-block d-none">Harga</p>
                                <h1 class="total__price">
                                    Rp. {{ number_format($pesanan_detail->produk->harga) }}
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="total__price">
                                <p class="login__subtitle mb-4 d-lg-block d-none">Total Harga</p>
                                <h1 class="total__price">
                                    Rp. {{ number_format($pesanan_detail->jumlah_harga) }}
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="button__action">
                                <form action="{{ url('check_out') }}/{{ $pesanan_detail->id }}" method="post">
                                    
                                    @csrf
                                    {{-- {{ method_field('DELETE') }} --}}
                                    <button type="submit" class="btn__secondary">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <hr>
            </div>
        </div>
    </div>

    

    @if(!empty($pesanan))
    <div class="form__cart mt-5 section">
        <div class="container">
            <div class="row">
                <h1 class="form__title mb-">Shipping Details</h1>
                <div class="d-lg-flex d-block mt-5">
                    <div class="col-lg-3 col-12 me-5">
                        {{-- <div class="d-flex flex-column mb-3">
                            <label for="" class="label__login mb-2">Name</label>
                            <input placeholder="Input Your Username" name="username" type="text" class="input__custom">
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <label for="" class="label__login mb-2">Phone Number</label>
                            <input placeholder="Input Your Username" name="username" type="text" class="input__custom">
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <label for="" class="label__login mb-2">Address</label>
                            <textarea name="" placeholder="Input Your Address" id="" cols="30" rows="10"
                                class="input__custom"></textarea>
                        </div> --}}
                    </div>



                    <div class="col-lg-2 col-12 me-5">
                        {{-- <div class=" d-flex flex-column mb-3">
                            <label for="" class="label__login mb-2">Payment</label>
                            <select name="" id="" class="input__custom bg-white">
                                <option value="">BCA</option>
                                <option value="">Mandiri</option>
                            </select>


                            <div class="img__payments d-flex">
                                <img src="{{ asset('/img/BCA.png')}}" alt="" class="img__payment me-2">
                                <img src="{{ asset('/img/Mandiri.png')}} " alt="" class="img__payment">
                            </div>
                        </div> --}}
                    </div>

                    <div class="col-lg-5 col-12 mb-lg-0 mb-4">
                        <div class="total__price d-flex d-lg-block justify-content-between mt-lg-0 mt-5">
                            <h1 class="form__title mb-2">Total Harga</h1>
                            <h1 class="form__totaL">Rp. {{ number_format($pesanan->jumlah_harga) }}</h1>
                        </div>
                    </div>

                    <div class="col-lg-2 col-12">
                        <div class="button__action d-block">
                            <a href="{{ url('konfirmasi-checkout') }}">
                                <button class="btn__primary">Checkout</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endsection
    @section('scripts')
    @parent
    
    @endsection