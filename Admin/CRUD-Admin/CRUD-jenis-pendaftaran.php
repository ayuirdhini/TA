<?php
$id_kategori = "";
$nama_kategori = "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id_kategori = $_GET['id_kategori'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM kategori_pendaftaran WHERE id_kategori = '$id_kategori'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id_kategori = $_GET['id_kategori'];
    $sql1      = "SELECT * FROM kategori_pendaftaran WHERE id_kategori = '$id_kategori'";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $id_kategori   = $r1['id_kategori'];
    $nama_kategori = $r1['nama_kategori'];

    if ($id_kategori == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $id_kategori   = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    if ($id_kategori && $nama_kategori ) {
        $sql1 = "INSERT INTO kategori_pendaftaran (id_kategori,nama_kategori) VALUES ('$id_kategori','$nama_kategori')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../Admin/jenis-pendaftaran.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>
