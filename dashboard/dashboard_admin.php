<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../style.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="fa-regular fa-user" style="font-size:48px;"></i>
            <span class="logo_name">Admin</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard_admin.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dashboardData_employee.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Data Employee</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Fitur 3</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Fitur 3</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Fitur 4</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Fitur 5</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
        </nav>

        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="card-body">
                        <div class="title"> Data Employee</div>
                        <div class="row mt-3">
                        </div>
                        <div class="row ">
                            <div class="col-md-12 ">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>

                                                <th>NIP Pegawai</th>
                                                <th>Nama Pegawai</th>
                                                <th>Jabatan</th>
                                                <th>Jam Kerja</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "koneksi.php";
                                            // Innjer join 2 table 
                                            $sql = "SELECT pegawai.nip_pegawai, pegawai.nama_pegawai, jabatan.nama_jabatan, jabatan.jam_kerja FROM pegawai INNER JOIN jabatan ON pegawai.nip_pegawai = jabatan.nip_pegawai";
                                            $query = mysqli_query($koneksi, $sql);
                                            while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $data['nip_pegawai']; ?></td>
                                                    <td><?php echo $data['nama_pegawai']; ?></td>
                                                    <td><?php echo $data['nama_jabatan']; ?></td>
                                                    <td><?php echo $data['jam_kerja'], ' Jam '; ?></td>


                                                <?php
                                            }
                                                ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="title"> Employee</div>
                    <div class="card-body">
                        <div class="row mt-3">
                        </div>
                        <div class="row ">
                            <div class="col-md-15 ">
                                <div class="table-responsive">
                                    <button type="button" class="btn btn-primary" onclick="window.location='../tambahData/tambahData_pegawai.php'"> Tambah Data </button>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nip Pegawai</th>
                                                <th>Nama Pegawai</th>
                                                <th>Alamat Pegawai</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "koneksi.php";
                                            $sql = "SELECT * FROM pegawai ORDER BY nama_pegawai ASC";
                                            $query = mysqli_query($koneksi, $sql);
                                            while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $data['nip_pegawai']; ?></td>
                                                    <td><?php echo $data['nama_pegawai']; ?></td>
                                                    <td><?php echo $data['alamat_pegawai']; ?></td>
                                                    <td><?php echo $data['tempat_lahir']; ?></td>
                                                    <td><?php echo $data['tanggal_lahir']; ?></td>
                                                    <td><?php echo $data['jenis_kelamin']; ?></td>
                                                    <td>
                                                        <a href="../editData/editData_pegawai.php?nip_pegawai=<?php echo $data['nip_pegawai']; ?>" class="btn btn-warning">Edit</a>
                                                        <a href="../deleteData/deleteData_pegawai.php?nip_pegawai=<?php echo $data['nip_pegawai']; ?>" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                <?php
                                            }
                                                ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title">Employee position</div>
                    <div class="card-body">
                        <div class="row mt-3">
                        </div>
                        <div class="row ">
                            <div class="col-md-15 ">
                                <div class="table-responsive">
                                    <button type="button" class="btn btn-primary" onclick="window.location='../tambahData/tambahData_jabatan.php'"> Tambah Data </button>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No Jabatan</th>
                                                <th>Nip Pegawai</th>
                                                <th>Jabatan</th>
                                                <th>Gaji</th>
                                                <th>Jam Kerja</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "koneksi.php";
                                            $sql = "SELECT * FROM jabatan ORDER BY no_jabatan ASC";
                                            $query = mysqli_query($koneksi, $sql);
                                            while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $data['no_jabatan']; ?></td>
                                                    <td><?php echo $data['nip_pegawai']; ?></td>
                                                    <td><?php echo $data['nama_jabatan']; ?></td>
                                                    <td><?php echo 'Rp ', $data['gaji']; ?></td>
                                                    <td><?php echo $data['jam_kerja'], ' Jam '; ?></td>
                                                    <td>
                                                        <a href="../editData/editData_jabatan.php?no_jabatan=<?php echo $data['no_jabatan']; ?>" class="btn btn-warning">Edit</a>
                                                        <a href="../deleteData/deleteData_jabatan.php?no_jabatan=<?php echo $data['no_jabatan']; ?>" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                <?php
                                            }
                                                ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="top-sales box">

                    <div class="title">Best Employee
                    </div>


                    <ul class="top-sales-details">

                        <?php
                        include "koneksi.php";
                        // Innjer join 2 table 
                        $sql = "SELECT pegawai.nama_pegawai FROM pegawai INNER JOIN jabatan ON pegawai.nip_pegawai = jabatan.nip_pegawai ORDER BY jabatan.jam_kerja DESC LIMIT 3";
                        $query = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <p> <span class="product"><?php echo $data['nama_pegawai']; ?></span></p>
                            </tr>

                        <?php
                        }
                        ?>


                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>