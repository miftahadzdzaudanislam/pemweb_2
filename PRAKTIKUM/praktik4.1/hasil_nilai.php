<?php
require_once "model.php";

if( !isset($_POST["submit"])    ){
    header("Location: index.php");
    // exit;
}

$proses = $_POST["submit"];
$nama = $_POST["nama"];
$mata_kuliah = $_POST["matakuliah"];
$nilai_uts = $_POST["uts"];
$nilai_uas = $_POST["uas"];
$nilai_tugas = $_POST["tugas"];
$nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;


echo 'Nama Siswa : '  . $nama;
echo '<br> Mata Kuliah : ' . $mata_kuliah;
echo '<br> Nilai UTS : ' . $nilai_uts;
echo '<br> Nilai UAS : ' . $nilai_uas;
echo '<br> Nilai Tugas : ' . $nilai_tugas;

echo '<br> Nilai Akhir : ' . $nilai_akhir;

echo '<br> ANDA DINYATAKAN : ' . kelulusan($nilai_akhir);
echo '<br> GRADE : ' . grade($nilai_akhir);
?>