<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<section id="form-barang-store">
  <?php
  if (isset($errors)) {
    echo '<div style="width: 300px"; border-radius: 5px; >';
    echo '<ul style="background-color: red; color: white; padding: 10px;">';
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo '</ul>';
    echo '</div>';
  }
  ?>
  <div class="container ml-3">
    <h3>Tambah Barang</h3>
    <?= form_open('storebarang'); ?>
    <form>
      <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label><br>
        <input type="text" name="nama_barang" id="nama_barang" value="<?= set_value('nama_barang') ?>">
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label><br>
        <input type="number" name="harga" id="harga" value="<?= set_value('harga') ?>">
      </div>
      <div class="mb-3">
        <label for="stok" class="form-label">Stok</label><br>
        <input type="number" name="stok" id="stok" value="<?= set_value('stok') ?>">
      </div>
      <div class="mb-3">
        <label for="nama_file" class="form-label">Link Gambar</label><br>
        <input type="text" name="nama_file" id="nama_file" value="<?= set_value('nama_file') ?>">
      </div>
      <a href="/" class="btn btn-secondary"> Kembali</a>
      <button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Submit</button>
    </form>
    <?= form_close(); ?>
  </div>
</section>