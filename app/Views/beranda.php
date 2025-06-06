<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Sembako Online</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        header {
            background-color: #2e7d32;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            margin-left: 1rem;
            text-decoration: none;
        }

        .hero {
            background: url('https://source.unsplash.com/1600x600/?grocery') no-repeat center center;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .product {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 1rem;
        }

        .product img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .product h3 {
            margin: 0.5rem 0;
        }

        .product p {
            color: #555;
        }

        .product button {
            background: #2e7d32;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>

<body>

    <header>
        <h1>Toko Sembako</h1>
        <nav>
            <a href="#">Beranda</a>
            <a href="#">Produk</a>
            <a href="#">Tentang Kami</a>
            <a href="#">Kontak</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Belanja Sembako Mudah dan Terjangkau</h1>
    </section>

    <section class="container">
        <h2>Produk Unggulan</h2>
        <div class="products">
            <div class="product">
                <img src="https://source.unsplash.com/300x200/?rice" alt="Beras">
                <h3>Beras Premium 5kg</h3>
                <p>Rp 60.000</p>
                <button>Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="https://source.unsplash.com/300x200/?cooking-oil" alt="Minyak Goreng">
                <h3>Minyak Goreng 1L</h3>
                <p>Rp 18.000</p>
                <button>Beli Sekarang</button>
            </div>
            <div class="product">
                <img src="https://source.unsplash.com/300x200/?sugar" alt="Gula">
                <h3>Gula Pasir 1kg</h3>
                <p>Rp 14.000</p>
                <button>Beli Sekarang</button>
            </div>
        </div>
    </section>

    <footer>
        &copy; 2025 Toko Sembako. Semua hak dilindungi.
    </footer>

</body>

</html>