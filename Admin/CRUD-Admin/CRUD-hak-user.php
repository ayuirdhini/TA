<?php
$id_user = "";
$username = "";
$password = "";
$role = "";
$email = "";
$eror   = "";
$sukses = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'delete') {
    $id_user = $_GET['id_user'];
    // Sesuaikan dengan perubahan perilaku kunci asing
    $sql1 = "DELETE FROM user WHERE id_user = '$id_user'";
    $q1   = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses = "Berhasil Hapus data";
    } else {
        $eror = "Gagal melakukan delete data";
    }
}

if ($op == 'edit') {
    $id_user = $_GET['id_user'];
    $sql1      = "SELECT * FROM user WHERE id_user = '$id_user'";
    $q1        = mysqli_query($koneksi, $sql1);
    $r1        = mysqli_fetch_array($q1);

    $id_user   = $r1['id_user'];
    $username = $r1['username'];
    $password = $r1['password'];
    $role = $r1['role'];
    $email = $r1['email'];

    if ($id_user == '') {
        $eror = "data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $id_user   = $_POST['id_user'];
    $username = $_POST['username'];
    $password   = $_POST['password'];
    $role = $_POST['role'];
    $email   = $_POST['email'];

    if ($id_user && $username && $password && $role && $email ) {
        $sql1 = "INSERT INTO user (id_user,username, password, role, email) VALUES ('$id_user','$username','$password','$role','$email')";
        $q1   = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "berhasil memasukkan data baru";
            echo '<script>window.location="../../Admin/hak-user.php"</script>  ';
        } else {
            $eror = "gagal memasukkan data";
        }
    } else {
        $eror = "Silahkan Masukkan Semua data";
    }
}
?>
