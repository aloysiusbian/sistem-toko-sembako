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
                <!-- Search Bar -->
                <form class="d-flex w-50 me-3">
                    <input class="form-control rounded-start-pill" type="search" placeholder="Search" />
                    <button class="btn btn-success rounded-end-pill px-4" type="submit">Search</button>
                </form>
                <!-- Account & Cart Buttons -->
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
    </header>

    <!-- Produk -->
    <div class="container mt-5 pt-4">
        <div class="row g-4">
            <!-- Loop produk mulai di sini -->
            <div class="col-md-3" *ngFor="let produk of produkList">
                <div class="col-md-6">
                    <div class="main-image">
                        <img src="beras.png" alt="Beras" class="img-fluid">
                    </div>
                    <div class="p-2">
                        <small class="text-muted">Vegetable</small>
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>₹ 40.00</strong><br>
                                <small class="text-decoration-line-through text-muted">₹ 60.00</small>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="mt-2 mb-1">Tomato</p>
                        <div class="input-group input-group-sm">
                            <button class="btn btn-success">Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Salin blok col-md-3 ini untuk tiap produk -->
    </div>
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
                        <li><a href="#" class="text-decoration-none text-dark">Beranda</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Produk</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Favorit</a></li>
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