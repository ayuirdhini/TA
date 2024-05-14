<?php
include '../../koneksi.php';


$nama_kewarganegaraan = "";
$eror = "";
$sukses = "";

if (isset($_POST['submit'])) {

  $nama_kewarganegaraan = $_POST['nama_kewarganegaraan'];
  if ( $nama_kewarganegaraan) {
    $sql1 = "INSERT INTO kewarganegaraan ( nama_kewarganegaraan) VALUES ( '$nama_kewarganegaraan')";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1) {
      $sukses = "Berhasil memasukkan data baru";
      echo '<script>window.location="../../Admin/kewarganegaraan.php"</script>';
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
  <title>Tambah Kewarganegaraan</title>
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
      <div class="card-header bg-secondary-subtle">Tambah Data Kewarganegaraan</div>
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
            <label for="nama_agama" class="col-sm-2 col-form-label">Nama Kewarganegaraan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_kewarganegaraan" name="nama_kewarganegaraan" value="<?= $nama_kewarganegaraan ?>">
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
