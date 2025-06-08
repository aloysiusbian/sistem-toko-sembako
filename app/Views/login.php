<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .product-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(82, 20, 196, 0.2);
    }
    .left-section {
      background-color: #f8f9fa;
      padding: 20px;
    }
    .login-card {
      max-width: 400px;
      margin: auto;
    }
    .vh-100 {
      min-height: 100vh;
    }
  </style>
</head>
<body>

<!-- Judul di Tengah -->
<!-- Judul dan Logo di Tengah -->
<div class="text-center my-4">
  <h1 class="mb-3">TOKO SEMBAKO</h1>
  <img src="LogoSembakoKu.png" alt="SembakoKu" height="70px">
</div>

<div class="container-fluid">
  <div class="row vh-100">

    <!-- Kiri: Gambar Produk -->
    <div class="col-md-6 left-section d-flex align-items-center">
      <div class="row w-100 g-3">
        <?php
          for ($i = 1; $i <= 6; $i++) {
              echo "<div class='col-4'><img src='mantap{$i}.jpeg' class='product-img' alt='Produk $i'></div>";
          }
        ?>
      </div>
    </div>

    <!-- Kanan: Login Form -->
    <div class="col-md-6 d-flex align-items-center bg-white">
      <div class="card shadow p-4 login-card">
        <h3 class="text-center mb-4">Login</h3>
        <form method="POST" action="login.php">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
          <div class="text-center mt-3">
            <small>Belum punya akun? <a href="register.php">Daftar sekarang</a></small>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
