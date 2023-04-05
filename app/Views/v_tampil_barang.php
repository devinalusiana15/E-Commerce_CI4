<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Produk</title>
</head>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">SportDev</span>
    </div>
</nav>
<h3 class="text-center">Data Produk</h3>
<br>

<body>

    <div class="container">
        <div class="d-grid gap-2 d-md-block">
            <a href="addbarang">
                <button class="btn btn-primary">
                    Tambah Produk
                </button>
            </a>
        </div>
        <br>
        <div class="row">
            <?php foreach ($barang as $brg) : ?>
                <div class="card ml-5 mb-3" style="width:20rem;">
                    <img src="<?= $brg['nama_file'] ?>">
                    <div class="card-body d-flex flex-column">
                        <h4><?= $brg['nama_barang'] ?></h4>
                        <p class="card-text">Rp <?= number_format($brg['harga'], 0, ',', '.') ?></p>
                        <p class="card-text">stok: <?= $brg['stok'] ?></p>
                        <a href="<?= site_url('cart/buy/' . $brg['id_barang']) ?>">
                            <button class=" btn btn-success text-center" style="margin-top: auto;">Add to Cart</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>