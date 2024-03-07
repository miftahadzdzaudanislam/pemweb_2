<?php
    $mata_kuliah = ['pemweb', 'ddp', 'jaringan komputer'];
    
    echo $mata_kuliah[0];
    echo count($mata_kuliah);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah</title>
</head>
<body>
    <?php
        $buah = array('apel', 'anggur', 'jeruk');
        $buah[0] = 'mangga';
        echo '<br>';

        $ar_jus = [
            ['buah'=>'Mangga','harga'=>8000 ],
            ['buah'=>'Alpukat','harga'=>10000 ],
            ['buah'=>'Durian','harga'=>14000 ],
            ] ;
            foreach($ar_jus as $jus){
            echo ' Jus ' . $jus['buah'] . ' harganya : ' . $jus['harga'] . '<br/>';
            };

        echo '<br>';
        $vaariabel = 12;
        $var = (double) $vaariabel;
        echo $var;

    ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="nama">NAMA: </label>
            <input type="text" name="nama" id="nama">
            <label for="rombrl">ROMBEL: </label>
            <input type="text" name="rombel" id="rombel">
            <input type="submit">
    </form>
</body>
</html>