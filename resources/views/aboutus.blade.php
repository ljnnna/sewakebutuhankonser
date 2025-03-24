<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    background: #fcf5e5;
    padding-top: 70px;
    max-width: 100%;
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
.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}
.navbar .logo {
    text-decoration: none;
    display: flex;
    color: #20492F;
    font-weight: bold;
    align-items: center;
}
.logo img {
    width: 50px;
    margin: 10px 10px 10px 0;
}

.navbar .nav-links {
    list-style: none;
    display: flex;
    margin-right: 20px;
}
.navbar .nav-links li {
    margin-left: 20px;
    text-align: center;
}
.navbar .nav-links a {
    color: #20492F;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s;
}
.navbar .nav-links a:hover {
    color: white;
}

@media (max-width: 700px) {
    .logo img {
        width: 40px;
        margin-left: 10px;
    }
    .navbar .nav-links a {
        font-size: 0.7rem;
    }
    }

/* Content Section */
.content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 20px;
    padding: 20px;
    margin-top: 50px;
}

.content .text {
    max-width: 500px;
    font-size: 1rem;
    color: #333;
}

.content img {
    max-width: 250px;
    height: auto;
    border-radius: 10px;
}

/* Styling untuk Card Header */
.card-header {
    width: 300px;  /* Ukuran lebar kartu */
    height: 400px; /* Ukuran tinggi kartu */
    border-radius: 30px;
    display: flex;
    justify-content: center;  /* Menyusun konten secara horizontal */
    align-items: center;      /* Menyusun konten secara vertikal */
    padding: 20px;
    text-align: center;
    list-style: none;
    margin: 0 auto -100px auto; 
}

/* Gambar di dalam Card Header dengan Efek Transparan */
.card-header img {
    width: 250px;
}


/* Styling untuk elemen di dalam Card Header */
.header-bg {
    display: flex;
    justify-content: center;   /* Menyusun konten secara horizontal di tengah */
    align-items: center;        /* Tidak melebihi lebar */
    list-style: none;
}

.card-header .text {
    width: 150px;
    background: #20492F;
    border-radius: 10px;
    margin: -40px 75px 0 75px;
    font-size: 1rem;
    color: #fcf5e5;
    font-weight: bold;
    position: relative;
    z-index: 2;
}

/* Styling untuk Kartu */
.card-container {
    max-width: 70%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin: 40px auto;
    flex-wrap: wrap;  /* Supaya kartu bisa dibungkus jika layar kecil */
    height: auto;
}

/* Styling untuk kartu */
.card-paper {
    background: #ECB53D;
    width: 220px;  /* Lebar standar kartu */
    height: 250px;
    border-radius: 20px;
    border: 2px solid #9e972e;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    margin: 10px;
    text-align: center;
    box-sizing: border-box;
    list-style: none;
}

.card-paper p {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 0.90rem;
    color: white;
}

.card-paper img {
    width: 100px;
    height: auto;
}

@media (max-width: 700px) {
    .card-container {
        max-width: 100%;
    }

    .card-paper {
        width: 100px;  /* Lebar standar kartu */
        height: 130px;
    }

    .card-paper p {
        font-size: 0.4rem;
    }

    .card-paper img {
        width: 50px;
        height: auto;
    }
}

.main-content {
    padding: 50px 0;
    background-color: #fcf5e5;
}
.main-content h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 2rem;
}
.feature-box {
    display: flex;
    justify-content: center;
    gap: 60px;
    flex-wrap: wrap;
}
.feature {
    width: 200px;
    height: 280px;
    background-color: #ECB53D;
    border: 2px solid #9e972e;
    padding: 20px;
    border-radius: 20px;
    text-align: center;
}
.feature h3 {
    margin: -10px 0 10px 0;
    color: white;
    font-size: 1rem;
}
.feature p {
    font-size: 1rem;
    color: white;
}
.feature-box img {
    width: 100px;
}

