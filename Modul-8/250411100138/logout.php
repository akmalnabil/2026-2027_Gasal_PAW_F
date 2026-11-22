<?php
session_start();

// Menghapus semua variabel session
session_unset();

// Menghancurkan session
session_destroy();

// Mengalihkan kembali ke halaman login
header("location:login.php?pesan=logout");
exit;
?>