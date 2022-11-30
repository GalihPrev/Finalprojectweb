<?php
// conect to database
$host = "localhost";
$user = "root";
$pass = "";
$db = "pegawai_pt";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi) {
    $buka = mysqli_select_db($koneksi, $db);
    // echo "Koneksi berhasil";
    if (!$buka) {
        echo "Database berhasil dibuka";
    }
} else {
    echo "Database gagal dibuka";
}
