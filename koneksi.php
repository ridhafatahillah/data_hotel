<?php 
$conn = mysqli_connect("localhost", "root", "", "hotel");



function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $jenis = htmlspecialchars($data['jenis']);
    $fasilitas = htmlspecialchars($data['fasilitas']);
    $harga = htmlspecialchars($data['harga']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO kamar VALUES 
    ('', '$jenis', '$fasilitas', '$harga', '$gambar')";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM kamar WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapussemua() {
    global $conn;
    mysqli_query($conn, "DELETE FROM kamar");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    
    $jenis = htmlspecialchars($data['jenis']);
    $fasilitas = htmlspecialchars($data['fasilitas']);
    $harga = htmlspecialchars($data['harga']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE kamar SET
                jenis = '$jenis',
                fasilitas = '$fasilitas',
                harga = '$harga',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}