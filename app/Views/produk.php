<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $product->name ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('uploads/'.$product->image) ?>" class="img-fluid rounded-start" alt="<?= $product->name ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->name ?></h5>
                        <p class="card-text text-danger fs-3">Rp<?= number_format($product->price, 0, ',', '.') ?></p>
                        <p class="card-text"><small class="text-muted">Terjual: <?= $product->sold ?> | Rating: <?= $product->rating ?>/5</small></p>
                        <p class="card-text"><?= $product->description ?></p>
                        <button class="btn btn-warning">Masukkan Keranjang</button>
                        <button class="btn btn-danger">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
