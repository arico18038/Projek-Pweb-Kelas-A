<?php
$error_message = ""; // Inisialisasi variabel untuk menyimpan pesan kesalahan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        // Harap diingat untuk mengenkripsi password sebelum produksi
        $file = fopen("signup_data.txt", "a"); // Membuka file dalam mode append
        fwrite($file, "Username: $username, Email: $email, Password: $password\n");
        fclose($file);
        header("Location: login.php"); // Mengalihkan ke halaman login
        exit(); // Menghentikan eksekusi script lebih lanjut
    } else {
        $error_message = "Password dan konfirmasi password tidak sama.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">Sign Up</div>
        <form method="post">
            <div class="field">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="field">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="field">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <?php if ($error_message): ?>
                <p style="color: red;"><?= $error_message ?></p>
            <?php endif; ?>
            <div class="btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Sign Up">
            </div>
        </form>
    </div>
</body>
</html>