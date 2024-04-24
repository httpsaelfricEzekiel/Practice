<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="firstName" id="firstName" placeholder="Enter first name"><br>
        <input type="text" name="lastName" id="lastName" placeholder="Enter last name"><br>
        <input type="email" name="email" id="email" placeholder="Enter email"><br>
        <input type="password" name="pass" id="pass" placeholder="Enter password"><br>
        <a href="login.php">Login</a>
        <button type="submit" name="registerAccount">Register</button>
    </form>
</body>
</html>