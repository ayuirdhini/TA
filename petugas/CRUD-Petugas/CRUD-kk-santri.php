<?php
$nomor_KK = "";
$nama_kepkel = "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $nomor_KK = $_GET['nomor_KK'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM kartu_keluarga WHERE nomor_KK = '$nomor_KK'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $nomor_KK = $_GET['nomor_KK'];
    $sql1      = "SELECT * FROM kartu_keluarga WHERE nomor_KK = '$nomor_KK'";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $nomor_KK   = $r1['nomor_KK'];
    $nama_kepkel = $r1['nama_kepkel'];

    if ($nomor_KK == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $nomor_KK   = $_POST['nomor_KK'];
    $nama_kepkel = $_POST['nama_kepkel'];

    if ($nomor_KK && $nama_kepkel ) {
        $sql1 = "INSERT INTO kartu_keluarga (nomor_KK,nama_kepkel) VALUES ('$nomor_KK','$nama_kepkel')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../petugas/kk-santri.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>
