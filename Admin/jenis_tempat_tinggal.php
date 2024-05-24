<?php include '../assets/template/headadmin.php';
include '../Admin/CRUD-Admin/CRUD-jenis_tempat_tinggal.PHP';
?>
<main><br>
    <?php
    $query = mysqli_query($koneksi, "select * from user where username='$_SESSION[username]'");
    $data = mysqli_fetch_array($query);
    ?>
    <div class="container-fluid px-4">
        <h2><b>Jenis Tempat Tinggal</b></h2>
        <div class="row">

            <div class="col col-lg-12">
                <div class="card bg-light text-black mb-4">
                    <div class="card-body">Selamat Datang <b><?php echo strtoupper($data['username']); ?> (<?= strtoupper($_SESSION['username']) ?>)</b></div>
                </div>
            </div>

            <h2>Jenis Tempat Tinggal</h2>
            <a class="btn btn-secondary" href="CRUD-Admin/tambah-data-temting.php">
                Tambah data
            </a>
            <table class="table" id="datatablesSimple">
                <thead>
                     <th>No</th>
                     <th>Nama Tempat Tinggal</th>
                     <th>Action</th>
                </thead>

                 <?php
                        $sql = "SELECT * FROM jenis_tempat_tinggal";
                        $result = $koneksi->query($sql);
                        $urut = 1;

                        while ($row = $result->fetch_array()) :
                        ?>
                            <tr>
                                <td><?= $urut++ ?></td>
                                <td><?= $row['nama_tempatTinggal'] ?></td>
                            </td>
                            <td>
                                <a href="../Admin/CRUD-Admin/form-edit-temting.php?op=edit&id_tempat=<?php echo $row['id_tempat'] ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                                <a href="jenis_tempat_tinggal.php?op=delete&id_tempat=<?php echo $row['id_tempat'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"> <button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>

                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
                </tbody>
            </table>
        </div>
</main>
<?php include '../assets/template/footer.php'; ?>