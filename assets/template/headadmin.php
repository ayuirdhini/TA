<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../Login.html');
}
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIPON : Admin</title>
    <link href="../assets/img/.png" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../bootstrap/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <?php include '../koneksi.php' ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../Admin/admin.php"><b>SIPON</b></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">

            </div>
        </form>
        <!-- Navbar-->

        <ul class="navbar-nav d-md-inline-block form-inline  ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= strtoupper($_SESSION['username']) ?><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                    <!-- <li><hr class="dropdown-divider" /></li> -->
                    <li><a class="dropdown-item" href="../Logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-footer">
                            <div class="small">Login Sebagai: <?= strtoupper($_SESSION['username']) ?></div>
                            <div class="small">Role: <?= $_SESSION['role'] ?></div>
                        </div>
                      <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="../Admin/admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Dashboard
                        </a>
                         <a class="nav-link" href="../Admin/hak-user.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-poll"></i></div>
                            Hak User
                        </a>
    <!-- Informasi Alamat -->
    <a href="#informasiAlamat" class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="informasiAlamat">
        <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
        Informasi Alamat
         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
            <div class="collapse" id="informasiAlamat" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="../Admin/provinsi.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                        Provinsi
                    </a>
                    <a class="nav-link" href="../Admin/kota.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                        Kota
                    </a>
                </nav>
            </div>

    <!-- Informasi Identitas Pribadi -->
    <a href="#informasiIdentitasPribadi" class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="informasiIdentitasPribadi">
        <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
        Informasi Identitas Pribadi
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
            <div class="collapse" id="informasiIdentitasPribadi" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="../Admin/agama.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                        Agama
                    </a>
                    <a class="nav-link" href="../Admin/kewarganegaraan.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                        Kewarganegaraan
                    </a>
                    <a class="nav-link" href="../Admin/pendidikan.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                        Pendidikan
                    </a>
                    <a class="nav-link" href="../Admin/jenis_tempat_tinggal.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-truck-moving"></i></div>
                        Jenis Tempat Tinggal
                    </a>
                </nav>
            </div>


            </nav>
        </div>
        <div id="layoutSidenav_content">