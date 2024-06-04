<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasa Tourism | Promo</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary main-color">
        <div class="container-fluid">
            <img src="image/logo_estetik_dengan_nama__Wisata_Rasa__1__1_-removebg-preview.png" alt="Logo" width="70"
                height="70" class="d-inline-block align-text-top">
            RASA TOURISM

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand me-auto" href="#"></a>
                <ul class="navbar-nav">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="/promo">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/cart"><i class="bi bi-cart3"></i> Keranjang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--banner-->
    <div class="container-fluid banner-promo d-flex align-items-center">
        <div class="container">
            <h1 class="text-light text-center mb-2">Semua Promo Buat Anda </h1>
        </div>
    </div>

    <!--promo-->
    <div class="container-fluid py-5">
        <div class="container">
            <!--kategori promo-->
            <div class="row justify-content-center mb-5">
                <div class="col-md-4 mb-3">
                    <button id="semuaPromoBtn" onclick="showAll()"
                        class="btn btn-outline-warning w-100 fs-5 active">Semua Promo</button>
                </div>
                <div class="col-md-4 mb-3">
                    <button id="promoDiskonBtn" onclick="showDiskon()" class="btn btn-outline-warning w-100 fs-5">Promo
                        Diskon</button>
                </div>
                <div class="col-md-4 mb-3">
                    <button id="promoBonusBtn" onclick="showBonus()" class="btn btn-outline-warning w-100 fs-5">Promo
                        Bonus</button>
                </div>
            </div>

            <!--isi promo-->
            <div id="semuaPromo">
                <div class="row">
                    @foreach($promos as $promo)
                    <div class="col-sm-6 col-md-3 hovered-card mb-5">
                        <div class="card">
                            <img src="image/product/thumb/{{ $promo->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $promo->title }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!--promo diskon-->
            <div id="promoDiskon" style="display: none;">
                <div class="row">
                    @foreach($promos->where('type', 'diskon') as $promo)
                    <div class="col-sm-6 col-md-3 hovered-card mb-5">
                        <div class="card">
                            <img src="image/product/thumb/{{ $promo->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $promo->title }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!--promo bonus-->
            <div id="promoBonus" style="display: none;">
                <div class="row">
                    @foreach($promos->where('type', 'bonus') as $promo)
                    <div class="col-sm-6 col-md-3 hovered-card mb-5">
                        <div class="card">
                            <img src="image/product/thumb/{{ $promo->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $promo->title }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
        var btnSemuaPromo = $("#semuaPromoBtn");
        var btnPromoDiskon = $("#promoDiskonBtn");
        var btnPromoBonus = $("#promoBonusBtn");

        var semuaPromoView = $("#semuaPromo");
        var diskonPromoView = $("#promoDiskon");
        var bonusPromoView = $("#promoBonus");

        function showAll() {
            btnPromoDiskon.removeClass('active');
            btnPromoBonus.removeClass('active');
            btnSemuaPromo.addClass('active');

            diskonPromoView.hide(1000);
            bonusPromoView.hide(1000);
            semuaPromoView.show(1000);
        }

        function showBonus() {
            btnSemuaPromo.removeClass('active');
            btnPromoDiskon.removeClass('active');
            btnPromoBonus.addClass('active');

            semuaPromoView.hide(1000);
            diskonPromoView.hide(1000);
            bonusPromoView.show(1000);
        }

        function showDiskon() {
            btnSemuaPromo.removeClass('active');
            btnPromoBonus.removeClass('active');
            btnPromoDiskon.addClass('active');

            semuaPromoView.hide(1000);
            bonusPromoView.hide(1000);
            diskonPromoView.show(1000);
        }
    </script>
</body>

</html>
