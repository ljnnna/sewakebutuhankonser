<!-- <div>
    Nothing worth having comes easy. - Theodore Roosevelt
</div> -->

<?php
//session_start();
//include '../koneksi/koneksi.php';

// Pastikan pengguna sudah login
//if (!isset($_SESSION['username'])) {
//    header("Location: login.php");
//    exit;
//}

// Ambil data transaksi pengguna dari database
$username = $_SESSION['username'];
$query = "SELECT 
            sewa.nama_penerima, 
            sewa.alamat, 
            sewa.tanggal_penyewaan, 
            sewa.selesai_penyewaan, 
            sewa.total_harga, 
            sewa.metode_pembayaran, 
            produk.nama_produk, 
            produk.foto_produk
          FROM sewa 
          JOIN produk ON sewa.id_produk = produk.id_produk 
          WHERE sewa.nama_penerima = ?"; // Menggunakan session untuk nama penerima
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$transaksi = [];
while ($row = $result->fetch_assoc()) {
    $transaksi[] = $row;
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Penyewaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke CSS Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=backpack" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=light" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body{
        background-color: #fcf5e5;
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
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
        margin-left: 20px;
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
    .container {
        margin-top: 70px;
        flex: 1;
    }
    .card {
        margin-bottom: 20px;
        border: 1px solid #ddd;
        box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
        height: 100%;
    }
    .card img {
        max-width: 100%;
        height: auto;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }
    .card-body {
    padding: 15px;
    }
    .btn-secondary {
        margin-top: 20px;
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
                    <li class="nav-item"><a class="nav-link" href="katalog.php" ><i class="fas fa-mountain"></i></i> Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="keranjang.php"><i class="fas fa-shopping-cart"></i> Keranjang</a></li>
                    <li class="nav-item"><a class="nav-link" href="menyewa.php"><i class="fas fa-solid fa-person-chalkboard"></i> Cara Menyewa</a></li>
                    <li class="nav-item"><a class="nav-link" href="hubungi.php"><i class="fas fa-envelope fa-fw"></i> Hubungi Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="histori.php"><i class="fas fa-solid fa-receipt"></i> Histori</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

    <div class="container">
        <h1 class="mb-4">Histori Penyewaan</h1>
        <?php if (empty($transaksi)): ?>
            <div class="alert alert-info">Belum ada transaksi penyewaan yang tercatat.</div>
        <?php else: ?>
            <div class="row">
                <?php foreach ($transaksi as $t): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="../assets/foto_produk/<?php echo htmlspecialchars($t['foto_produk']); ?>" alt="Produk">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($t['nama_produk']); ?></h5>
                                <p class="card-text">
                                    <strong>Username:</strong> <?php echo htmlspecialchars($t['nama_penerima']); ?><br>
                                    <strong>Alamat:</strong> <?php echo htmlspecialchars($t['alamat']); ?><br>
                                    <strong>Tanggal Sewa:</strong> <?php echo htmlspecialchars($t['tanggal_penyewaan']); ?><br>
                                    <strong>Selesai Sewa:</strong> <?php echo htmlspecialchars($t['selesai_penyewaan']); ?><br>
                                    <strong>Total Harga:</strong> Rp<?php echo number_format($t['total_harga'], 0, ',', '.'); ?><br>
                                    <strong>Metode Pembayaran:</strong> <?php echo htmlspecialchars($t['metode_pembayaran']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <a href="home.php" class="btn btn-secondary">Kembali ke halaman Utama</a>
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
</body>
</html>