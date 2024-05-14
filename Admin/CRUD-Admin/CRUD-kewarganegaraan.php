<?php
$id_kew = "";
$nama_kewarganegaraan = "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id_agama = $_GET['id_kew'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM kewarganegaraan WHERE id_kew = '$id_kew'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id_kew = $_GET['id_kew'];
    $sql1      = "SELECT * FROM kewarganegaraan WHERE id_kew = '$id_kew";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $id_kew   = $r1['id_kew'];
    $nama_kewarganegaraan = $r1['nama_kewarganegaraan'];

    if ($id_kew == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $id_kew  = $_POST['id_kew'];
    $nama_kewarganegaraan = $_POST['nama_kewarganegaraan'];

    if ($id_kew && $nama_kewarganegaraan ) {
        $sql1 = "INSERT INTO kewarganegaraan (id_kew,nama_kewarganegaraan) VALUES ('$id_kew','$nama_kewarganegaraan')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../Admin/kewarganegaraan.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>
