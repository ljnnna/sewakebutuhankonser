<?php
session_start();
include '../koneksi/koneksi.php';

// Inisialisasi keranjang jika belum ada
if (!isset($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = [];
}

// Tangkap id_produk yang dikirim dari katalog.php
if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];

    // Ambil detail produk dari database
    $ambil = $conn->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
    $produk = $ambil->fetch_assoc();

    // Periksa apakah stok mencukupi
    if ($produk['stok_produk'] > 0) {
        // Periksa apakah produk sudah ada dalam keranjang
        if (isset($_SESSION['keranjang'][$id_produk])) {
            $_SESSION['keranjang'][$id_produk]['quantity'] += 1;
        } else {
            // Tambahkan produk ke keranjang
            $_SESSION['keranjang'][$id_produk] = [
                'id_produk' => $produk['id_produk'],
                'nama_produk' => $produk['nama_produk'],
                'foto_produk' => $produk['foto_produk'],
                'sewa_produk' => $produk['sewa_produk'],
                'quantity' => 1,
            ];
        }

        // Kurangi stok produk di database
        $conn->query("UPDATE produk SET stok_produk = stok_produk - 1 WHERE id_produk = '$id_produk'");
    } else {
        // Redirect dengan pesan bahwa stok habis
        header("Location: katalog.php?error=stok_habis");
        exit;
    }

    // Redirect ke keranjang.php untuk menampilkan keranjang
    header("Location: keranjang.php");
    exit;
}

