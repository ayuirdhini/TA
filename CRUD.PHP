<?php
    $id_toko = "";
    $nama_toko = "";
    $no_hp     = "";
    $alamat = "";
    $eror     = "";
    $sukses   = "";
    
    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    } else {
        $op = "";
    }
    
if ($op == 'delete') {
    // Pastikan ini dieksekusi saat menghapus
    $id_toko = $_GET['id_toko'];
    $sql1 = "DELETE FROM toko WHERE id_toko = '$id_toko'";
    $q1 = mysqli_query($koneksi, $sql1);

     if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}


    
    
    
    if ($op == 'edit') {
        $id_toko = $_GET['id_toko'];
        $sql1        = "SELECT * FROM user where id_toko = '$id_toko'";
        $q1          = mysqli_query($koneksi, $sql1);
        $r1          = mysqli_fetch_array($q1);

        $id_toko    = $r1['id_toko'];
        $nama_toko    = $r1['nama_toko'];
        $alamat    = $r1['alamat'];
        $no_hp        = $r1['no_hp'];
    
        if ($id_toko == '') {
            $eror = "data tidak ditemukan";
        }
    }
    
    
    
    if (isset($_POST['submit'])) {
        $id_toko = $_POST['id_toko'];
        $nama_toko = $_POST['nama_toko'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
    
        if ($id_toko && $nama_toko && $no_hp && $alamat) {
            $sql1 = ("insert into user(id_toko,nama_toko,alamat,no_hp) values ('$id_toko', '$nama_toko','$alamat','$no_hp')");
            $q1    = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "berhasil memasukkan data baru";
                echo '<script>window.location="Superdmin/admin.php"</script>  ';
            } else {
                $eror = "gagal memasukkan data";
            }
        } else {
            $eror = "Silahkan Masukkan Semua data";
        }
    }
