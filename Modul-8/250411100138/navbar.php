<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Sistem Penjualan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Menu Navigasi Kiri -->
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <!-- Cek jika level == 1 (Owner), tampilkan dropdown Data Master -->
        <?php if ($_SESSION['level'] == 1): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Data Master
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="barang.php">Data Barang</a></li>
            <li><a class="dropdown-item" href="supplier.php">Data Supplier</a></li>
            <li><a class="dropdown-item" href="pelanggan.php">Data Pelanggan</a></li>
            <li><a class="dropdown-item" href="user.php">Data User</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <!-- Menu Transaksi dan Laporan tampil untuk semua level (1 dan 2) -->
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">Laporan</a>
        </li>
      </ul>

      <!-- Menu Profil & Logout di Kanan -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
            <?= htmlspecialchars($_SESSION['nama']); ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>