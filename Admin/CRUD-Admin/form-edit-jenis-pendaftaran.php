<?php include '../../koneksi.php';
$id_kategori = "";
$nama_kategori = "";
$eror     = "";
$sukses   = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'edit') {
    $id_kategori = $_GET['id_kategori'];
    $sql1        = "SELECT * FROM kategori_pendaftaran where id_kategori = '$id_kategori'";
    $q1          = mysqli_query($koneksi, $sql1);
    $r1          = mysqli_fetch_array($q1);
    $id_kategori    = $r1['id_kategori'];
    $nama_kategori    = $r1['nama_kategori'];

    if ($nama_kategori == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    
    $nama_kategori = $_POST['nama_kategori'];

    if ( $nama_kategori) {
        $sql1 = (" UPDATE kategori_pendaftaran SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");
        $q1    = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Berhasil Mengubah Data Baru";
            echo '<script>window.location="../../Admin/jenis-pendaftaran.php"</script>  ';
        } else {
            $eror = "Gagal Mengubah data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-login-form.min.css" />
    <style>
        .mx-auto {
            width: 800px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-secondary-subtle">Edit Data kategori_pendaftaran</div>
            <div class="card-body">
                <?php
                if ($eror) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $eror ?>
                    </div>
                <?php
                }
                ?>

                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>


               <form action="" method="POST">

          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Jenis pendaftaran</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_kategori" name=" nama_kategori" value="<?php echo $nama_kategori ?>">
            </div>
          </div>

                    <div class="cal-12">
                        <input href="/assets/template/headadmin.php" type="submit" name="submit" value="Simpan Data" class="btn-primary">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>