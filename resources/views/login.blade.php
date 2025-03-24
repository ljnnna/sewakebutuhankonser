<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        /* CSS untuk tata letak baru */
body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #FCF5E5;
    margin: 0;
}

.container {
    display: flex;
    width: 100%;
    height: 100vh;
}

.left-box {
    flex: 0.4; /* Mengatur bagian kiri menjadi 40% dari lebar layar */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 0 30px 30px 0;
    text-align: center;
    background-color: #20492F; /* Opsional: beri warna latar untuk membedakan */
}

.left-box img {
    max-width: 50%; /* Ukuran gambar lebih kecil */
    height: auto;
    margin-bottom: 20px;
}

.left-box h1 {
    color: #FFFFFF;
    font-size: 40px; /* Ukuran teks lebih kecil */
    font-weight: 600;
    margin-top: -30px;
}

.left-box p {
    color: #FFFFFF;
    margin-top: -20px;
}

.right-box {
    flex: 0.6; /* Mengatur bagian kanan menjadi 60% dari lebar layar */
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.login-box {
    width: 400px;
    padding: 30px;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.login-header {
    text-align: center;
    margin-bottom: 20px;
}

.login-header header {
    color: #333;
    font-size: 30px;
    font-weight: 600;
}

.input-box .input-field {
    width: 90%;
    height: 50px;
    font-size: 16px;
    padding: 0 20px;
    margin-bottom: 30px;
    border-radius: 25px;
    border: 1px solid #ccc;
    outline: none;
    transition: .3s;
}

.input-field:focus {
    border-color: #222;
}

.forgot {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.forgot a {
    color: #222;
    font-weight: 600;
    text-decoration: none;
}

.forgot a:hover {
    text-decoration: underline;
}

.input-submit .submit-btn {
    width: 100%;
    height: 50px;
    background: #ECB53D;
    color: #fff;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: background .3s;
}

.submit-btn:hover {
    background: #20492F;
}

.sign-up-link {
    text-align: center;
    margin-top: 10px;
}

.sign-up-link a {
    color: #222;
    font-weight: 600;
    text-decoration: none;
}

.sign-up-link a:hover {
    text-decoration: underline;
}

@media (max-width: 700px ) {

    .left-box {
    border-radius: 30px 0 0 30px;
    }

    .container {
        height: 100%;
    }

    
    .bingkai {
        width: 300px;
    }

    .login-box {
        width: 300px;
        border-radius: 0 30px 30px 0;
    }

    .left-box h1 {
        font-size: 30px; /* Ukuran teks lebih kecil */
        font-weight: 400;
        margin-top: -30px;
    }
}
    </style>
</head>

<body>
    <div class="container">
        <!-- Bagian kiri -->
        <div class="left-box">
          <div class="bingkai">
          <img src="{{ asset('Gambar/RentRail.png') }}" alt="logo">
            <h1>Welcome Back!</h1>
            <p>Halo sobat GO RENT! <br> This is RentRail, put your right password </p>
          </div>
        </div>
    
        <!-- Bagian kanan -->
        <div class="right-box">
            <div class="login-box">
                <div class="login-header">
                    <header>MASUK</header>
                </div>
                <form action="login.php" method="post"> 
                    <div class="input-box">
                        <label for="username"></label> 
                        <input type="text" class="input-field" placeholder="Masukkan username" id="username" name="username" required>
                    </div>
                    <div class="input-box">
                        <label for="password"></label> 
                        <input type="password" class="input-field" placeholder="Masukkan password" id="password" name="password" required>
                    </div>
                    <div class="forgot">
                        <section>
                            <input type="checkbox" id="check">
                            <label for="check">Ingat saya</label>
                        </section>
                    </div>
                    <div class="input-submit">
                        <button type="submit" class="submit-btn" id="submit">MASUK</button> 
                    </div>
                    <div class="sign-up-link">
                        <p>Belum punya akun? <a href="daftar.php">Daftar</a></p>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>