<?php
include '../../koneksi.php';


$nama_Statuskepkel = "";
$eror = "";
$sukses = "";

if (isset($_POST['submit'])) {

  $nama_Statuskepkel = $_POST['nama_Statuskepkel'];
  if ( $nama_Statuskepkel) {
    $sql1 = "INSERT INTO status_kepala_keluarga ( nama_Statuskepkel) VALUES ( '$nama_Statuskepkel')";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
      $sukses = "Berhasil memasukkan data baru";
      echo '<script>window.location="../../Admin/status-kepkel.php"</script>';
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
  <title>Tambah status_kepala_keluarga</title>
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
      <div class="card-header bg-secondary-subtle">Tambah Data Status Kepala Keluarga</div>
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
            <label for="nama_Statuskepkel" class="col-sm-2 col-form-label">Status Kepala Keluarga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_Statuskepkel" name="nama_Statuskepkel" value="<?= $nama_Statuskepkel ?>">
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
