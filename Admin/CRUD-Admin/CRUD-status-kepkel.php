<?php
$id_statusKK = "";
$nama_Statuskepkel = "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id_statusKK = $_GET['id_statusKK'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM status_kepala_keluarga WHERE id_statusKK = '$id_statusKK'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id_statusKK = $_GET['id_statusKK'];
    $sql1      = "SELECT * FROM status_kepala_keluarga WHERE id_statusKK = '$id_statusKK'";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $id_statusKK   = $r1['id_statusKK'];
    $nama_Statuskepkel = $r1['nama_Statuskepkel'];

    if ($id_statusKK == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $id_statusKK   = $_POST['id_statusKK'];
    $nama_Statuskepkel = $_POST['nama_Statuskepkel'];

    if ($id_statusKK && $nama_Statuskepkel ) {
        $sql1 = "INSERT INTO status_kepala_keluarga (id_statusKK,nama_Statuskepkel) VALUES ('$id_statusKK','$nama_Statuskepkel')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../Admin/status-kepkel.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>
