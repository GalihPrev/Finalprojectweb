<!-- Tambah Data Jabaran -->

<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    // $no_jabatan = $_POST['no_jabatan'];
    $nip_pegawai = $_POST['nip_pegawai'];
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji = $_POST['gaji'];
    $jam_kerja = $_POST['jam_kerja'];
    $sql = "INSERT INTO jabatan (nip_pegawai,nama_jabatan,gaji,jam_kerja) VALUES ( '$nip_pegawai', '$nama_jabatan', '$gaji','$jam_kerja')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location:../dashboard/dashboard_admin.php');
    } else {
        echo "Gagal Tambah Data";
    }
}
?>

<!-- Form Tambah Data Jabatan -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tambah Data Jabatan</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text">Tambah Data Jabatan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <!-- <div class="mb-3">

                        <label for="no_jabatan" class="form-label"> No Jabatan </label>
                        <input type="text" class="form-control" id="no_jabatan" name="no_jabatan">
                    </div> -->
                    <label for="nip_pegawai" class="form-label"> NIP Pegawai </label>
                    <select class="form-select" aria-label="Default select example" name="nip_pegawai">

                        <option selected>Pilih NIP Pegawai</option>
                        <?php
                        include "koneksi.php";
                        $sql = "SELECT * FROM pegawai";
                        $query = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<option value='$data[nip_pegawai]'>$data[nip_pegawai]</option>";
                        }
                        ?>
                    </select><br>
                    <div class="mb-3">
                        <label for="nama_jabatan" class="form-label"> Nama Jabatan </label>
                        <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="gaji" class="form-label"> Gaji </label>
                        <input type="text" class="form-control" id="gaji" name="gaji">
                    </div>
                    <div class="mb-3">
                        <label for="jam_kerja" class="form-label"> Jam Kerja </label>
                        <input type="text" class="form-control" id="jam_kerja" name="jam_kerja">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

</html>
</body>

</html>