<?php 
require 'koneksi.php';
$kamar = query("SELECT * FROM kamar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- link bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rasa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="bg-primary fixed-top">
        <div class="logo">
            <a href="">
                <h4>Rifqa Hotel</h4>
            </a>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#jeniskamar">Jenis Kamar </a></li>
            <li><a href="galery.html">Galery</a></li>
            <li><a href="#">Biodata</a></li>
            <li><a href="data.php">Data</a></li>
        </ul>
    </nav>
<div class="container-fluid">
    <!-- 5 column 1 row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center pt-5">Data Kamar</h3>
                </div>
                <div class="card-body">
                    <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
                    <a href="hapussemua.php" class="btn btn-danger" 
                    onclick="return confirm('Apakah ingin menghapus?');">Hapus Semua Data</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Kamar</th>
                                <th>Fasilitas</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kamar as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row["jenis"]; ?></td>
                                <td><?= $row["fasilitas"]; ?></td>
                                <td>Rp.<?= $row["harga"]; ?></td>
                                <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                                <td>
                                    <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-success">Ubah</a>
                                    <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger"
                                        onclick="return confirm('Apakah ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</body>
</html>