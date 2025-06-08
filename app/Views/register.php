<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - SembakoKu</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts: Lato -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Lato', sans-serif;
      background-color: #f8faf9;
      margin: 0;
      padding: 0;
      height: 100vh;
    }

    .container-fluid {
      height: 100%;
    }

    .left-side {
      background-color: #e5f4ec;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .left-side img {
      max-width: 100%;
      height: auto;
    }

    .right-side {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      background-color: #ffffff;
    }

    .register-form {
      max-width: 450px;
      width: 100%;
    }

    .register-form h3 {
      color: #2e5f4d;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }

    .form-control {
      background-color: #eef2f1;
      border: none;
      border-radius: 12px;
      padding: 10px 15px;
      color: #2e5f4d;
    }

    .form-control::placeholder {
      color: #a0b3aa;
    }

    .btn-register {
      background-color: #198754;
      color: white;
      border-radius: 30px;
      padding: 10px;
      font-weight: bold;
    }

    .btn-register:hover {
      background-color: #264e3f;
    }

    .form-text a {
      color: #2e5f4d;
      font-size: 0.9rem;
      text-decoration: none;
    }

    .form-text a:hover {
      text-decoration: underline;
    }

    .logo-top {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 60px;
      z-index: 999;
    }

    @media (max-width: 768px) {
      .left-side {
        display: none;
      }
    }
  </style>
</head>
<body>
  <!-- Logo di pojok kiri atas -->
  <img src="LogoSembakoKu.png" alt="SembakoKu Logo" class="logo-top" style="height: 50px; width: fit-content; padding-left: 20px;">

  <div class="container-fluid">
    <div class="row h-100">
      <!-- Kiri: Gambar Sembako -->
      <div class="col-md-6 left-side">
        <img src="sembako-image.png" alt="Ilustrasi Sembako">
      </div>

      <!-- Kanan: Form Register -->
      <div class="col-md-6 right-side">
        <div class="register-form text-center">
          <h3>Daftar Akun Baru</h3>

          <form action="/register" method="post">
            <div class="mb-3 text-start">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3 text-start">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email aktif" required>
            </div>
            <div class="mb-3 text-start">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Buat username unik" required>
            </div>
            <div class="mb-3 text-start">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Buat password" required>
            </div>
            <div class="mb-4 text-start">
              <label for="confirm_password" class="form-label">Konfirmasi Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Ulangi password" required>
            </div>
            <button type="submit" class="btn btn-register w-100">Daftar</button>
            <p class="mt-3 mb-0">Sudah punya akun? <a href="/login">Login di sini</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
