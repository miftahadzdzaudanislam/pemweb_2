<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$kode = $_POST['kode'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$kelurahan_id = $_POST['kelurahan_id'];

// buat query
$query = "UPDATE pasien SET nama='$nama', email='$email', kode='$kode', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', gender='$gender', alamat='$alamat', kelurahan_id='$kelurahan_id' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menyimpan data";
}
