<?php
session_start();

// Jika user sudah login, tidak boleh mengakses halaman login
if (isset($_SESSION['status']) && $_SESSION['status'] == "login") {
    header("location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Sistem Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Login Sistem Penjualan</h5>
                </div>
                <div class="card-body">
                    <!-- Menampilkan pesan notifikasi -->
                    <?php if (isset($_GET['pesan'])): ?>
                        <?php if ($_GET['pesan'] == "gagal"): ?>
                            <div class="alert alert-danger">Username atau Password salah!</div>
                        <?php elseif ($_GET['pesan'] == "belum_login"): ?>
                            <div class="alert alert-warning">Silakan login terlebih dahulu!</div>
                        <?php elseif ($_GET['pesan'] == "logout"): ?>
                            <div class="alert alert-success">Anda telah berhasil logout.</div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <form action="proses_login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>