<?php
$conn = mysqli_connect("localhost", "root","", "hotel");
$result = mysqli_query($conn,"SELECT * FROM kamar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jenis Kamar</h1>
    <table border="1" cellpadding="10" cellspacing="0">
   
        <tr>
            <th>No.</th>
            <th>Jenis</th>
            <th>Fasilitas</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>aksi</th>
        </tr>
        <?php while (
            $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $row["id"];?></td>
            <td><?= $row["jenis"];?></td>
            <td><?= $row["fasilitas"];?></td>
            <td><?= $row["harga"];?></td>
            <td><img src="img/<?= $row["gambar"]?>" width="300" alt=""></td>
            <td>
                <a href="">edit</a> |
                <a href="">hapus</a>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>