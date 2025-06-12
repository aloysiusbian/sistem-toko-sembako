<div class="container my-5 text-center">
    <h2 class="text-success">Pembayaran Berhasil</h2>
    <p>Terima kasih, <?= esc($nama) ?>!</p>
    <p>Total yang dibayarkan: <strong>Rp <?= number_format($total, 0, ',', '.') ?></strong></p>
    <a href="/beranda" class="btn btn-outline-success mt-3">Kembali ke Beranda</a>
</div>
