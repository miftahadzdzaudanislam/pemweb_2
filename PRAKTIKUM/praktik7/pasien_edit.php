<?php
include_once('koneksi.php');
$kelurahan = $dbh->query('SELECT * FROM kelurahan');

$pasien_id = $_GET['id'];
$pasien = $dbh->query("SELECT * FROM pasien WHERE id = $pasien_id")->fetch();

// session_start();    
// if(!$_SESSION['email']){
//     header('Location: index.html');
// };

include_once('top.php');
include_once('menu.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Pasien</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="pasien_update.php" method="post">
        <input type="hidden" value="<?= $pasien['id'] ?>" name="id">
        <div class="form-group row">
            <label class="col-4 col-form-label" for="nama">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" value="<?= $pasien['nama'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="email" name="email" type="text" class="form-control" value="<?= $pasien['email'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control" value="<?= $pasien['kode'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $pasien['tmp_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?= $pasien['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?= $pasien['gender'] == 'L' ? 'checked' : '' ?>>
                    <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?= $pasien['gender'] == 'P' ? 'checked' : '' ?>>
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control"><?= $pasien['alamat'] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="kelurahan_id" class="col-4 col-form-label">Kelurahan</label>
            <div class="col-8">
                <select id="kelurahan_id" name="kelurahan_id" class="custom-select">
                    <option value="">Pilih Kelurahan</option>
                    <?php foreach ($kelurahan as $kel) : ?>
                        <option value="<?= $kel['id'] ?>" <?= $pasien['kelurahan_id'] == $kel['id'] ? 'selected' : '' ?>><?= $kel['nama'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php');
?>