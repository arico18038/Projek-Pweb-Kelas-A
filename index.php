<!DOCTYPE html>
<html lang="en">
<head>
<!-- <<<<<<< HEAD -->
    <title>Homestay</title>
    <link rel="stylesheet" href="css/style.css">
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
            <h1>Selamat Datang di Singgahin</h1>
            <p>Pilihan terbaik dengan harga terbaik ada disini,<br>Pilih tempat singgah suka suka refund suka suka </p>

            <form>
                <label for="check-in">Check-In/Check-Out</label>
                <input type="date" id="check-in" name="check-in">
                <div class="guests">
                    <label for="adults">Adults</label>
                    <input type="number" id="adults" name="adults" value="1" min="1">
                    <label for="children">Children</label>
                    <input type="number" id="children" name="children" value="0" min="0">
                </div>
                <button type="submit">Check Availability</button>
            </form>
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