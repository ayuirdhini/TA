<?php include '../assets/template/headadmin.php';
include '../Admin/CRUD-Admin/CRUD-jenis-pendaftaran.PHP';
?>
<main><br>
    <?php
    $query = mysqli_query($koneksi, "select * from user where username='$_SESSION[username]'");
    $data = mysqli_fetch_array($query);
    ?>
    <div class="container-fluid px-4">
        <h2><b>Data jenis pendaftaran</b></h2>
        <div class="row">

            <div class="col col-lg-12">
                <div class="card bg-light text-black mb-4">
                    <div class="card-body">Selamat Datang <b><?php echo strtoupper($data['username']); ?> (<?= strtoupper($_SESSION['username']) ?>)</b></div>
                </div>
            </div>

            <h2>Tabel Data jenis pendaftaran</h2>
            <a class="btn btn-secondary" href="CRUD-Admin/tambah-data-jenis-pendaftaran.php">
                Tambah data
            </a>
            <table class="table" id="datatablesSimple">
                <thead>
                     <th>No</th>
                     <th>jenis pendaftaran</th>
                     <th>Action</th>
                </thead>

                 <?php
                        $sql = "SELECT * FROM kategori_pendaftaran";
                        $result = $koneksi->query($sql);
                        $urut = 1;

                        while ($row = $result->fetch_array()) :
                        ?>
                            <tr>
                                <td><?= $urut++ ?></td>
                                <td><?= $row['nama_kategori'] ?></td>
                            </td>
                            <td>
                                <a href="../Admin/CRUD-Admin/form-edit-jenis-pendaftaran.php?op=edit&id_kategori=<?php echo $row['id_kategori'] ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                                <a href="jenis-pendaftaran.php?op=delete&id_kategori=<?php echo $row['id_kategori'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"> <button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>

                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
                </tbody>
            </table>
        </div>
</main>
<?php include '../assets/template/footer.php'; ?>