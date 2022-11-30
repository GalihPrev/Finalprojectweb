<!-- Edit Data Pegawai -->

<?php
include "koneksi.php";
$nip_pegawai = $_GET['nip_pegawai'];
$sql = "SELECT * FROM pegawai WHERE nip_pegawai = '$nip_pegawai'";
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
                <label for="nama_pegawai">Nama Pegawai</label>
                <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>">
            </div><br>
            <div class="form-group">
                <label for="alamat_pegawai">Alamat_pegawai</label>
                <input type="text" class="form-control" name="alamat_pegawai" value="<?php echo $data['alamat_pegawai']; ?>">
            </div><br>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>">
            </div><br>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
            </div><br>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label
                        "> Jenis Kelamin </label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki" <?php if ($data['jenis_kelamin'] == 'Laki-Laki') {
                                                    echo "selected";
                                                } ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') {
                                                    echo "selected";
                                                } ?>>Perempuan</option>
                </select>
            </div>
            <br>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <a href="../dashboard/dashboard_admin.php" class="btn btn-danger">Batal</a>
            </div>

        </form>
    </div>

    <!-- Update data pegawai -->

    <?php
    include "koneksi.php";
    if (isset($_POST['simpan'])) {
        $nip_pegawai = $_POST['nip_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat_pegawai = $_POST['alamat_pegawai'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $sql = "UPDATE pegawai SET nama_pegawai = '$nama_pegawai', alamat_pegawai = '$alamat_pegawai', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin' WHERE nip_pegawai = '$nip_pegawai'";
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