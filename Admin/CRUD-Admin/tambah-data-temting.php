<?php
include '../../koneksi.php';


$nama_tempatTinggal = "";
$eror = "";
$sukses = "";

if (isset($_POST['submit'])) {

  $nama_tempatTinggal = $_POST['nama_tempatTinggal'];
  if ( $nama_tempatTinggal) {
    $sql1 = "INSERT INTO jenis_tempat_tinggal ( nama_tempatTinggal) VALUES ( '$nama_tempatTinggal')";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
      $sukses = "Berhasil memasukkan data baru";
      echo '<script>window.location="../../Admin/jenis_tempat_tinggal.php"</script>';
    } else {
      $eror = "Gagal memasukkan data";
    }
  } else {
    $eror = "Silahkan masukkan semua data";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah jenis Tempat Tinggal</title>
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
      <div class="card-header bg-secondary-subtle">Tambah Jenis Tempat Tinggal</div>
      <div class="card-body">
        <?php if ($eror) : ?>
          <div class="alert alert-danger" role="alert">
            <?= $eror ?>
          </div>
        <?php endif; ?>

        <?php if ($sukses) : ?>
          <div class="alert alert-success" role="alert">
            <?= $sukses ?>
          </div>
        <?php endif; ?>

        <form action="" method="POST">

          <div class="mb-3 row">
            <label for="nama_tempatTinggal" class="col-sm-2 col-form-label">Nama Tempat Tinggal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_tempatTinggal" name="nama_tempatTinggal" value="<?= $nama_tempatTinggal ?>">
            </div>
          </div>


          <div class="cal-12">
            <input type="submit" name="submit" value="Simpan Data" class="btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>