<!DOCTYPE html>
<html lang="id">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Pembayaran - SembakoKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembayaran - SembakoKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
>>>>>>> 62dca86749ef226867ac89f1da8c5b7ee30ef6ea
    <style>
        body {
            font-family: "Lato", sans-serif;
            padding-top: 70px;
        }
<<<<<<< HEAD

        .fw-bold {
            font-weight: 700;
        }

        .riwayat-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

=======
        .riwayat-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
>>>>>>> 62dca86749ef226867ac89f1da8c5b7ee30ef6ea
        .riwayat-item:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
<<<<<<< HEAD
    <nav class="navbar navbar-light bg-white border-bottom py-3 fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="/beranda">
                <img src="/LogoSembakoKu.png" alt="Logo" height="40" class="me-2">
            </a>
            <div>
                <a href="/riwayat" class="btn btn-outline-success rounded-pill me-2">
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

    <div class="container my-5">
        <h2 class="fw-bold mb-4">Riwayat Pembayaran</h2>

        <?php if (empty($riwayat)) : ?>
            <div class="text-center py-5">
                <i class="bi bi-receipt" style="font-size: 5rem; color: #6c757d;"></i>
                <h4 class="mt-3">Belum ada riwayat pembayaran</h4>
                <p class="text-muted">Belanja dulu untuk melihat riwayat di sini.</p>
                <a href="/beranda" class="btn btn-success rounded-pill px-4">Belanja Sekarang</a>
            </div>
        <?php else : ?>
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <?php foreach ($riwayat as $item) : ?>
                        <div class="riwayat-item">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="fw-bold mb-1"><?= esc($item['nama']) ?></h5>
                                    <p class="mb-1">Alamat: <?= esc($item['alamat']) ?></p>
                                    <p class="mb-1">Metode: <?= esc($item['metode']) ?></p>
                                    <small class="text-muted">Waktu: <?= esc($item['created_at']) ?></small>
                                </div>
                                <div class="text-end">
                                    <span class="fw-bold text-success">Rp <?= number_format($item['total'], 0, ",", ".") ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <footer class="bg-light text-dark mt-5 pt-4 pb-3 border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold text-success">SembakoKu</h5>
                    <p class="small">Toko sembako online terpercaya yang menyediakan kebutuhan harian Anda dengan harga terbaik dan pengiriman cepat.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h6 class="fw-bold">Navigasi</h6>
                    <ul class="list-unstyled small">
                        <li><a href="/beranda" class="text-decoration-none text-dark">Beranda</a></li>
                        <li><a href="/keranjang" class="text-decoration-none text-dark">Keranjang</a></li>
                    </ul>
                </div>
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
</body>

</html>
=======

<nav class="navbar navbar-light bg-white border-bottom py-3 fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand d-flex align-items-center" href="/beranda">
            <img src="/LogoSembakoKu.png" alt="Logo" height="40" class="me-2">
        </a>
        <div>
            <a href="/riwayat" class="btn btn-outline-success rounded-pill me-2">
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

<div class="container my-5">
    <h2 class="fw-bold mb-4">Riwayat Pembayaran</h2>

    <?php if (empty($riwayat)): ?>
        <div class="text-center py-5">
            <i class="bi bi-receipt" style="font-size: 5rem; color: #6c757d;"></i>
            <h4 class="mt-3">Belum ada riwayat pembayaran</h4>
            <p class="text-muted">Belanja dulu untuk melihat riwayat di sini.</p>
            <a href="/beranda" class="btn btn-success rounded-pill px-4">Belanja Sekarang</a>
        </div>
    <?php else: ?>
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <?php foreach ($riwayat as $item): ?>
                    <div class="riwayat-item">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="fw-bold mb-1"><?= esc($item['nama']) ?></h5>
                                <p class="mb-1">Alamat: <?= esc($item['alamat']) ?></p>
                                <p class="mb-1">Metode: <?= esc($item['metode']) ?></p>
                                <p class="mb-1">Produk:<br><span class="text-muted"><?= nl2br(esc($item['produk'])) ?></span></p>
                                <small class="text-muted">Waktu: <?= esc($item['created_at']) ?></small>
                            </div>
                            <div class="text-end">
                                <span class="fw-bold text-success">Rp <?= number_format($item['total'], 0, ",", ".") ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <?php endif ?>
</div>

<footer class="bg-light text-dark mt-5 pt-4 pb-3 border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold text-success">SembakoKu</h5>
                <p class="small">Toko sembako online terpercaya yang menyediakan kebutuhan harian Anda dengan harga terbaik dan pengiriman cepat.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold">Navigasi</h6>
                <ul class="list-unstyled small">
                    <li><a href="/beranda" class="text-decoration-none text-dark">Beranda</a></li>
                    <li><a href="/keranjang" class="text-decoration-none text-dark">Keranjang</a></li>
                </ul>
            </div>
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

</body>
</html>
>>>>>>> 62dca86749ef226867ac89f1da8c5b7ee30ef6ea
