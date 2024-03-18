<?php
    // variabel user
    $title = 'PRAKTIKUM 1 PHP';
    $nama = 'Miftah';
    $umur = 18;

    // echo 'Welcome '. $nama . ' dengan umur '. $umur;
    // echo '<br>';
    // echo $nama . $umur;

    // variabel sistem
    // echo 'Documen Root '. $_SERVER['DOCUMENT_ROOT'];
    // echo '<br>Nama File '. $_SERVER['PHP_SELF'];
    // echo '<h1> Hallo </h1>'

    // variabel konstan
    define('phi', 3.14);
    $jari = 8;
    $keliling = 2 * phi * $jari;
    $luas = phi * $jari * $jari;

    // echo $keliling;
    // echo '<br>' . $luas;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 PHP</title>
</head>
<body>
    <h1> <?php echo $title ?> </h1>

    <p>Luas Lingkaran: <?php echo $luas ?></p>
    <p>Keliling Lingkaran: <?php echo $keliling ?></p>
</body>
</html>