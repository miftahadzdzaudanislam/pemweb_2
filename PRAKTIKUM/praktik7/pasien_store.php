<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$kode = $_POST['kode'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$kelurahan_id = $_POST['kelurahan_id'];

// buat query
$query = "INSERT INTO pasien (nama, email, kode, tmp_lahir, tgl_lahir, gender, alamat, kelurahan_id) VALUES ('$nama', '$email', '$kode', '$tmp_lahir', '$tgl_lahir', '$gender', '$alamat', '$kelurahan_id')";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: pasien.php');
} else {
    echo "Gagal menyimpan data";
}
