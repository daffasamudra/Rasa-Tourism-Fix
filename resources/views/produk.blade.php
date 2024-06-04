<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasa Tourism | Produk</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary main-color">
        <div class="container-fluid">
            <img src="image/logo_estetik_dengan_nama__Wisata_Rasa__1__1_-removebg-preview.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
            RASA TOURISM

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand me-auto" href="#"></a>
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/promo">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/cart"><i class="bi bi-cart3"></i> Keranjang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--banner-->
    <div class="container-fluid banner-produk d-flex align-items-center">
        <div class="container">
            <h1 class="text-light text-center mb-2">Makan Aja Dulu Bro, Bayarnya Belakangan 😁 </h1>
        </div>
    </div>

    <!--product content-->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <!--kategori-->
                <div class="col-3">
                    <h4>Kategori Menu</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active mt-3" aria-current="true">
                            Semua Menu
                        </a>
                    </div>
                </div>
                <!--produk-->
                <div class="col-9">
                    <h4 class="text-center mb-4">Semua Makanan Dan Minuman</h4>

                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-4 mb-3">
                            <div class="card">
                                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h3 class="card-title text-center text-warning"><strong>{{ $product->name }}</strong></h3>
                                    <h4 class="text-center">Rp {{ number_format($product->price, 0, ',', '.') }}</h4>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-warning dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Selengkapnya
                                        </button>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)" onclick="addToCart('{{ $product->name }}', '{{ $product->price }}')">Beli</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--subscribe-->
    <div class="container-fluid py-5 content-subscribe text-light">
        <div class="container">
            <h5 class="text-center mb-4">Temui Kami</h5>
            <div class="row justify-content-center">
                <div class="col-lg-1 d-flex justify-content-center">
                    <i class="bi bi-facebook fs-4"></i>
                </div>
                <div class="col-lg-1 d-flex justify-content-center">
                    <i class="bi bi-instagram fs-4"></i>
                </div>
                <div class="col-lg-1 d-flex justify-content-center">
                    <i class="bi bi-twitter fs-4"></i>
                </div>
                <div class="col-lg-1 d-flex justify-content-center">
                    <i class="bi bi-youtube fs-4"></i>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="container-fluid py-3 bg-dark text-light">
        <div class="container d-flex justify-content-between">
            <label>&copy;2024 Rasa Tourism</label>
            <label>Created by kelompok 8</label>
        </div>
    </div>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>

    <script>
        function addToCart(name, price) {
            var cartItem = {
                name: name,
                price: price
            };
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push(cartItem);
            localStorage.setItem('cart', JSON.stringify(cart));
            alert('Produk telah berhasil ditambahkan ke keranjang!');
        }
    </script>
</body>

</html>
