<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - SembakoKu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Lato', sans-serif;
    }

    .container-fluid {
      height: 100vh;
    }

    .left-side {
      background-image: url('background2.jpg');
      background-size: cover;
      background-position: center;
      height: 100%;
      position: relative;
    }

    .left-side .logo {
      position: absolute;
      top: 30px;
      left: 30px;
      width: 120px;
    }

    .right-side {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #ffffff;
      height: 100%;
      padding: 2rem;
    }

    .login-form {
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-form h3 {
      font-weight: 700;
      color: #2e5f4d;
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
      background-color: #198754;
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

    @media (max-width: 768px) {
      .left-side {
        display: none;
      }
    }

    .logo-top {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 60px;
      z-index: 999;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row h-100">
      <!-- Bagian Kiri -->
      <div class="col-md-6 left-side">
        <img src="LogoSembakoKu.png" alt="SembakoKu Logo" class="logo-top" style="height: 50px; width: fit-content; padding-left: 20px;">
      </div>

      <!-- Bagian Kanan -->
      <div class="col-md-6 right-side">
        <div class="login-form">

          <h3>Login ke SembakoKu</h3>


          <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= session()->getFlashdata('success') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <!-- Menampilkan pesan error login -->
          <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?= session()->getFlashdata('error') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

         
          <form action="/login" method="post">
            <?= csrf_field() ?>

            <div class="mb-3 text-start">
              <label for="username" class="form-label">Username / Email</label>
              <input type="text" class="form-control <?= session('errors.username') ? 'is-invalid' : '' ?>"
                id="username" name="username"
                placeholder="Masukkan username atau email"
                value="<?= old('username') ?>" required>
              <?php if (session('errors.username')): ?>
                <div class="invalid-feedback">
                  <?= session('errors.username') ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="mb-2 text-start">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>"
                id="password" name="password"
                placeholder="Masukkan password" required>
              <?php if (session('errors.password')): ?>
                <div class="invalid-feedback">
                  <?= session('errors.password') ?>
                </div>
              <?php endif; ?>
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
</body>

</html>