<?php include '../assets/template/head-petugas.php';
include '../petugas/CRUD-petugas/CRUD-kk-santri.PHP';
?>
<main><br>
    <?php
    $query = mysqli_query($koneksi, "select * from user where username='$_SESSION[username]'");
    $data = mysqli_fetch_array($query);
    ?>
    <div class="container-fluid px-4">
        <h2><b>Data Kartu Keluarga Calon Santri</b></h2>
        <div class="row">

            <div class="col col-lg-12">
                <div class="card bg-light text-black mb-4">
                    <div class="card-body">Selamat Datang <b><?php echo strtoupper($data['username']); ?> (<?= strtoupper($_SESSION['username']) ?>)</b></div>
                </div>
            </div>

            <h2>Tabel Data Data Kartu Keluarga</h2>
            <a class="btn btn-secondary" href="CRUD-petugas/tambah-data-kk-santri.php">
                Tambah data
            </a>
            <table class="table" id="datatablesSimple">
                <thead>
                     <th>No</th>
                     <th>Nama Calon Santri</th>
                     <th>No Kartu Keluarga</th>
                     <th>Nama Kepala Keluarga</th>
                     <th>Status Kepala Keluarga</th>
                     <th>Action</th>
                </thead>

                 <?php
                          $sql = "SELECT kartu_keluarga.id_KK, kartu_keluarga.nomor_KK, calon_santri.nama_csantri, kartu_keluarga.nama_kepkel, status_kepala_keluarga.nama_Statuskepkel 
                          FROM kartu_keluarga
                          JOIN calon_santri ON kartu_keluarga.id_csantri = calon_santri.id_csantri
                          JOIN status_kepala_keluarga ON kartu_keluarga.id_statusKK = status_kepala_keluarga.id_statusKK";
                        $result = $koneksi->query($sql);
                        $urut = 1;

                        while ($row = $result->fetch_array()) :
                        ?>
                            <tr>
                                <td><?= $urut++ ?></td>
                                <td><?= $row['nama_csantri'] ?></td>
                                <td><?= $row['nomor_KK'] ?></td>
                                <td><?= $row['nama_kepkel'] ?></td>
                                <td><?= $row['nama_Statuskepkel'] ?></td>
                            </td>
                            <td>
                                <a href="../petugas/CRUD-petugas/form-edit-kk-santri.php?op=edit&id_KK=<?php echo $row['id_KK'] ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                                <a href="kk-santri.php?op=delete&id_KK=<?php echo $row['id_KK'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"> <button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>

                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
                </tbody>
            </table>
        </div>
</main>
<?php include '../assets/template/footer.php'; ?>