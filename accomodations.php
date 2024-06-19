<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akomodasi</title>
    <link rel="stylesheet" href="css/akomodasi.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="singgah.png" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="accomodations.php">Accomodations</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="https://linktr.ee/s.homestayyk">Contact</a></li>
                <li><a href="login.php"><?php
             session_start(); 
            $username = file_get_contents('user.txt');
            if (empty($username)) {
              echo "LOGIN";
            } else {
              echo htmlspecialchars($username);}?> </a></li>
            </ul>
        </div>
        <div class="content">
            <div class="homestay-container">
                <div class="homestay-item">
                    <p>HOMESTAY XT SQUARE</p>
                    <img src="img/rumah1.jpg" alt="Homestay 1" class="homestay-image">
                    <p>Harga : <span class="harga">RP.300.000/hari</span></p>
                    <a href="booking.php?image=img/rumah1.jpg" class="button">Pilih Homestay Ini</a>
                </div>
                <div class="homestay-item">
                    <p>Homestay bantul</p>
                    <img src="img/rumah2.jpg" alt="Homestay 2" class="homestay-image">
                    <p>Harga : <span class="harga">RP.450.000/hari</span></p>
                    <a href="booking.php?image=img/rumah2.jpg" class="button">Pilih Homestay Ini</a>
                </div>
                <div class="homestay-item">
                    <p>Homestay tamanan</p>
                    <img src="img/rumah3.jpg" alt="Homestay 3" class="homestay-image">
                    <p>Harga : <span class="harga">RP.400.000/hari</span></p>
                    <a href="booking.php?image=img/rumah3.jpg" class="button">Pilih Homestay Ini</a>
                </div>
                <div class="homestay-item">
                    <p>Homestay nitikan</p>
                    <img src="img/rumah4.jpg" alt="Homestay 4" class="homestay-image">
                    <p>Harga : <span class="harga">RP.600.000/hari</span></p>
                    <a href="booking.php?image=img/rumah4.jpg" class="button">Pilih Homestay Ini</a>
                </div>
                <div class="homestay-item">
                    <p>Homestay sleman</p>
                    <img src="img/rumah5.jpg" alt="Homestay 5" class="homestay-image">
                    <p>Harga : <span class="harga">RP.600.000/hari</span></p>
                    <a href="booking.php?image=img/rumah5.jpg" class="button">Pilih Homestay Ini</a>
                </div>
                <div class="homestay-item">
                    <p>Homestay kotagede</p>
                    <img src="img/rumah6.jpg" alt="Homestay 6" class="homestay-image">
                    <p>Harga : <span class="harga">RP.650.000/hari</span></p>
                    <a href="booking.php?image=img/rumah6.jpg" class="button">Pilih Homestay Ini</a>
                </div>
                <div class="homestay-item">
                    <p>Homestay Tugu</p>
                    <img src="img/rumah7.jpg" alt="Homestay 7" class="homestay-image">
                    <p>Harga : <span class="harga">RP.700.000/hari</span></p>
                    <a href="booking.php?image=img/rumah7.jpg" class="button">Pilih Homestay Ini</a>
                </div>
                <div class="homestay-item">
                    <p>Homestay Malioboro</p>
                    <img src="img/rumah8.jpg" alt="Homestay 8" class="homestay-image">
                    <p>Harga : <span class="harga">RP.800.000/hari</span></p>
                    <a href="booking.php?image=img/rumah8.jpg" class="button">Pilih Homestay Ini</a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <p>© 2023 Brigoda Homestay. All rights reserved.</p>
            <p>Follow us on <a href="https://instagram.com">Instagram</a>, <a href="https://facebook.com">Facebook</a></p>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
