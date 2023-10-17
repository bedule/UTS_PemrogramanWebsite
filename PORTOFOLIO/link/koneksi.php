<?php
    $serverName = "localhost"; 
    $userName = "id21415578_abdulharis23";
    $password = "Apaajaboleh.23";
    $dbName = "id21415578_abdulharis";

    //buat koneksi
    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    //cek koneksi
    if (!$conn) {
        die("koneksi gagal");
    }

?>