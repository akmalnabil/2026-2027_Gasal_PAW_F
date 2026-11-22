<?php
session_start();
include "koneksi.php";

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$stmt = mysqli_prepare($conn, "SELECT id_user, username, password, nama, level FROM user WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if ($data && $password === $data['password']) {
    $_SESSION['id_user']  = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama']     = $data['nama'];
    $_SESSION['level']    = (int) $data['level'];
    $_SESSION['status']   = "login";

    header("Location: index.php");
    exit;
} else {
    header("Location: login.php?pesan=gagal");
    exit;
}