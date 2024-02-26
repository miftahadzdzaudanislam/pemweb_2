<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

// Buat Total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
$grade;
$Predikat;
$status;

// Buat Perhitungan If untuk Mencari Grade
if ($total_nilai >= 85 and $total_nilai <= 100) {
    $grade = "A";
}elseif ($total_nilai >= 70 and $total_nilai <= 84) {
    $grade = "B";
}elseif ($total_nilai >= 56 and $total_nilai <= 69) {
    $grade = "C";
}elseif ($total_nilai >= 36 and $total_nilai <= 55) {
    $grade = "D";
}elseif ($total_nilai < 35) {
    $grade = "E";
}else {
    $grade = "I";
};

// Buat Perhitungan SWITCHCASE untuk Mencari Predikat
switch ($grade) {
    case "A":
        $Predikat = "Sangat Memuaskan";
        break;
    case "B":
        $Predikat = "Memuaskan";
        break;
    case "C":
        $Predikat = "Cukup";
        break;
    case "D":
        $Predikat = "Kurang";
        break;
    case "E":
        $Predikat = "Sangat Kurang";
        break;
    default:
    $Predikat = "Tidak Ada";
    break;
}

// Buat Perhitungan IF untuk Mencari Status LULUS/TIDAK LULUS
if ($total_nilai >= 70){
    $status = "LULUS";
}else {
    $status = "TIDAK LULUS";
}

// Cetak hasil
echo 'Proses: ';
echo '<br>Nama Lengkap: ' . $nama ;
echo '<br>Mata Kuliah: ' . $matkul ;
echo '<br>Nilai UTS: ' . $nilai_uts ;
echo '<br>Nilai UAS: ' . $nilai_uas ;
echo '<br>Nilai Tugas: ' . $nilai_tugas ;
echo '<br>Grada: ' . $grade ;
echo '<br>Predikat: ' . $Predikat ;
echo '<br>Status: ' . $status;