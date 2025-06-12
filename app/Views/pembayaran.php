<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4">Formulir Pembayaran</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="/pembayaran/proses" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Pengiriman</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="metode" class="form-label">Metode Pembayaran</label>
            <select name="metode" class="form-select" required>
                <option value="">-- Pilih --</option>
                <option value="transfer">Transfer Bank</option>
                <option value="cod">Bayar di Tempat (COD)</option>
                <option value="ewallet">E-Wallet</option>
            </select>
        </div>
        <div class="mb-3">
            <strong>Total: Rp <?= number_format($totalHarga, 0, ',', '.') ?></strong>
        </div>
        <button type="submit" class="btn btn-success">Bayar Sekarang</button>
    </form>
</div>
</body>
</html>
