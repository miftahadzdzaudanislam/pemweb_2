<?php
// tangkap input login
$email = $_POST['email'];
// $password = $_POST['password'];
$password = md5($_POST['password']);

$credential = [$email, $password];

include_once ('koneksi.php');

// query login
$query = "SELECT * FROM users WHERE email=? AND password=?";
$statm = $dbh->prepare($query, $credential);
$statm->execute($credential);
$result = $statm->fetch();

// validasi login
if ($result) {
    // simpan data user login ke session
    session_start();
    $_SESSION['name'] = $result['name'];
    $_SESSION['email'] = $result['email'];
    // pindah ke dashboard
    header('Location: dashboard.php');
} else {
    header('Location: index.html');
};
