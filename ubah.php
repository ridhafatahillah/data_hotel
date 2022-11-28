
<?php
require 'koneksi.php';
$id = $_GET["id"];

$kamar = query("SELECT * FROM kamar WHERE id = $id")[0];

if (isset($_POST['submit'])) {

if (ubah($_POST) > 0) {
    echo "
        <script>
            alert('data berhasil biubah!');
            document.location.href = 'data.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'data.php';
        </script>
    ";
}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- link bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
    <!-- <link rel="stylesheet" href="style/reset.css"> -->
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#007bff" fill-opacity="1" d="M0,160L20,170.7C40,181,80,203,120,197.3C160,192,200,160,240,133.3C280,107,320,85,360,106.7C400,128,440,192,480,229.3C520,267,560,277,600,256C640,235,680,181,720,170.7C760,160,800,192,840,176C880,160,920,96,960,106.7C1000,117,1040,203,1080,202.7C1120,203,1160,117,1200,74.7C1240,32,1280,32,1320,64C1360,96,1400,160,1420,192L1440,224L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>
    <div class="container pt-5">
    <h1 class="text-center" style="font-size: 30px;">Ubah data kamar hotel</h1>
    <form action="" method="post">
  <div class="form-group">
    <input type="hidden" name="id" value="<?= $kamar["id"]; ?>" >
    <label for="jenis">Jenis Kamar Hotel</label>
    <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan Jenis Kamar Hotel" value="<?= $kamar["jenis"]; ?>">
    <label for="fasilitas">Fasilitas Kamar Hotel</label>
    <input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder="Masukkan Fasilitas Kamar Hotel" value="<?= $kamar["fasilitas"];?>">
    <label for="harga">Harga Kamar Hotel</label>
    <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Kamar Hotel" value="<?= $kamar["harga"];?>">
    <label for="gambar">Gambar Kamar Hotel</label>
    <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Masukkan Gambar Kamar Hotel" value="<?= $kamar["gambar"];?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Ubah Data</button>
</form>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#007bff" fill-opacity="1" d="M0,128L30,117.3C60,107,120,85,180,106.7C240,128,300,192,360,181.3C420,171,480,85,540,74.7C600,64,660,128,720,170.7C780,213,840,235,900,250.7C960,267,1020,277,1080,245.3C1140,213,1200,139,1260,90.7C1320,43,1380,21,1410,10.7L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>



    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>

?>