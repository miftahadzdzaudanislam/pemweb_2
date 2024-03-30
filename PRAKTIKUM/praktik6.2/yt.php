<?php
    include "connect.php";
    $sql = "SELECT youtuber.*, kategori.nama_kategori FROM youtuber
            JOIN kategori ON youtuber.id_kategori = kategori.id";
    $stmt = $koneksi->query($sql);
    $channel = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Youtuber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Data Youtuber</h1>
    <table class="table table-primary table-striped mt-5">
        <thead>
            <tr>
                <th>Nama Channel</th>
                <th>Jumlah Subscriber</th>
                <th>Playbutton</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    foreach($channel as $chnl) {
                ?>
                    <td><?= $chnl['channel'] ?></td>
                    <td><?= $chnl['subscriber'] ?></td>
                    <td><?= $chnl['play_button'] ?></td>
                    <td><?= $chnl['nama_kategori'] ?></td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
    <a href="index.php"><-Kembali</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
