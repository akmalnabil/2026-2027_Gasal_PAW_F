<?php
session_start();

// Proteksi halaman: jika belum login, kembalikan ke login.php
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Sistem Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Panggil Navbar -->
<?php include 'navbar.php'; ?>

<div class="container mt-4">
    <div class="alert alert-info">
        Selamat datang, <strong><?= htmlspecialchars($_SESSION['nama']); ?></strong>! 
        Anda login sebagai <strong><?= ($_SESSION['level'] == 1) ? 'Owner (Level 1)' : 'Kasir (Level 2)'; ?></strong>.
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>