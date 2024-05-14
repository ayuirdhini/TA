<?php
$id_agama = "";
$nama_agama = "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id_agama = $_GET['id_agama'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM agama WHERE id_agama = '$id_agama'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id_agama = $_GET['id_agama'];
    $sql1      = "SELECT * FROM agama WHERE id_agama = '$id_agama'";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $id_agama   = $r1['id_agama'];
    $nama_agama = $r1['nama_agama'];

    if ($id_agama == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $id_agama   = $_POST['id_agama'];
    $nama_agama = $_POST['nama_agama'];

    if ($id_agama && $nama_agama ) {
        $sql1 = "INSERT INTO agama (id_agama,nama_agama) VALUES ('$id_agama','$nama_agama')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../Admin/agama.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>
