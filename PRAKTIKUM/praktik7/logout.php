<?php
// hapus Session
session_start();
session_destroy();

// arahkan ke halaman login 
header('Location: index.html');