<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - SembakoKu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .image-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
      justify-items: center;
    }

    .image-grid img {
      width: 200px;
      height: auto;
      object-fit: contain;
    }

    .right-side {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      background-color: #ffffff;
    }

    .login-form {
      max-width: 400px;
      width: 100%;
    }

    .login-form h3 {
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

    .btn-login {
      background-color: #2e5f4d;
      color: white;
      border-radius: 30px;
      padding: 10px;
      font-weight: bold;
    }

    .btn-login:hover {
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

    .logo {
      width: 60px;
      margin-bottom: 10px;
    }

    @media (max-width: 768px) {
      .left-side {
        display: none;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row h-100">
      <!-- Kolom Kiri -->
      <div class="col-md-6 left-side">
        <div class="image-grid">
          <img src="mantap1.jpeg" alt="Gambar 1">
          <img src="mantap2.jpeg" alt="Gambar 2">
          <img src="mantap3.jpeg" alt="Gambar 3">
          <img src="mantap4.jpeg" alt="Gambar 4">
          <img src="mantap5.jpeg" alt="Gambar 5">
          <img src="mantap6.jpeg" alt="Gambar 6">
        </div>
      </div>

      <!-- Kolom Kanan -->
      <div class="col-md-6 right-side">
        <div class="login-form text-center">
          <img src="LogoSembakoKu.png" alt="SembakoKu Logo" class="logo">
          <h3>Login ke SembakoKu</h3>

          <form action="/login" method="post">
            <div class="mb-3 text-start">
              <label for="username" class="form-label">Username / Email</label>
              <input type="text" class="form-control" id="username" name="username"
                placeholder="Masukkan username atau email" required>
            </div>
            <div class="mb-2 text-start">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password"
                placeholder="Masukkan password" required>
            </div>
            <div class="text-end mb-3">
              <a href="#" class="form-text">Lupa Password?</a>
            </div>
            <button type="submit" class="btn btn-login w-100">Login</button>
            <p class="mt-3 mb-0">Belum punya akun? <a href="/register">Daftar Sekarang</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
