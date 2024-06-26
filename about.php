<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>About</title>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="singgah.png" class="logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="accomodations.php">Accomodations</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="kontak.php">Contact</a></li>
               <li><a href="login.php"><?php
             session_start(); 
            $username = file_get_contents('user.txt');
            if (empty($username)) {
              echo "LOGIN";
            } else {
              echo htmlspecialchars($username);}?> </a></li>
            </ul>
            </ul>
        </div>

        <div class="section about-us">
            <h1>Tentang Kami, Singgahin!</h1>
            <p>Didirikan pada tahun 2023 di Yogyakarta, telah berkembang dari startup kecil menjadi salah satu perusahaan perjalanan digital terbesar di Yogyakarta. Misi Singgahin adalah untuk mempermudah semua orang untuk mendapatkan tempat singgah di Yogyakarta.. 
            Melalui investasi dalam bidang teknologi yang membantu mengurangi masalah dalam perjalanan, Singgahin dengan mulus menghubungkan traveler dengan pengalaman yang berkesan dan tempat menginap yang luar biasa - dari rumah sampai hotel dan masih banyak lagi. 
            <br> <br>Sebagai salah satu marketplace terbesar di Yogyakarta untuk merek-merek mapan dan pengusaha dari berbagai level, Singgahin membantu akomodasi di seluruh Yogyakarta untuk menjangkau pasar lokal dan mengembangkan bisnisnya.
            Singgahin menawarkan ribuan listing akomodasi yang terdaftar, termasuk rumah, apartemen, dan tempat menginap unik lainnya.
            Ke mana pun Anda pergi dan apa pun yang ingin Anda lakukan, membuat semuanya lebih mudah dan mendukung Anda dengan layanan customer service 24 jam.</p>
        </div>

        <div class="section offerings">
            <h1>Apa yang Ditawarkan, Singgahin!</h1>
            <p>Apakah Anda ingin tinggal di apartemen kota yang cantik, resor pantai mewah atau B&B yang nyaman di pedesaan, Singgahin memberi Anda keragaman dan keluasan pilihan yang menakjubkan semuanya di satu tempat.</p>
        </div>

        <div class="section team">
            <h1>Tim Pembuat Homestay</h1>
            <ul>
                <li>Syamsu Rizal</li>
                <li>Arico Sangapta Meliala</li>
                <li>Fadel Joan Pratama</li>
            </ul>
        </div>
    </div>   
</div>

<footer>
        <div class="footer-content">
            <p>© 2023 Brigoda Homestay. All rights reserved.</p>
            <p>Follow us on <a href="https://instagram.com">Instagram</a>, <a href="https://facebook.com">Facebook</a></p>
        </div>
</footer>
    </div>
</body>
</html>