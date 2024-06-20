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
        <!-- Menambahkan action ke file PHP handler dan method POST -->
        <form action="handle_signup.php" method="POST">
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
            <div class="btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Sign Up">
            </div>
        </form>
    </div>
</body>
</html>