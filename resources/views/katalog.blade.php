
<?php
session_start();
include '../koneksi/koneksi.php';

// Amankan input pencarian
$searchQuery = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '';

// Query data produk
$sql = "SELECT produk.*, kategori.nama_kategori FROM produk 
        JOIN kategori ON produk.id_kategori = kategori.id_kategori 
        WHERE produk.nama_produk LIKE ?";
$stmt = $conn->prepare($sql);
$searchParam = "%$searchQuery%";
$stmt->bind_param("s", $searchParam);
$stmt->execute();
$result = $stmt->get_result();
$produk = [];
while ($row = $result->fetch_assoc()) {
    $produk[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=backpack" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=light" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poopins', sans-serif;
    }
    body {
      background: #FCF5E5;
      font-family: 'Arial', sans-serif;
      width: 100%;
      height: 100%;
    }
    .navbar {
      background: #ECB53D;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
    }
    .navbar .nav-links {
      display: flex;
      max-width: 1200px;
      margin: 0 auto;
      list-style: none;
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
      margin-left: 20px;
      width: 50px;
    }

    .background {
        position: relative;
        width: calc(100% - 40px); /* Kurangi lebar untuk memberi jarak */
        margin: 100px 20px; /* Jarak atas, bawah, kiri, kanan */
        border-radius: 30px; /* Membuat sudut melengkung */
        overflow: hidden; /* Memastikan konten tidak keluar */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Estetika tambahan */
    }

    .background img {
        width: 100%;
        height: auto; /* Pastikan gambar responsif */
        display: block; /* Hindari margin bawaan gambar */
        border-radius: 30px; /* Mengikuti border-radius elemen parent */
    }


    .logo1 {
      width: 1000px; 
      height: auto; 
    }

    @media (max-width: 700px ) {

    .logo2 h3 {
      font-size: 0.9rem;
    }

    .logo2 img {
      margin-left: 10px;
      width: 40px;
    }

    .background {
    position: relative;
    width: calc(100% - 40px); /* Kurangi lebar untuk memberi jarak */
    margin: 70px 20px; /* Jarak atas, bawah, kiri, kanan */
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

    .mb-4 {
      margin-top: 80px;
    }

    .card {
      max-width: 300px; /* Slightly bigger card width */
      margin: 20px auto;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      display: flex;
      flex-direction: column;
      height: auto;  /* Height adjusts based on content */
    }
    .card-item {
        color: black;
        width: 100%; /* Memanfaatkan kolom Bootstrap untuk menyesuaikan ukuran */
        min-height: 400px; /* Tetapkan tinggi minimum agar konsisten */
        padding: 35px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between; /* Mengatur elemen agar merata */
        border-radius: 8px;
        background: white;
        border: 1px solid #20492f;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .card img {
      width: 100%;
      height: 200px;  /* Fixed height for images */
      object-fit: cover; /* Ensure images maintain aspect ratio while covering the area */
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }
    .card-body {
    padding: 10px;
    text-align: center;
    }
    
    .card-title {
      font-size: 1rem;
      font-weight: bold;
      margin-bottom: 8px;
    }

    .card-text {
      font-size: 1rem;
      margin: 5px 0;
    }
    .catalog {
        width: 300px; /* Lebar yang sama */
        height: 200px; /* Tinggi yang seragam untuk gambar */
        margin-bottom: 20px;
    }
    .card-item h3 {
        font-size: 1.25rem;
        text-align: center;
    }
    .catalog-detail {
        font-size: 0.9rem;
        text-align: center;
        flex-grow: 1; /* Biarkan elemen mendistribusikan ruang */
    }
    .row.align-items-center {
        margin-top: 10px;
    }
    .row-cols-1 .col {
      margin-bottom: 15px; 
    }  

    .modal-content {
      max-width: 400px;
      margin: auto;
      border-radius: 8px;
    }

    .modal-body img {
      max-height: 200px;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .modal-body p {
      font-size: 0.9rem;
      margin: 5px 0;
    }

    .btn-primary {
      background-color: white;
      color: black;
      border: 2px solid black;
      transition: all 0.3s ease;
      font-size: 0.9rem;
      font-weight: bold;
    }
    .btn-primary:hover {
      background-color: black;
      color: white;
      border-color: white;
      transition: all 0.3s ease;
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
    .collapse.show {
        background-color: transparent !important; /* Remove black background */
    }

    .collapse .nav-link {
        color: #20432f;
    }

    .collapse .nav-link:hover {
        background-color: #e5e5e5;
        border-radius: 5px;
    }
    li.icon {
        list-style-type: none; /* Removes the dot */
        padding: 0;
        margin: 0;
    }
    li.icon a {
        color: #000; /* Sets the color to black */
        font-size: 1.5rem; /* Icon size */
        text-decoration: none; /* Removes any text decoration */
    }
    li.icon a:hover {
        color: #333; /* Hover effect */
        transform: scale(1.2); /* Slight scale on hover */
        transition: all 0.3s ease; /* Smooth transition */
    }
    .btn-sm {
        font-size: 0.85rem;
        padding: 6px 12px;
    }
    .detail {
        display: flex;
        align-items: center;
        margin-top: 35px;
    }
    .detail-card {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        border-radius: 12px;
        z-index: 1050;
        max-width: 600px;
        padding: 20px;
        width: 90%;
    }

    .detail-content img {
        max-height: 200px;
        object-fit: cover;
    }
    
    body.modal-open {
        overflow: hidden; /* Disable scroll when card is active */
    }

  </style>
</head>
<body>
  <nav class="navbar">
    <div class="container-fluid">
      <!-- Tombol Hamburger dan Logo -->
      <div class="hamburger">
        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="logo2">
          <img src="Gambar/RentRail.png" alt="Logo">
          <h3>Halo <?= $_SESSION['username']?></h3>
        </div>
      </div>

      <!-- Search bar dan Ikon Profil -->
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
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="home.php" ><i class="fas fa-house"></i> Beranda</a></li>
                    <li class="nav-item "><a class="nav-link" href="katalog.php" ><i class="fas fa-mountain"></i></i> Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="keranjang.php"><i class="fas fa-shopping-cart"></i> Keranjang</a></li>
                    <li class="nav-item"><a class="nav-link" href="menyewa.php"><i class="fas fa-solid fa-person-chalkboard"></i> Cara Menyewa</a></li>
                    <li class="nav-item"><a class="nav-link" href="hubungi.php"><i class="fas fa-envelope fa-fw"></i> Hubungi Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="histori.php"><i class="fas fa-solid fa-receipt"></i> Histori</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
  <!-- Background -->
  <div class="background">
    <img src="Gambar/bgk.jpg" alt="background">
  </div>
  

  <h3 class="text"></h3>
        <div class="container">
            <div class="row">
                <?php foreach ($produk as $key => $value): ?>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card-item">
                        <img src="../assets/foto_produk/<?php echo $value['foto_produk']; ?>" class="catalog">
                        <h3><?php echo $value['nama_produk']; ?></h3>
                        <p class="catalog-detail"><?php echo $value['deskripsi_produk']; ?></p>
                        <p class="catalog-detail"><b>Rp<?php echo number_format($value['sewa_produk'], 0, ',', '.'); ?>/day</b></p>
                        <div class="row align-items-center">
                            <div class="col">
                                <button type="button" class="btn btn-secondary w-100" onclick="showDetail('detailCard<?= $value['id_produk']; ?>')">
                                    More Detail
                                </button>
                            </div>
                            <div class="col-auto">
                                <li class="icon">
                                    <a href="keranjang.php?id_produk=<?php echo $value['id_produk']; ?>">
                                        <i class="bx bxs-cart-alt"></i>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

       <!-- Card Detail Produk -->
            <div id="detailCard<?= $value['id_produk']; ?>" class="detail-card" style="display: none;">
                <div class="detail-content">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../assets/foto_produk/<?php echo $value['foto_produk']; ?>" alt="<?php echo $value['nama_produk']; ?>" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo $value['nama_produk']; ?></h4>
                            <p><strong>Ukuran Produk:</strong> <?php echo $value['ukuran_produk']; ?></p>
                            <p><strong>Stok Produk:</strong> <?php echo $value['stok_produk']; ?></p>
                            <p><strong>Deskripsi:</strong> <?php echo $value['deskripsi_produk']; ?></p>
                            <p><strong>Harga:</strong> Rp<?php echo number_format($value['sewa_produk'], 0, ',', '.'); ?>/day</p>
                            <div class="d-flex justify-content-between">
                                <!-- Adjust button size with custom classes or inline styles -->
                                <button class="btn btn-secondary btn-sm" onclick="closeDetail('detailCard<?= $value['id_produk']; ?>')">Tutup</button>
                                <a href="keranjang.php?id_produk=<?php echo $value['id_produk']; ?>" class="btn btn-primary btn-sm">Tambahkan ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
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
            // Menampilkan detail produk
        function showDetail(detailId) {
            document.getElementById(detailId).style.display = "block";
            document.body.classList.add("modal-open"); // Menghentikan scroll pada body
        }

        // Menutup detail produk
        function closeDetail(detailId) {
            document.getElementById(detailId).style.display = "none";
            document.body.classList.remove("modal-open"); // Mengembalikan scroll
        }
  </script> 
</body>
</html>
