<!-- Tambah Data pegawai -->

<?php
include "koneksi.php";
if (isset($_POST['submit'])) {

    $nip_pegawai = $_POST['nip_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO pegawai (nip_pegawai, nama_pegawai, alamat_pegawai, tempat_lahir, tanggal_lahir, jenis_kelamin) VALUES ('$nip_pegawai', '$nama_pegawai', '$alamat_pegawai', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location:../dashboard/dashboard_admin.php');
    } else {
        die("Gagal menambah Data");
    }
}
?>

<!-- Form Tambah Data Pegawai -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tambah Data Pegawai</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text">Tambah Data Pegawai</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nip_pegawai" class="form-label"> NIP Pegawai</label>
                        <input type="text" class="form-control" id="nip_pegawai" name="nip_pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="nama_pegawai" class="form-label"> Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="alamat_pegawai" class="form-label"> Alamat </label>
                        <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label"> Tempat Lahir </label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label"> Tanggal Lahir </label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label
                        "> Jenis Kelamin </label>
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>


</html>
</body>

</html>