<?php
$id_tempat = "";
$nama_tempatTinggal = "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id_tempat = $_GET['id_tempat'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM jenis_tempat_tinggal WHERE id_tempat = '$id_tempat'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id_tempat = $_GET['id_tempat'];
    $sql1      = "SELECT * FROM jenis_tempat_tinggal WHERE id_tempat = '$id_tempat'";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $id_tempat  = $r1['id_tempat'];
    $nama_tempatTinggal = $r1['nama_tempatTinggal'];

    if ($id_tempat== '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $id_tempat   = $_POST['id_tempat'];
    $nama_tempatTinggal = $_POST['nama_tempatTinggal'];

    if ($id_tempat && $nama_tempatTinggal ) {
        $sql1 = "INSERT INTO jenis_tempat_tinggal (id_tempat,nama_tempatTinggal) VALUES ('$id_tempat','$nama_tempatTinggal')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../Admin/jenis_tempat_tinggal.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>