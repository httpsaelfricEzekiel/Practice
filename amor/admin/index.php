<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <form action="adminprocess.php" method="post">
        <label for="">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Enter email" required></p>
        <label for="">Password</label><br>
        <input type="password" name="pass" id="pass" placeholder="Enter password" required></p>
        <input type="submit" value="Login" name="admin_login">
    </form>
</body>
</html>