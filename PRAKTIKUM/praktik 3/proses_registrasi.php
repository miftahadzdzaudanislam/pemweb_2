<?php
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelamin = $_POST['kelamin'];
        $prodi = $_POST['prodi'];
        $skills = $_POST['skills'] ?? [];
        $domisili = $_POST['domisili'];
        $email = $_POST['email'];

        // skor
        $skor = array_sum($skills);

        // cari kategori
        if ($skor <= 150){
            $kategori = 'Sangat Baik';
        }elseif ($skor <= 100){
            $kategori = 'Baik';
        }elseif ($skor <= 60){
            $kategori = 'Cukup';
        }elseif ($skor <= 40){
            $kategori = 'kurang';
        }else {
            $kategori = 'Tidak Memadai';
        };

        // Cetak hasil
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">';
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
        echo '<div class="container mt-5">';
        echo '<div class="card">';
        echo '<div class="card-header bg-primary text-white">';
        echo '<h2 class="mb-0">Hasil Registrasi</h2>';
        echo '</div>';
        echo '<div class="card-body">';
        echo '<div class="result-box">';
        echo 'NIM: ' .$nim;
        echo '<br>Nama Lengkap: ' .$nama;
        echo '<br>Jenis Kelamin: ' .$kelamin;
        echo '<br>Program Studi: ' .$prodi;
        echo '<br>Skill: ';
        // skill
        foreach ($skills as $index => $skill){
            echo $index . ', ';
        };
        echo '<br>Skor Skill: ' .$skor;
        echo '<br>Kategori Skill: ' .$kategori;
        echo '<br>Domisili: ' .$domisili;
        echo '<br>Email: ' .$email;
        echo '</div>';
        echo '</div>';
        echo '</div>';
    ?>