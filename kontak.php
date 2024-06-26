<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kontak.css">

    <title>kontak singgahin</title>
    <style>
       
    </style>
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
                <li><a href="login.php">
                    <?php
                    session_start(); 
                    $username = file_get_contents('user.txt');
                    if (empty($username)) {
                        echo "LOGIN";
                    } else {
                        echo htmlspecialchars($username);
                    }
                    ?>
                </a></li>
            </ul>
        </div>

        <div class="links">
            <h1>Singgahin!</h1>
            <p>Pilihan terbaik dengan harga terbaik ada disini,<br>Pilih tempat singgah suka suka refund suka suka</p>
            <a href="index.php">Website</a>
            <a href="https://facebook.com">Facebook</a>
            <a href="https://instagram.com/example">Instagram</a>
            <a href="https://www.whatsapp.com/?lang=id_ID">whatsapp</a>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>© 2023 Brigoda Homestay. All rights reserved.</p>
            <p>Follow us on <a href="https://instagram.com">Instagram</a>, <a href="https://facebook.com">Facebook</a></p>
        </div>
    </footer>
</body>
</html>
