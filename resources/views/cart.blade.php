<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasa Tourism | Keranjang Belanja</title>
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
                        <a class="nav-link" href="/promo">Promo</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="/cart"><i class="bi bi-cart3"></i> Keranjang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--table-->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center my-5">Keranjang Belanja</h2>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pesanan</th>
                            <th>Harga</th>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table content will be generated dynamically -->
                    </tbody>
                </table>
            </div>
            <button id="checkoutButton" class="btn btn-warning">Checkout</button>
        </div>
    </div>

  <!--footer-->
<div class="container-fluid py-3 bg-dark text-light fixed-bottom">
    <div class="container d-flex justify-content-between">
      <label>&copy;2024 Rasa Tourism</label>
      <label>Created by kelompok 8</label>
    </div>
  </div>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>

    <script>
        window.onload = function() {
            var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
            var tableBody = document.querySelector('.table tbody');
            var total = 0;

            for (var i = 0; i < cartItems.length; i++) {
                var item = cartItems[i];
                var row = tableBody.insertRow();
                var indexCell = row.insertCell(0);
                var nameCell = row.insertCell(1);
                var priceCell = row.insertCell(2);
                var actionCell = row.insertCell(3);

                indexCell.textContent = i + 1;
                nameCell.textContent = item.name;
                priceCell.textContent = 'Rp ' + item.price;

                var deleteButton = document.createElement('button');
                deleteButton.textContent = 'Hapus';
                deleteButton.classList.add('btn', 'btn-danger', 'btn-sm');
                deleteButton.onclick = createRemoveHandler(i);
                actionCell.appendChild(deleteButton);

                total += item.price;
            }

            var totalRow = tableBody.insertRow();
            var totalCell = totalRow.insertCell(0);
            totalCell.colSpan = 4;
            totalCell.textContent = 'Total: Rp ' + total;
        }

        function createRemoveHandler(index) {
            return function() {
                removeItem(index);
            };
        }

        function removeItem(index) {
            var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
            cartItems.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cartItems));
            location.reload();
        }

        // Checkout Functionality
        document.getElementById('checkoutButton').addEventListener('click', function() {
            // Clear the cart
            localStorage.removeItem('cart');
            // Display success notification
            alert('Berhasil checkout');
            // Redirect to a thank you page or any other appropriate action
            // window.location.href = 'thankyou.html';
        });
    </script>
</body>
</html>
