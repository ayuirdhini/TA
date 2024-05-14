<?php
$id_pendidikan = "";
$jenjang_pendidikan= "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id_agama = $_GET['id_pendidikan'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM pendidikan WHERE id_pendidikan = '$id_pendidikan'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id_pendidikan = $_GET['id_pendidikan'];
    $sql1      = "SELECT * FROM pendidikan WHERE id_pendidikan = '$id_pendidikan";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $id_pendidikan   = $r1['id_pendidikan'];
    $jenjang_pendidikan = $r1['jenjang_pendidikan'];

    if ($id_kew == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $id_pendidikan  = $_POST['id_pendidikan'];
    $jenjang_pendidikan = $_POST['jenjang_pendidikan'];

    if ($id_pendidikan && $jenjang_pendidikan ) {
        $sql1 = "INSERT INTO pendidikan (id_pendidikan,jenjang_pendidikan) VALUES ('$id_pendidikan','$jenjang_pendidikan')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../Admin/pendidikan.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>
