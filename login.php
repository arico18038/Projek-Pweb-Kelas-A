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
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="signup.html">Signup now</a>
                    </div>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    // Proses login
                    // Anda bisa menambahkan kode untuk verifikasi email dan password dengan database
                    echo "Email: " . $email . "<br>";
                    echo "Password: " . $password;
                }
                ?>
            </div>
        </div>
    </div>
    <script src="JavaScript/login.js"></script>
</body>
</html>