// Handle hapus produk dari keranjang
if (isset($_GET['hapus_produk'])) {
    $hapus_produk = $_GET['hapus_produk'];

    // Kembalikan stok ke database berdasarkan jumlah di keranjang
    $quantity_kembali = $_SESSION['keranjang'][$hapus_produk]['quantity'];
    $conn->query("UPDATE produk SET stok_produk = stok_produk + $quantity_kembali WHERE id_produk = '$hapus_produk'");

    // Hapus produk dari keranjang
    unset($_SESSION['keranjang'][$hapus_produk]);

    header("Location: keranjang.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keranjang Belanja</title>
  <!-- Link ke CSS Bootstrap -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=backpack" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=light" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
      body{
          background-color: #fcf5e5;
          display: flex;
          flex-direction: column;
          min-height: 100vh;
          font-family: 'Poppins', sans-serif;
      }
      .navbar {
          background: #ECB53D;
          color: #20432f;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          z-index: 1000;
      }

      .hamburger {
          display: flex;
          align-items: center;
      }

      .logo2 {
          display: flex;
          align-items: center;
          gap: 10px;
      }

      .logo2 h3 {
          font-weight: bold;
          font-size: 1.3rem;
          font-family: 'Poppins', sans-serif;
          color: #20492f;
          margin: 0;
      }

      .logo2 img {
          width: 50px;
          margin-left: 20px
      }

      @media (max-width: 700px ) {

      .logo2 h3 {
        font-size: 0.9rem;
      }

      .logo2 img {
        margin-left: 10px;
        width: 40px;
      }
    }

      .offcanvas.offcanvas-start {
        width: 300px;
        background: #fcf5e5;
        font-size: 1rem;
      }

      .offcanvas-title {
        font-size: 2rem;
        color: #20492f;
      }

      .offcanvas.offcanvas-start a {
        display: block; /* Pastikan elemen a mengisi seluruh lebar container */
        padding: 10px 20px; /* Atur padding untuk jarak dalam */
        border-radius: 50px; /* Membuat lonjong ke samping */
        transition: all 0.3s ease; /* Efek transisi halus */
      }

      .offcanvas.offcanvas-start a:hover {
        background-color: #20492f; /* Ganti dengan warna hover yang diinginkan */
        color: white; /* Warna teks saat hover */
        transition: all 0.4s ease; /* Efek transisi untuk perubahan warna */
        font-size: 1.1rem;
      }

      .dropdown-menu {
        background: #fcf5e5;
        width: 200px;
      }

      .dropdown-menu a {
        color: black;
        display: block; /* Pastikan elemen a mengisi seluruh lebar container */
        padding: 10px 20px; /* Atur padding untuk jarak dalam */
        border-radius: 50px; /* Membuat lonjong ke samping */
        transition: all 0.3s ease; /* Efek transisi halus */
        font-size: 0.9rem;
      }

      .dropdown-menu a:hover {
        background-color: #20492f; /* Ganti dengan warna hover yang diinginkan */
        color: white; /* Warna teks saat hover */
        transition: all 0.4s ease; /* Efek transisi untuk perubahan warna */
        font-size: 1rem;
      }

      .nav-item {
        color: green !important; /* Tetapkan warna hijau */
      }

      @media (max-width: 700px ) {

        .offcanvas.offcanvas-start {
          width: 270px;
          font-size: 0.9rem;
        }

        .offcanvas-title {
        font-size: 1.5rem;
      }

      .offcanvas.offcanvas a:hover {
        font-size: 1rem;
      }
    }

      .card {
          margin-bottom: 20px;
      }
      .card img {
          width: 100px;
          height: auto;
      
      }
      .btn-sewa {
          background-color: #2d572c;
          color: #fff;
          width: 100%;
          padding: 10px;
          font-size: 18px;
          font-weight: bold;
          border: none;
      }   
      .container {
          margin-top: 100px;
          flex: 1;
      }
      .profile-icon {
          color: #20492f;
      }
      .profile-details {
          font-size: 0.9rem;
      }
      .profile-details .email {
          font-size: 0.85rem;
          color: black;
      }
      .footer {
    background: #000;
    color: #fff;
    padding: 20px 30px 0 50px;
    margin-top: auto; /* Menjaga footer tetap di bawah */
    max-width: 100%;
    border-top: 1px solid #fff;
}

    .footer .logo {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .footer .logo img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }
    .footer .social-icons {
        display: flex;
        justify-content: flex-start;
        margin-top: 10px;
    }
    .footer .social-icons a {
        color: #fff;
        margin: 0 12px;
        font-size: 20px;
    }
    
    .footer .subscribe a {
        background-color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 1.2rem;
        align-items: center;
        display: flex;
        justify-content: center;
        color: #000;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer .subscribe a:hover {
      background-color: #000;
      color: #fff;
    }

    .footer .copyright {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
    }

        .table {
          border: 1px solid #ddd;
          background-color: #fff;
        }

        .table th,
        .table td {
          border: 1px solid #ddd;
        }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="hamburger">
        <!-- Tombol Hamburger -->
        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Logo -->
        <div class="logo2">
          <img src="Gambar/RentRail.png" alt="Logo">
          <h3>Halo  <?= $_SESSION['username']?></h3>
        </div>
      </div>

      <!-- Search bar dan Ikon Profil -->
      <div class="d-flex align-items-center">
        <div class="dropdown">
          <a href="#" class="profile-icon" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle fa-2x"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li class="px-3 py-2 profile-details">
              <strong><?= $_SESSION['username']?></strong>
              <p class="email mb-1"><?= $_SESSION['email']?></p>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="profil.php" class="dropdown-item">Profil Saya</a></li>
            <li><a href="perbarui_password.php" class="dropdown-item">Perbarui Password</a></li>
            <li><a class="dropdown-item" href="keluar.php">Keluar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
      <!-- Navbar Offcanvas yang muncul dari kiri -->
     <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="home.php"><i class="fas fa-house"></i> Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="katalog.php"><i class="fas fa-mountain"></i></i> Produk</a>
                    <li class="nav-item"><a class="nav-link" href="keranjang.php"><i class="fas fa-shopping-cart"></i> Keranjang</a></li>
                    <li class="nav-item"><a class="nav-link" href="menyewa.php"><i class="fas fa-solid fa-person-chalkboard"></i> Cara Menyewa</a></li>
                    <li class="nav-item"><a class="nav-link" href="hubungi.php"><i class="fas fa-envelope fa-fw"></i> Hubungi Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="histori.php"><i class="fas fa-solid fa-receipt"></i> Histori</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <div class="container" style="margin-top: 100px;">
      <div class="container" style="margin-top: 100px;">
  <?php if (empty($_SESSION['keranjang'])): ?>
    <p>Keranjang Anda kosong. <a href="katalog.php">Sewa sekarang!</a></p>
  <?php else: ?>
    <table class="table">
      <thead>
        <tr>
          <th>Produk</th>
          <th>Harga Sewa / Hari</th>
          <th>Jumlah Produk</th>
          <th>Sub-total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($_SESSION['keranjang'] as $id_produk => $produk): ?>
          <tr>
            <td>
              <img src="../assets/foto_produk/<?php echo $produk['foto_produk']; ?>" alt="Foto Produk" width="80"><br>
              <?php echo $produk['nama_produk']; ?>
            </td>
            <td>Rp<?php echo number_format($produk['sewa_produk'], 0, ',', '.'); ?></td>
            <td>
            <?php echo $produk['quantity']; ?>
            </td>
            <td>Rp<?php echo number_format($produk['sewa_produk'] * $produk['quantity'], 0, ',', '.'); ?></td>
            <td>
              <a href="keranjang.php?hapus_produk=<?php echo $id_produk; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="pembayaran.php" class="btn btn-primary">Lanjutkan ke Pembayaran</a>
  <?php endif; ?>
  </div>
   </div>
                </div>
  <!--FOOTER-->
  <footer class="footer container">
    <div class="row">
        <div class="col-md-4">
            <div class="logo">
                <img src="Gambar/RentRail.png" width="50"/>
                <span>RentRail.</span>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-md-4 contact-info">
            <h5>CONTACT US</h5>
            <p>rentrail@gmail.com</p>
            <p>Politeknik Negeri Batam, Batam Center, 24587<br/>Batam, Kepulauan Riau</p>
        </div>
        <div class="col-md-4 subscribe">
            <h5>SUBSCRIBE</h5>
            <p>Klik jika ingin bertanya terkait web kami</p>
            <a href="hubungi.php"> Kontak</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <hr style="border-color: #fff;"/>
        </div>
    </div>
    <div class="row">
        <div class="col-12 copyright">
            <p>&copy; 2024 Dreamy Inc. All rights reserved</p>
        </div>
    </div>
</footer>

  <!-- Link ke JS Bootstrap (untuk menambahkan interaktivitas) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script>
    function ubahHari(id_produk, jumlah) {
        // Check for valid value to prevent going below 1 day
        let quantity = document.getElementById("quantity_" + id_produk).innerText;

        let newQuantity = parseInt(quantity) + jumlah;
        if (newQuantity < 1) newQuantity = 1; // Prevent going to 0 or negative

        // Send request to update the session variable (could be done via AJAX for seamless update)
        window.location.href = "keranjang.php?id_produk=" + id_produk + "&update_quantity=" + newQuantity;
    }
</script>

</body>
</html>