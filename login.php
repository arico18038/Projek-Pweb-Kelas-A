<?php
session_start();
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data_valid = false;
    $file = fopen("signup_data.txt", "r");
    while (!feof($file)) {
        $line = fgets($file);
        list($file_username, $file_email, $file_password) = explode(", ", $line);
        // Menghapus prefix dan whitespace
        $file_email = trim(str_replace("Email: ", "", $file_email));
        $file_password = trim(str_replace("Password: ", "", $file_password));
        $file_username = trim(str_replace("Username: ", "", $file_username));

        if ($file_email == $email && $file_password == $password) {
            $data_valid = true;
            $username = $file_username; // Sudah tidak perlu ekstrak lagi
            break;
        }
    }
    fclose($file);

    if ($data_valid) {
        $_SESSION['user'] = $username; // Simpan nama pengguna ke session
        file_put_contents('user.txt', $username); // Menulis username ke dalam file user.txt
        header("Location: index.php"); // Redirect ke halaman index
        exit;
    } else {
        $error_message = "Email atau password tidak valid.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login</div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="login.php" method="post" class="login">
                    <div class="field">
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <?php if ($error_message): ?>
                        <p style="color: red;"><?= $error_message ?></p>
                    <?php endif; ?>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Belum terdaftar? <a href="signup.php">Daftar sekarang</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="JavaScript/login.js"></script>
</body>
</html>
