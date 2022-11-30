<!-- Delete data pegawai -->


<?php
include "koneksi.php";
if (isset($_GET['nip_pegawai'])) {
    $nip_pegawai = $_GET['nip_pegawai'];
    $sql = "DELETE FROM pegawai WHERE nip_pegawai = '$nip_pegawai'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location:../dashboard/dashboard_admin.php');
    } else {
        die("Gagal menghapus Data");
    }
}
