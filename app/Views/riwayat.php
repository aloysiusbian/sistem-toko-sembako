<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Riwayat Pembayaran</h2>
    <table class="table table-bordered mt-4">
        <thead class="table-light">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Metode</th>
                <th>Total</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($riwayat)): ?>
                <?php foreach ($riwayat as $item): ?>
                    <tr>
                        <td><?= esc($item['nama']) ?></td>
                        <td><?= esc($item['alamat']) ?></td>
                        <td><?= esc($item['metode']) ?></td>
                        <td>Rp<?= number_format($item['total'], 0, ',', '.') ?></td>
                        <td><?= esc($item['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Belum ada riwayat pembayaran.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>

