<?php include '../../koneksi.php';
$id_pendidikan = "";
$jenjang_pendidikan = "";
$eror     = "";
$sukses   = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'edit') {
    $id_pendidikan = $_GET['id_pendidikan'];
    $sql1        = "SELECT * FROM pendidikan where id_pendidikan = '$id_pendidikan'";
    $q1          = mysqli_query($koneksi, $sql1);
    $r1          = mysqli_fetch_array($q1);
    $id_pendidikan    = $r1['id_pendidikan'];
    $jenjang_pendidikan    = $r1['jenjang_pendidikan'];

    if ($jenjang_pendidikan == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    
    $jenjang_pendidikan = $_POST['jenjang_pendidikan'];

    if ( $jenjang_pendidikan) {
        $sql1 = (" UPDATE pendidikan SET jenjang_pendidikan='$jenjang_pendidikan' WHERE id_pendidikan='$id_pendidikan'");
        $q1    = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Berhasil Mengubah Data Baru";
            echo '<script>window.location="../../Admin/pendidikan.php"</script>  ';
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
            <div class="card-header bg-secondary-subtle">Edit Data pendidikan</div>
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
            <label for="staticEmail" class="col-sm-2 col-form-label">Jenjang pendidikan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jenjang_pendidikan" name=" jenjang_pendidikan" value="<?php echo $jenjang_pendidikan ?>">
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