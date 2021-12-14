@extends('layouts.user')
@section('content')
<div class="cart__section mb-5">
    <div class="col-lg-12">
        <div class="container">
            <div class="login__section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto d-lg-block d-none">
                            <div class="col-8 m-auto mb-5">
                                <img src="{{ asset('/img/success.png')}}" alt="" class="mb-4">
                            </div>
                            <h1 class="success__title mb-3">Thank You For Buy Our Product </h1>
                            <p class="success__subtitle mb-5">Use Revivla to found your best fashion only
                                for you. </p>
                            <div class="success__button">
                                <a href="{{ url('history') }}" class="btn__primary ">Pembayaran</a>
                            </div>
                            <br>
                            <div class="success__button">
                                <a href="/" class="btn__primary ">Go Back At Home</a>
                            </div>
                        </div>

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