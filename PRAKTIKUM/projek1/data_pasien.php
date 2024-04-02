<?php
    include_once "../assets/layout/header.php";
    include_once "../assets/layout/menu.php";

    require_once 'dbkoneksi.php';

    // definisikan query
    $sql = "SELECT pasien.*, kelurahan.nama_kel FROM pasien
            JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id";
    // jalankan query
    $stmt = $dbh->query($sql);
    $klrhn = $stmt->fetchAll();
?>
<div class="card">
    <div class="card-header">
        <h2>Data Pasien</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Kelurahan</th>
                <th>Action</th>
            </tr>
            <?php
                $nomor = 1;
                foreach($klrhn as $row){
            ?>
            <tr>
                <td> <?= $nomor ?> </td>
                <td> <?= $row['kode'] ?> </td>
                <td> <?= $row['nama'] ?> </td>
                <td> <?= $row['alamat'] ?> </td>
                <td> <?= $row['email'] ?> </td>
                <td> <?= $row['nama_kel'] ?> </td>
                <td>
                    <a href="form_pasien.php?id=<?= $row['id'] ?>" class="btn btn-primary m-1">Edit</a> /
                    <a href="proses_pasien.php?idx=<?= $row['id'] ?>&proses=Hapus" class="btn btn-danger m-1">Delete</a>
                </td>
            </tr>
            <?php
                $nomor++; 
                }; 
            ?>
        </table>
        <a href="form_pasien.php" class="btn btn-primary">Tambah</a>
    </div>
</div>

<?php
    include_once "../assets/layout/footer.php";
?>