<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('/img/logo/Revivla.co.svg')}}" type = "image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.')}}">
    <link rel="stylesheet" href="{{ asset('/css/styleguide.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Revivla.co E-commerce</title>
</head>



<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg__white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('/img/logo/Revivla.co.svg')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text__center" id="navbarText">
                    <ul class="navbar-nav ms-auto me-3 mb-1 mb-lg-0">
                        <li class="nav-item me-4">
                            <div class="d-none d-lg-block">
                                <a class="nav-link mb-1 mb-lg-0 " aria-current="page" href="index.html">Home</a>
                            </div>
                            <div class="d-block d-lg-none">
                                <a class="nav-link mb-1 mb-lg-0 " aria-current="page" href="index.html">Home</a>
                            </div>
                        </li>
                        <li class="nav-item nav__active d-none d-lg-block">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                    </ul>
                    <span class="navbar__button ms-0 ms-lg-2 d-flex d-lg-block flex-column">
                        <a href="cart.html" class="btn__icon me-0 mb-2 me-lg-2 mb-lg-0"><span class="me-2">Cart</span>
                            <img src="{{ asset('/img/logo/Buy.svg')}}" alt="">
                        </a>
                        <a href="" class="img__circle align-items-center">
                            <img src="{{ asset('/img/cd23a819-b730-49fb-80fc-a34a37b8ec66 (2) 1.png')}}" alt="" class="circle">
                            <Span class="ms-2 login__subtitle">Unique Beatrix</Span>
                        </a>
                    </span>
                </div>
            </div>
        </nav>
    </header>


    <div class="sitemap__section">
        <div class="container">
            <a class="sitemap__name">Home</a> <span class="text-white">/</span> <span class="text-white"><strong> Dashboard
                </strong></span>
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
                                    <a class="text-white p-auto" href="">Transactions</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="profile.html">Edit Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 col-12 text-center">
                    <div class="row ms-0 ms-lg-5">
                        <div class="item card_  mb-4 align-items-center">
                            <div class="col-lg-3 col-12">
                                <div class="image">
                                    <img src="{{ asset('/img/product/product-1.png')}}" class="image__product" alt="" />
                                </div>
                            </div>

                            <div class="col-lg-3 col-12">
                                <div class="description">
                                    <h1 class="cart__categories mb-lg-4">Woman</h1>
                                    <h1 class="cart__name">Polkadot Dress</h1>
                                </div>
                            </div>

                            <div class="col-lg-2 col-12">
                                <div class="quantity mb-lg-0 mb-3">
                                    <!-- <button class="plus-btn cart__quantity" type="button" name="button">
                                        <img src="{{ asset('/img/logo/plus.svg')}}" alt="" />
                                    </button> -->
                                    <input type="text" disabled name="name" value="1">
                                    <!-- <button class="minus-btn cart__quantity" type="button" name="button">
                                        <img src="{{ asset('/img/logo/minus.svg')}}" alt="" />
                                    </button> -->
                                </div>
                            </div>

                            <div class="col-lg-2 col-12 mb-4 mb-lg-0">
                                <div class="total__price">
                                    <p class="login__subtitle mb-4 d-lg-block d-none">Price</p>
                                    <h1 class="total__price">
                                        300k
                                    </h1>
                                </div>
                            </div>

                            <div class="col-lg-2 col-12">
                                <div class="button__action">
                                    <form action="" method="post">
                                        <button class="btn__primary">Invoice</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('/js/cutom.js')}}"></script>
    <script src="{{ asset('/js/swipe.js')}}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>