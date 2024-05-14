<?php
include 'koneksi.php';


$nama_toko = "";
$alamat = "";
$no_hp = "";
$eror = "";
$sukses = "";

if (isset($_POST['submit'])) {

  $nama_toko = $_POST['nama_toko'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];

  if ( $nama_toko && $no_hp && $alamat) {
    $sql1 = "INSERT INTO toko ( nama_toko, alamat, no_hp) VALUES ( '$nama_toko', '$alamat', '$no_hp')";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
      $sukses = "Berhasil memasukkan data baru";
      echo '<script>window.location="../../Superadmin/Toko.php"</script>';
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
  <title>Tambah Toko</title>
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
      <div class="card-header bg-secondary-subtle">Tambah Toko</div>
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
            <label for="nama_toko" class="col-sm-2 col-form-label">Nama Toko</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_toko" name="nama_toko" value="<?= $nama_toko ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat ?>">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $no_hp ?>">
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
