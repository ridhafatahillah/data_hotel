<?php 
require 'koneksi.php';

mysqli_query($conn, "DELETE FROM kamar");
header("Location: data.php");
?>