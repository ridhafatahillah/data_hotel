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
    <div id="carouselExampleIndicators" class="carousel slide pt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/married.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/model-ok.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/child-1.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="home">
        <div class="container text-center">
            <div class="col-md-12 col-sm-12">
                <h1 class="header1">WELCOME TO RIFKA HOTEL</h1>
                <p style="text-align:center;margin:25px auto">Inspired by the beauty of Parahyangan,
                    Padma Hotel Bandung offers spectacular mountain views,
                    indulgent
                    dining, elegant guestrooms and exceptional hospitality personified by its 24-hour Butler Service.
                    Located in the hills of Ciumbuleuit, and yet only minutes from the bustle of Bandung's city centre,
                    the
                    hotel is 10 km from Husein Sastranegara International Airport and 9km from Bandung train station.

                    Padma Hotel Bandung is the perfect place for a rejuvenating, opulent getaway, private gatherings,
                    and
                    well-organised events and meetings.</p>
            </div>
            <!-- 3 cards to right  -->
            
            <h1 class="header1 pb-3 pt-2" id="jeniskamar">JENIS KAMAR</h1>
            <div class="row">
            <?php foreach ($kamar as $row) :?>
                <div class="col-4 pt-2">
                    <div class="card">
                        <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["jenis"]?> </h5>
                            <p class="card-text"><?= $row["fasilitas"]?></p>
                            <a href="#" class="btn btn-primary">Rp.<?= $row["harga"]?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="footeratass">
            <div class="container">
                <div class="row">
                    <div class="col-10 pt-4">
                        <h4>Alamat</h4>
                        <p>Jl. Ciumbuleuit No. 1, Ciumbuleuit, Coblong, Kota Bandung, Jawa Barat 40132</p>
                    </div>
                    <div class="col-2 pt-4">
                        <h4>Hubungi Kami</h4>
                        <p>Phone : +62 22 203 8888</p>
                        <p>Email : ridho@ridho.link</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerbawah">
            <div class="container-fluid">
                <div class="row" style="background-color: #888 ;">
                    <div class="col-12 text-center pt-1 pb-1">
                        <p>2021 Rifka Hotel</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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