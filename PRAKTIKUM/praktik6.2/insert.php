<?php
include "connect.php";

$nama = $_POST['channel'];
$subs = $_POST['subscriber'];
$id_kategori = $_POST['id_kategori'];

if ($subs >= 10000000) {
    $playbutton = "Diamond";
} elseif ($subs >= 1000000) {
    $playbutton = "Gold";
} elseif ($subs >= 100000) {
    $playbutton = "Silver";
} else {
    $playbutton = "Belum Punya";
}

$data = [$nama, $subs, $id_kategori, $playbutton];
$sql = "INSERT INTO youtuber (channel, subscriber, id_kategori, play_button) VALUES (?, ?, ?, ?)";
$stmt = $koneksi->prepare($sql);
$stmt->execute($data);

header('Location: yt.php');
?>
