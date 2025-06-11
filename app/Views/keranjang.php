<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keranjang Belanja - SembakoKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Lato', sans-serif;
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

        .cart-item {
            transition: all 0.3s ease;
        }

        .cart-item:hover {
            background-color: #f8f9fa;
        }

        .quantity-input {
            width: 60px;
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-white border-bottom py-3 fixed-top">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a class="navbar-brand d-flex align-items-center" href="/beranda">
                    <img src="LogoSembakoKu.png" alt="Logo" height="40" class="me-2">
                </a>
                <!-- Search Bar -->
                <form class="d-flex w-50 me-3">
                    <input class="form-control rounded-start-pill" type="search" placeholder="Search" />
                    <button class="btn btn-success rounded-end-pill px-4" type="submit">Search</button>
                </form>
                <!-- Account & Cart Buttons -->
                <div>
                    <a href="/keranjang" class="btn btn-success rounded-pill me-2">
                        <i class="bi bi-cart-fill me-1"></i> Keranjang
                    </a>
                    <a href="#" class="btn btn-outline-success rounded-pill">
                        <i class="bi bi-person-fill me-1"></i> Account
                    </a>
                </div>
            </div>
        </nav>
        <br><br>
    </header>

    <div class="container my-5 pt-4">
        <h2 class="fw-bold mb-4 text-center text-success">Keranjang Belanja</h2>
        
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (empty($items)): ?>
            <div class="text-center py-5">
                <i class="bi bi-cart-x" style="font-size: 5rem; color: #6c757d;"></i>
                <h4 class="mt-3">Keranjang belanja Anda kosong</h4>
                <p class="text-muted">Mulai belanja sekarang dan temukan produk terbaik kami</p>
                <a href="/produk" class="btn btn-success rounded-pill px-4">Belanja Sekarang</a>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <?php foreach ($items as $item): ?>
                                <div class="cart-item d-flex align-items-center py-3 border-bottom">
                                    <img src="<?= $item['gambar'] ?>" alt="<?= $item['nama_produk'] ?>" class="img-fluid rounded" style="width: 80px; height: 80px; object-fit: cover;">
                                    <div class="ms-3 flex-grow-1">
                                        <h5 class="mb-1"><?= $item['nama_produk'] ?></h5>
                                        <p class="mb-1 text-success fw-bold">Rp <?= number_format($item['harga'], 0, ',', '.') ?></p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <form action="/keranjang/update/<?= $item['id'] ?>" method="post" class="me-3">
                                            <?= csrf_field() ?>
                                            <div class="input-group">
                                                <button class="btn btn-outline-secondary minus-btn" type="button">-</button>
                                                <input type="number" name="quantity" class="form-control quantity-input" value="<?= $item['jumlah'] ?>" min="1">
                                                <button class="btn btn-outline-secondary plus-btn" type="button">+</button>
                                            </div>
                                        </form>
                                        <form action="/keranjang/remove/<?= $item['id'] ?>" method="post">
                                            <?= csrf_field() ?>
                                            <button type="submit" class="btn btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Ringkasan Belanja</h5>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Total Harga</span>
                                <span class="fw-bold">Rp <?= number_format(array_reduce($items, function($carry, $item) {
                                    return $carry + ($item['harga'] * $item['jumlah']);
                                }, 0), 0, ',', '.') ?></span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span>Total Item</span>
                                <span class="fw-bold"><?= array_reduce($items, function($carry, $item) {
                                    return $carry + $item['jumlah'];
                                }, 0) ?></span>
                            </div>
                            <a href="/checkout" class="btn btn-success w-100 py-2">Checkout</a>
                            <a href="/produk" class="btn btn-outline-success w-100 mt-2 py-2">Lanjutkan Belanja</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <footer class="bg-light text-dark mt-5 pt-4 pb-3 border-top">
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
                        <li><a href="/beranda" class="text-decoration-none text-dark">Beranda</a></li>
                        <li><a href="/produk" class="text-decoration-none text-dark">Produk</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Favorit</a></li>
                        <li><a href="/keranjang" class="text-decoration-none text-dark">Keranjang</a></li>
                    </ul>
                </div>

                <!-- Kontak & Sosial Media -->
                <div class="col-md-4 mb-3">
                    <h6 class="fw-bold">Hubungi Kami</h6>
                    <p class="small mb-1"><i class="bi bi-envelope-fill me-2"></i> support@sembakoku.id</p>
                    <p class="small mb-1"><i class="bi bi-telephone-fill me-2"></i> +62 812-3456-7890</p>
                    <div>
                        <a href="#" class="text-success me-3 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-success me-3 fs-5"><i class="bi bi-instagram"></i></a>
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
    <script>
        // Quantity buttons functionality
        document.querySelectorAll('.plus-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentNode.querySelector('.quantity-input');
                input.value = parseInt(input.value) + 1;
                input.closest('form').submit();
            });
        });

        document.querySelectorAll('.minus-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentNode.querySelector('.quantity-input');
                if (parseInt(input.value) > 1) {
                    input.value = parseInt(input.value) - 1;
                    input.closest('form').submit();
                }
            });
        });

        // Auto submit when quantity changes
        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function() {
                if (this.value > 0) {
                    this.closest('form').submit();
                }
            });
        });
    </script>
</body>

</html>