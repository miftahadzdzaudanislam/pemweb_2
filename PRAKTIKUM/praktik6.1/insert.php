<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $semester = $_POST['semester'];

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, semester)
              VALUE ('$nama', '$nim', '$jurusan', '$semester')";
    
    if($conn->query($query) === TRUE){
        header("Location: index.php");
    }else {
        echo "Error $query <br>$conn->error";
    }$conn->close();
?>