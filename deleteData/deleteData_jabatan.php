<!-- Delete data jabatan -->


<?php
include "koneksi.php";
if (isset($_GET['no_jabatan'])) {
    $no_jabatan = $_GET['no_jabatan'];
    $sql = "DELETE FROM jabatan WHERE no_jabatan = '$no_jabatan'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location:../dashboard/dashboard_admin.php');
    } else {
        die("Gagal menghapus Data");
    }
}
