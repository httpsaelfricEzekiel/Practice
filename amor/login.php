<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Welcome to my Login Page!</h1>
    <form action="process.php" method="post">
        <label for="">Email</label><br>
        <input type="email" name="login_email" id="email" placeholder="Enter Email" required>
        </p>
        <label for="">Password</label><br>
        <input type="password" name="login_pass" id="email" placeholder="Enter Password" required>
        </p>
        <input type="submit" value="Login" name="login">
    </form>

    <p><a href="register.php">Register</a></p>
</body>
</html>