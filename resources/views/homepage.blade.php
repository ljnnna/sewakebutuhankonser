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
      width: 100%;
      height: 100vh; /* Mengisi tinggi layar */
    }

    .background img {
      margin-top: 40px;
      width: 100%;
      height: 100%;
      object-fit: cover; /* Memastikan gambar memenuhi area */
    }
    .centered-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 2.5rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
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

    .centered-text {
      font-size: 2.3rem;
    }

    .d-flex.me-3 {
      width: 50px;
    }

    .btn.btn-outline-light.ms-2 {
      width: 50px;
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
        </div>
      </div>

      <!-- Search bar dan Ikon Profil -->
      <div class="d-flex align-items-center">
      <form class="d-flex me-3" action="katalog.php" method="GET">
          <input class="form-control" type="search" name="query" placeholder="Cari produk..." aria-label="Search">
          <button class="btn btn-outline-light ms-2" type="submit">Search</button>
      </form>
        <div class="dropdown">
          <a href="#" class="profile-icon" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle fa-2x"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li class="px-3 py-2 profile-details">
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
    <h2 class="centered-text"><img class="logo1" src="Gambar/RentRail.png" alt="logo">RENT RAIL</h2>
  </div>

  <!-- Produk-->
   <div class="container mt-6">
      <h2 class="mb-4" align="center">Daftar Produk</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="../assets/foto_produk/tenda1.jpeg" class="card-img-top" alt="Gambar Produk">
                <div class="card-body">
                    <h5 class="card-title">Lightstick</h5>
                    <p class="card-text">Harga: Rp 40.000</p>
                    <p class="card-text">Stok: 5</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal1">
                        Detail
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="../assets/foto_produk/tas1.jpeg" class="card-img-top" alt="Gambar Produk">
                <div class="card-body">
                    <h5 class="card-title">Powerbank</h5>
                    <p class="card-text">Harga: Rp 20.000</p>
                    <p class="card-text">Stok: 5</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal2">
                        Detail
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="../assets/foto_produk/jaket2.jpeg" class="card-img-top" alt="Gambar Produk">
                <div class="card-body">
                    <h5 class="card-title">Kursi lipat</h5>
                    <p class="card-text">Harga: Rp 30.000</p>
                    <p class="card-text">Stok: 5</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal3">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>


            <div class="modal fade" id="detailModal1" tabindex="-1" aria-labelledby="detailModalLabel1" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="detailModalLabel1">Tenda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <img src="../assets/foto_produk/tenda1.jpeg" class="img-fluid mb-3" alt="Gambar Produk A">
                          <p><strong>Nama Produk:</strong> Tenda A</p>
                          <p><strong>Harga:</strong> Rp 40.000</p>
                          <p><strong>Stok:</strong> 5</p>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      </div>
                  </div>
              </div>
        </div>
      
        <div class="modal fade" id="detailModal2" tabindex="-1" aria-labelledby="detailModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="detailModalLabel1">Sleeping Bag</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <img src="../assets/foto_produk/tas1.jpeg" class="img-fluid mb-3" alt="Gambar Produk A">
                      <p><strong>Nama Produk:</strong>Tas A</p>
                      <p><strong>Harga:</strong> Rp 20.000</p>
                      <p><strong>Stok:</strong> 5</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="modal fade" id="detailModal3" tabindex="-1" aria-labelledby="detailModalLabel1" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="detailModalLabel1">Jaket</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <img src="../assets/foto_produk/jaket2.jpeg" class="img-fluid mb-3" alt="Gambar Produk A">
                      <p><strong>Nama Produk:</strong> Jaket B</p>
                      <p><strong>Harga:</strong> Rp 30.000</p>
                      <p><strong>Stok:</strong> 5</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
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
</body>
</html>