@media (max-width: 700px) {

    .feature {
        width: 100px;  /* Lebar standar kartu */
        height: 150px;
    }

    .feature h3 {
        font-size: 0.4rem;
    }

    .feature p {
        font-size: 0.4rem;
    }

    .feature-box img {
        width: 50px;
        height: auto;
    }
}
.card {
    max-width: 250px; /* Membatasi lebar card */
    padding: 20px;
    margin: 10px;
    box-sizing: border-box;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2); /* Efek bayangan */
    border-radius: 8px; /* Membuat sudut card membulat */
}
.row1 {
    max-width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px auto;
    height: auto;
}
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo"><img src="Gambar/RentRail.png" alt="Logo"><h3>RentRail</h3></div>
            <ul class="nav-links">                
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="tentangkami.php">Tentang Kami</a></li>
                <li><a href="masuk.php">Masuk</a></li>
            </ul>
        </div>
    </nav>
    <div class="content">
        <div class="text">
            <h1>Halo, sobat GO RENT !</h1>
            <p>Website kami ini melayani orang-orang yang ingin menyewa peralatan 
                camping. Toko kami ini berpusat di kota Batam, kami menyediakan 
                peraltan camping bagi orang-orang yang tidak ingin membeli peralatan 
                camping. Toko, kami ini sudah banyak mendapat respon baik dari para 
                pelanggan. Karena, harga dan juga sistem penyewaan yang mudah yang kami 
                berikan kepada pelanggan.</p>
        </div>
        <img src="Gambar/rentrail1.png" alt="logo">
    </div>
    <div class="card-header">
        <ul class="header-bg">
            <li><img src="Gambar/pic1.png">
            <p class="text">KENAPA HARUS 
               <br> RENTRAIL </p></li>
        </ul>
    </div>
    <div class="card-container">
        <ul class="card-paper">
            <li><img src="Gambar/pic2.png" alt="Icon 1">
                <p class="text">Sudah terverifikasi memiliki peralatan yang berkualitas</p>
            </li>
        </ul>
        <ul class="card-paper">
            <li><img src="Gambar/pic4.png" alt="Icon 2">
                <p class="text">Peralatan camping yang lengkap dan berbagai macam jenis</p>
            </li>
        </ul>
        <ul class="card-paper">
            <li><img src="Gambar/pic3.png" alt="Icon 3">
                <p class="text">Harga terjangkau, sehingga tidak perlu khawatir untuk harga di toko kami</p>
            </li>
        </ul>
        <ul class="card-paper">
            <li><img src="Gambar/pic5.png" alt="Icon 4">
                <p class="text">Stock barang yang banyak, sehingga tidak khawatir kehabisan</p>
            </li>
        </ul>
        <ul class="card-paper">
            <li><img src="Gambar/pic6.png" alt="Icon 5">
                <p class="text">Kami berkomitmen akan memberi pelayanan yang terbaik</p>
            </li>
        </ul>
    </div>
    
    <!-- Produk -->
    <section id="produk" class="main-content">
        <div class="container">
            <h2>Beberapa Produk Kami</h2>
            <div class="feature-box">
                <div class="feature">
                    <h3>Tenda A</h3>
                    <img src="../assets/foto_produk/tenda1.jpeg" alt="Tenda">
                    <p>Tahan air, dapat menampung 4 orang.</p>
                </div>
                <div class="feature">
                    <h3>Tas A</h3>
                    <img src="../assets/foto_produk/tas1.jpeg" alt="Tas">
                    <p>Dapat mengisi barang dengan kapasitas kecil.</p>
                </div>
                <div class="feature">
                    <h3>Jaket B</h3>
                    <img src="../assets/foto_produk/jaket2.jpeg" alt="Kompor">
                    <p>Dapat menghangatkan tubuh di daerah dingin</p>
                </div>
            </div>
        </div>
      </section>
</body>
</html>
