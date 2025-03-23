<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #FCF5E5;
}
.container {
    display: flex;
    width: 100%;
    height: 100vh;
}
.left-box {
    flex: 0.4; /* 40% untuk bagian kiri */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 0 30px 30px 0;
    text-align: center;
    background-color: #20492F;
}
.left-box img {
    max-width: 50%;
    height: auto;
    margin-bottom: 20px;
}
.left-box h1 {
    color: #FFFFFF;
    font-size: 40px;
    font-weight: 600;
}
.left-box h2, .left-box p {
    color: #FFFFFF;
}
.right-box {
    flex: 0.6; 
    display: flex;
    justify-content: center;
    align-items: center;
}
.login-box {
    width: 500px;
    height: 560px;
    padding: 30px;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
}
.login-header {
    text-align: center;
    margin-bottom: 10px;
    margin-top: -20px;
}
.login-header header {
    color: #333;
    font-size: 30px;
    font-weight: 600;
}
.input-box .input-field {
    width: 100%;
    height: 40px;
    font-size: 16px;
    padding: 0 20px;
    margin-bottom: 15px;
    border-radius: 25px;
    border: 1px solid #ccc;
    outline: none;
    transition: .3s;
}
.input-field:focus {
    border-color: #222;
}
.input-box.password-group {
    display: flex;
    justify-content: space-between;
}
.input-box.password-group .input-field {
    width: 48%;
}
.input-box.password-group .input-field:last-child {
    margin-left: 4%;
}
.forgot {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
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
    .container {
        height: 100%;
    }
    .bingkai {
        width: 280px;
    }
    .login-box {
        width: 300px;
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
            <h1>Welcome!</h1>
            <img src="Gambar/RentRail.png" alt="logo">
            <h2>Halo Sobat GO RENT!</h2>
            <p>get your account so you can explore the whole thing in our website</p>
          </div>
        </div>
        <div class="right-box">
            <div class="login-box">
                <div class="login-header">
                    <header>DAFTAR</header>
                </div>
                <form action="register.php" method="post">
                    <div class="input-box">
                        <label for="name"></label> 
                        <input type="text" class="input-field" placeholder="Masukkan nama" id="nama" name="nama" required>
                    </div>
                    <div class="input-box">
                        <label for="username"></label> 
                        <input type="text" class="input-field" placeholder="Masukkan username" id="username" name="username" required>
                    </div>
                    <div class="input-box">
                        <label for="email"></label> 
                        <input type="email" class="input-field" placeholder="Masukkan email" id="email" name="email" required>
                    </div>
                    <div class="input-box">
                        <label for="password"></label>
                        <input type="password" class="input-field" placeholder="Masukkan password" id="password" name="password" required>
                    </div>
                    <div class="input-box">
                        <label for="phone"></label> 
                        <input type="tel" class="input-field" placeholder="08xxxxxxxxxx" id="phone" name="phone" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" required>
                    </div>
                    <div class="input-box">
                        <label for="alamat"></label> 
                        <input type="text" class="input-field" placeholder="Masukkan alamat" id="alamat" name="alamat" required>
                    </div>
                    <div class="forgot">
                        <section>
                            <input type="checkbox" id="check">
                            <label for="check">Ingat saya</label>
                        </section>
                    </div>
                    <div class="input-submit">
                        <button type="submit" class="submit-btn" id="submit">DAFTAR</button> 
                    </div>
                    <div class="sign-up-link">
                        <p>sudah punya akun? <a href="masuk.php">Masuk</a></p>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>