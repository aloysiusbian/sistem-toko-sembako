<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Sembako Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            padding-top: 70px; /* Untuk navbar fixed */
        }

        h1,
        h2,
        h3,
        .fw-bold {
            font-weight: 700;
        }

        p,
        span,
        a {
            font-weight: 400;
        }
        
        /* Style untuk card produk */
        .product-card {
            transition: all 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.1);
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .product-img-container {
            width: 100%;
            height: 0;
            padding-bottom: 100%; /* Membuat kotak 1:1 */
            position: relative;
            overflow: hidden;
            background-color: #f8f9fa;
        }
        
        .product-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .product-card .card-body {
            padding: 1rem;
        }
        
        .product-name {
            font-size: 0.95rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            height: 2.8em; /* Untuk 2 baris teks */
        }
        
        .product-price {
            font-size: 1rem;
            margin: 0.5rem 0;
        }
        
        .product-btn {
            padding: 0.25rem 1rem;
            font-size: 0.85rem;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-white border-bottom py-3 fixed-top">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="LogoSembakoKu.png" alt="Logo" height="40" class="me-2">
                </a>
                <!-- Logout & Cart Buttons -->
                <div>
                    <a href="#" class="btn btn-outline-success rounded-pill me-2">
                        <i class="bi bi-clock-history"></i> Riwayat
                    </a>
                    <a href="/keranjang" class="btn btn-outline-success rounded-pill me-2">
                        <i class="bi bi-cart-fill me-1"></i> Keranjang
                    </a>
                    <a href="/logout" class="btn btn-success rounded-pill">
                        <i class="bi bi-box-arrow-right me-1"></i> Log Out
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-4 pt-4">
        <h2 class="fw-bold mb-4 text-center text-success">Produk Kami</h2>
    </div>

    <div class="container mb-5">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
            <?php foreach ($daftarProduk as $produk): ?>
                <div class="col">
                    <div class="card h-100 product-card">
                        <div class="product-img-container">
                            <img src="<?= $produk['gambar'] ?>" class="product-img" alt="<?= $produk['nama_produk'] ?>">
                        </div>
                        <div class="card-body text-center d-flex flex-column">
                            <p class="product-name mb-auto"><?= $produk['nama_produk'] ?></p>
                            <h6 class="product-price fw-bold text-success">Rp <?= number_format($produk['harga'], 0, ',', '.') ?></h6>
                            <a href="<?= 'produk/detail/' . $produk['id'] ?>" class="btn btn-success rounded-pill product-btn mt-2">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="bg-light text-dark pt-4 pb-3 border-top">
        <div class="container">
            <div class="row">
                <!-- Tentang SembakoKu -->
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold text-success">SembakoKu</h5>
                    <p class="small">Toko sembako online terpercaya yang menyediakan kebutuhan harian Anda dengan harga terbaik dan pengiriman cepat.</p>
                </div>

                <!-- Link Navigasi -->
                <div class="col-md-4 mb-3">
                    <h6 class="fw-bold">Navigasi</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-decoration-none text-dark">Beranda</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Keranjang</a></li>
                    </ul>
                </div>

                <!-- Kontak & Sosial Media -->
                <div class="col-md-4 mb-3">
                    <h6 class="fw-bold">Hubungi Kami</h6>
                    <p class="small mb-1"><i class="bi bi-envelope-fill me-2"></i> support@sembakoku.id</p>
                    <p class="small mb-1"><i class="bi bi-telephone-fill me-2"></i> +62 812-3456-7890</p>
                    <div>
                        <a href="#" class="text-success me-3 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/aloysiusbian_/" class="text-success me-3 fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-success fs-5"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <hr>
            <div class="text-center small text-muted">
                &copy; 2025 SembakoKu. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>