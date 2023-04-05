<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "PPL" ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        img {
            width: 150px !important;
            height: auto !important;
        }
        table{
            align-items: center;
        }
    </style>
</head>
<div class="container">
    <h1 class="text-center">KERANJANG</h1>
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Kuantitas</th>
                <th>Sub Total</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <td><?= $item['nama_barang'] ?></td>
                    <td>
                        <img src="<?= $item['nama_file'] ?>">
                    </td>
                    <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
                    <td><?= $item['kuantitas'] ?></td>
                    <td>Rp <?= number_format($item['harga'] *  $item['kuantitas'], 0, ',', '.')?></td>
                    <td>
                        <a href="<?=site_url('cart/remove/'.$item['id_barang'])?>">
                        <i class="fa-sharp fa-solid fa-trash" style="color: #e14141;width:40px;height:auto"></i>
                    </a>
                    </td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td colspan="5" align="right">Total</td>
                <td><?= number_format($total, 0, ',', '.')?></td>
            </tr>
        </tbody>
    </table>
    <a href="<?= site_url('barang') ?>">
        <button class="btn btn-primary">
            Continue Shopping
        </button>
    </a>
    <a href="<?= site_url('checkout') ?>">
        <button class="btn btn-success">
            Checkout
        </button>
    </a>

</div>