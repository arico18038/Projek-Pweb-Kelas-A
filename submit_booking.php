<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homestay</title>
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
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
        </div><div class="content">
        <?php
// Start session dan ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$hari = $_POST['hari'];

// Simpan data ke dalam file teks
$file = 'booking_data.txt';
$content = "Nama: $nama\nEmail: $email\nTanggal Check-In: $tanggal\nDurasi: $hari hari\n";
file_put_contents($file, $content, FILE_APPEND);

// Kirim ucapan terima kasih
echo "<p>Terima kasih telah melakukan pemesanan, $nama. Detail pemesanan Anda telah kami simpan.</p>";

// Tampilkan nota pemesanan
echo "<div class='nota'>";
echo "<h3>Nota Pemesanan</h3>";
echo "<p>Nama: " . htmlspecialchars($nama) . "</p>";
echo "<p>Email: " . htmlspecialchars($email) . "</p>";
echo "<p>Tanggal Check-In: " . htmlspecialchars($tanggal) . "</p>";
echo "<p>Durasi: " . htmlspecialchars($hari) . " hari</p>";
echo "</div>";
?>
           
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
