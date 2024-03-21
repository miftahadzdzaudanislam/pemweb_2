<?php
  if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    $nama = $_POST["nama"];
    $subs = $_POST["subs"];
    $kategori = $_POST["kategori"];

    include "data.php";

    $channel = new Youtuber($nama, $subs, $kategori);
    $playbutton = $channel->playButton();
    $kategori = $channel->kategori();
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Form Youtuber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <table class="table table-primary table-striped mt-5">
        <thead>
            <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama/Channel</th>
            <th scope="col">Subscribers</th>
            <th scope="col">Play Button</th>
            <th scope="col">Kategori</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td> <?= $nama ?> </td>
            <td> <?= $subs ?> </td>
            <td> <?= $playbutton ?> </td>
            <td> <?= $kategori ?> </td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>