<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, ssinitial-scale=1.0">
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
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="homestay-container">
                <div class="homestay-item">
                    <p>HOMESTAY XT SQUARE</p>
                    <img src="img/rumah1.jpg" alt="Homestay 1" class="homestay-image">
                    <p>Harga : <span class="harga">RP.300.000/hari</span></p>
                    <button onclick="pilihHomestay('Homestay 1')">Pilih Homestay Ini</button>
                </div>
                <div class="homestay-item">
                    <p>Homestay Jogja</p>
                    <img src="img/rumah2.jpg" alt="Homestay 2" class="homestay-image">
                    <p>Harga : <span class="harga">RP.450.000/hari</span></p>
                    <button onclick="pilihHomestay('Homestay 2')">Pilih Homestay Ini</button>
                </div>
                <div class="homestay-item">
                    <p>Homestay Jogja</p>
                    <img src="img/rumah2.jpg" alt="Homestay 3" class="homestay-image">
                    <p>Harga : <span class="harga">RP.400.000/hari</span></p>
                    <button onclick="pilihHomestay('Homestay 3')">Pilih Homestay Ini</button>
                </div>
                <div class="homestay-item">
                    <p>Homestay Jogja</p>
                    <img src="img/rumah2.jpg" alt="Homestay 4" class="homestay-image">
                    <p>Harga : <span class="harga">RP.600.000/hari</span></p>
                    <button onclick="pilihHomestay('Homestay 4')">Pilih Homestay Ini</button>
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