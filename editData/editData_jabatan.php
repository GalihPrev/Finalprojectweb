<!-- Edit Data Pegawai -->

<?php
include "koneksi.php";
$no_jabatan = $_GET['no_jabatan'];
$sql = "SELECT * FROM jabatan WHERE no_jabatan = '$no_jabatan'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Data Pegawai</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text">Edit Data </h2>
            </div>
        </div>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nip_pegawai">NIP Pegawai</label>
                <input type="text" class="form-control" name="nip_pegawai" value="<?php echo $data['nip_pegawai']; ?>" readonly>
            </div><br>
            <div class="form-group">
                <label for="nama_jabatan">Nama Jabatan</label>
                <input type="text" class="form-control" name="nama_jabatan" value="<?php echo $data['nama_jabatan']; ?>">
            </div><br>
            <div class="form-group">
                <label for="gaji">Gaji</label>
                <input type="text" class="form-control" name="gaji" value="<?php echo $data['gaji']; ?>">
            </div><br>
            <div class="form-group">
                <label for="jam_kerja">Jam Kerja</label>
                <input type="text" class="form-control" name="jam_kerja" value="<?php echo $data['jam_kerja']; ?>">
            </div><br>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <a href="../dashboard/dashboard_admin.php" class="btn btn-danger">Batal</a>
            </div>
        </form>
        <br>


        </form>
    </div>

    <!-- Update data jabatan -->

    <?php
    include "koneksi.php";
    if (isset($_POST['simpan'])) {
        $nip_pegawai = $_POST['nip_pegawai'];
        $nama_jabatan = $_POST['nama_jabatan'];
        $gaji = $_POST['gaji'];
        $jam_kerja = $_POST['jam_kerja'];
        $sql = "UPDATE jabatan SET nama_jabatan = '$nama_jabatan',  gaji = '$gaji', jam_kerja = '$jam_kerja' WHERE nip_pegawai = '$nip_pegawai'";
        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('Location:../dashboard/dashboard_admin.php');
        } else {
            echo "Gagal Update Data";
        }
    }
    ?>

</body>

</html>