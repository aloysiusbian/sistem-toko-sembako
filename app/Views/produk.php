<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Produk - SembakoKu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    .main-image {
      width: 100%;
      border-radius: 10px;
      background-color: #f8f9fa;
      padding: 2rem;
    }

    .price {
      font-size: 1.5rem;
      font-weight: bold;
      color: #000;
    }

    .btn-success {
      background-color: #198754;
      border-color: #198754;
      border-radius: 30px;
    }

    footer {
      background-color: #f8f9fa;
      font-size: 0.95rem;
    }

    .footer-title {
      font-weight: 700;
    }

    .text-success {
      color: #28a745 !important;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-light bg-white border-bottom py-3 fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="LogoSembakoKu.png" alt="Logo" height="40" class="me-2">
      </a>
      <form class="d-flex w-50 me-3">
        <input class="form-control rounded-start-pill" type="search" placeholder="Search" />
        <button class="btn btn-success rounded-end-pill px-4" type="submit">Search</button>
      </form>
      <div>
        <a href="#" class="btn btn-outline-success rounded-pill me-2">
          <i class="bi bi-cart-fill me-1"></i> Keranjang
        </a>
        <a href="#" class="btn btn-success rounded-pill">
          <i class="bi bi-person-fill me-1"></i> Account
        </a>
      </div>
    </div>
  </nav>
  <br><br>

  <div class="container my-5">
    <div class="row align-items-center">
      <!-- Gambar produk -->
      <div class="col-md-6">
        <div class="main-image">
          <img src="<?= $produk['gambar']?>" alt="<?= esc($produk['nama_produk']) ?>" class="img-fluid">
        </div>
      </div>

      <!-- Info produk -->
      <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="fw-bold"><?= esc($produk['nama_produk']) ?></h2>
        <div class="price mb-3">Rp <?= number_format($produk['harga'], 0, ',', '.') ?></div>
        <p class="text-muted"><?= esc($produk['deskripsi']) ?></p>

        <hr />
        <button class="btn btn-success w-100 py-2 fs-5">Add to Cart</button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="border-top pt-4 pb-3">
    <div class="container">
      <div class="row text-muted">
        <div class="col-md-4 mb-3">
          <h5 class="text-success footer-title">SembakoKu</h5>
          <p>Toko sembako online terpercaya yang menyediakan kebutuhan harian Anda dengan harga terbaik dan pengiriman cepat.</p>
        </div>
        <div class="col-md-4 mb-3">
          <h6 class="footer-title">Navigasi</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-decoration-none text-dark">Beranda</a></li>
            <li><a href="#" class="text-decoration-none text-dark">Produk</a></li>
            <li><a href="#" class="text-decoration-none text-dark">Favorit</a></li>
            <li><a href="#" class="text-decoration-none text-dark">Keranjang</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-3">
          <h6 class="footer-title">Hubungi Kami</h6>
          <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i> support@sembakoku.id</p>
          <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> +62 812-3456-7890</p>
          <a href="#" class="text-success me-3 fs-5"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-success me-3 fs-5"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-success fs-5"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <hr />
      <div class="text-center small text-muted">
        &copy; 2025 SembakoKu. All rights reserved.
      </div>
    </div>
  </footer>

</body>

</html>