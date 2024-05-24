<?php
$id_prov = "";
$nama_prov = "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id_prov = $_GET['id_agama'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM provinsi WHERE id_prov = '$id_prov'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id_prov = $_GET['id_prov'];
    $sql1      = "SELECT * FROM provinsi WHERE id_prov = '$id_prov'";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $id_prov  = $r1['id_prov'];
    $nama_prov = $r1['nama_prov'];

    if ($id_prov == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $id_prov   = $_POST['id_prov'];
    $nama_prov= $_POST['nama_prov'];

    if ($id_prov && $nama_prov ) {
        $sql1 = "INSERT INTO provinsi (id_prov,nama_prov) VALUES ('$id_prov','$nama_prov')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../Admin/provinsi.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>