<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2 class="mb-4">Riwayat Pembelian</h2>
    <div class="row">
        <?php foreach ($riwayat as $item): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <img src="<?= base_url('uploads/' . $item['gambar']) ?>" class="card-img-top" alt="<?= $item['nama_produk'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['nama_produk'] ?></h5>
                        <p class="card-text">Jumlah: <?= $item['jumlah'] ?></p>
                        <p class="card-text">Total Harga: Rp<?= number_format($item['total_harga'], 0, ',', '.') ?></p>
                        <p class="card-text text-muted"><small>Tanggal: <?= date('d M Y', strtotime($item['tanggal_pembelian'])) ?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
