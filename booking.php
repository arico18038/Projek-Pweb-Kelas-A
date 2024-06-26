<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <title>Booking Homestay</title>
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
        <div class="content">
    <div class="booking-page">
        <?php
        $imageSrc = $_GET['image']; // Ambil URL gambar dari parameter query
        echo '<img src="' . htmlspecialchars($imageSrc) . '" alt="Selected Homestay" style="width: 100%; max-width: 300px; height: auto;">';
        ?>
        <div id="bookingForm">
            <form action="submit_booking.php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="tanggal">Tanggal check-in:</label>
                <input type="date" id="tanggal" name="tanggal" required><br><br>
                <label for="tanggal">Berapa hari:</label>
                <input type="number" id="hari" name="hari" required><br><br>
                <label for="tanggal">Tanggal Check-Out:</label>
                <input type="submit" value="Book Now">
            </form>
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
