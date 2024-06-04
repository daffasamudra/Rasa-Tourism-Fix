<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rasa Tourism</title>
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
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="/produk">Produk</a>
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
  <div class="container-fluid banner d-flex align-items-center">
    <div class="container">
      <h1 class="text-light text-center display-5 mb-2">Selamat Datang Di Rasa Tourism</h1>
      <h2 class="text-light text-center mb-3">Lagi Mau Makan Apa?</h2>
      <div class="col-md-8 offset-md-2">
        <div class="input-group input-group-lg">
          <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
            <option selected>Lihat Menu...</option>
            <option value="1">Semua Menu</option>
          </select>
          <a href="/produk" class="btn btn-lg btn-warning text-light" type="button">Telusuri</a>
        </div>
      </div>
    </div>
  </div>

  <!--promo-->
  <div class="container-fluid py-5">
    <div class="container">
      <h2 class="text-center">Promo Minggu Ini</h2>

      <div class="row mt-5 justify-content-center">
        <div class="col-sm-6 col-md-3 hovered-card mb-5">
          <div class="card">
            <img src="image/product/thumb/fried-rice.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Beli 2 Gratis 2</h5>
              <p class="card-text">Nasi goreng adalah salah satu hidangan khas Indonesia yang sangat populer. Terbuat
                dari nasi yang digoreng dalam minyak atau margarin, dan biasanya dicampur dengan bumbu-bumbu seperti
                bawang putih, bawang merah, cabai, kecap manis, serta bahan tambahan lain seperti telur, daging, atau
                udang.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 hovered-card mb-5">
          <div class="card">
            <img src="image/product/thumb/grilled-meat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Beli 2 Gratis 2</h5>
              <p class="card-text">Daging panggang, juga dikenal sebagai barbecue atau "BBQ," adalah metode memasak
                populer yang melibatkan memanggang daging di atas api terbuka atau bara panas. Ini memberikan rasa asap
                dan karamelisasi pada daging, menjadikannya sangat lezat dan empuk.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 hovered-card mb-5">
          <div class="card">
            <img src="image/product/thumb/coffee.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cappucinno Gratis</h5>
              <p class="card-text">Cappuccino adalah minuman kopi yang terdiri dari espresso, susu panas, dan busa susu.
                Ini adalah minuman yang sempurna untuk dinikmati di pagi hari atau sebagai peneman saat bersantai.</p>
            </div>
          </div>
        </div>

        <div class="mt-4 d-flex justify-content-center">
          <a href="promo.html" class="btn btn-warning btn-lg text-light">Lihat Semua Promo</a>
        </div>
      </div>
    </div>
  </div>

  <!--service-->
  <div class="container-fluid py-5 main-color">
    <div class="container">
      <h2 class="text-light text-center mb-5">Kami Melayani</h2>

      <div class="row">
        <div class="col-sm-6 col-lg-4 hovered-card mb-3">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-bicycle display-6"></i>
            </div>
          </div>
          <div class="mt-3 text-white text-center">
            <h5>Delivery</h5>
            <p>Kami menyediakan layanan pengiriman untuk memudahkan Anda menikmati hidangan favorit Anda di mana pun
              Anda berada. Silahkan pesan melalui nomor berikut: 0812345678910 untuk mengatur pengiriman tepat waktu dan
              aman. Nikmati kemudahan memesan makanan dan minuman favorit Anda tanpa harus meninggalkan kenyamanan rumah
              atau kantor.</p>

          </div>
        </div>

        <div class="col-sm-6 col-lg-4 hovered-card mb-3">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-bag-fill display-6"></i>
            </div>
          </div>
          <div class="mt-3 text-white text-center">
            <h5>Take Away</h5>
            <p>Kami menyediakan layanan take away untuk memudahkan Anda menikmati hidangan favorit Anda di mana pun Anda
              pergi. Silahkan pesan melalui nomor berikut: 0812345678910 atau langsung datang ke outlet kami untuk
              mengambil pesanan Anda. Nikmati kemudahan memesan makanan dan minuman favorit Anda dan bawa pulang untuk
              dinikmati di tempat yang Anda inginkan.</p>

          </div>
        </div>

        <div class="col-sm-6 col-lg-4 hovered-card mb-3">
          <div class="d-flex justify-content-center">
            <div class="icon-service d-flex align-items-center justify-content-center">
              <i class="bi bi-cup-straw display-6"></i>
            </div>
          </div>
          <div class="mt-3 text-white text-center">
            <h5>Dine In</h5>
            <p>Nikmati pengalaman makan di tempat dengan layanan dine in kami. Kami menyediakan lingkungan yang nyaman
              dan ramah untuk Anda menikmati hidangan favorit Anda bersama keluarga, teman, atau kolega. Nikmati
              kenyamanan ruangan kami sambil menikmati hidangan berkualitas dari menu kami. Staf kami siap melayani Anda
              dengan ramah dan profesional untuk memastikan pengalaman makan yang menyenangkan dan tak terlupakan.</p>


          </div>
        </div>
      </div>
    </div>
  </div>

  <!--produk-->
  <div class="container-fluid py-5">
    <div class="container">
      <h2 class="text-center mb-5">Paling Banyak Di Beli</h2>

      <div class="row">
        <div class="col-sm-6 col-md-3 hovered-card mb-5">
          <div class="card">
            <a href="image/product/thumb/french-fries.jpg" data-lightbox="produk-kentang-goreng"
              data-title="Kentang Goreng">
              <img src="image/product/thumb/french-fries.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body text-center">
              <h3 class="card-title text-warning">Kentang Goreng</h3>
              <p class="card-text">(Rekomendasi)</p>
              <h4 class="card-text text-warning">Rp 10.000</h4>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 hovered-card mb-5">
          <div class="card">
            <a href="image/product/thumb/fried-rice.jpg" data-lightbox="produk-nasi-goreng" data-title="Nasi Goreng">
              <img src="image/product/thumb/fried-rice.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body text-center">
              <h3 class="card-title text-warning">Nasi Goreng</h3>
              <p class="card-text">(Rekomendasi)</p>
              <h4 class="card-text text-warning">Rp 10.000</h4>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 hovered-card mb-5">
          <div class="card">
            <a href="image/product/thumb/steak.jpg" data-lightbox="produk-steak" data-title="Steak">
              <img src="image/product/thumb/steak.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body text-center">
              <h3 class="card-title text-warning">Steak</h3>
              <p class="card-text">(Rekomendasi)</p>
              <h4 class="card-text text-warning">Rp 10.000</h4>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 hovered-card mb-5">
          <div class="card">
            <a href="image/product/thumb/coffee.jpg" data-lightbox="produk-Cappucinno" data-title="Cappuccino">
              <img src="image/product/thumb/coffee.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body text-center">
              <h3 class="card-title text-warning">Cappucinno</h3>
              <p class="card-text">(Rekomendasi)</p>
              <h4 class="card-text text-warning">Rp 10.000</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-5 d-flex justify-content-center">
        <a href="/produk" class="btn btn-warning btn-lg text-light">
          Lihat Lainnya
        </a>
      </div>
    </div>
  </div>

  <!--reservasi-->
  <div class="container-fluid py-5 main-color">
    <div class="container">
      <h2 class="text-light text-center">Reservasi</h2>
      <p class="text-light text-center">
        Jangan Sampai Kehabisan Tempat. Reservasi Sekarang!!!
      </p>

      <form class="text-white col-md-6 offset-md-3 mt-4">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama">
        </div>
        <div class="mb-3">
          <label for="nokontak" class="form-label">No.Kontak</label>
          <input type="text" class="form-control" id="nokontak">
        </div>
        <div>
          <label for="jumlahmeja" class="form-label">Jumlah Meja</label>
          <input type="number" class="form-control" id="jumlahmeja">
        </div>
        <div class="mt-4">
          <button class="btn btn-warning text-light w-100">Reservasi</button>
        </div>
      </form>
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
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Anda berhasil reservasi!');
    });
</script>

</body>

</html>