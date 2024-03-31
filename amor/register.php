<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        ?>
            <link rel="stylesheet" href="style.css">
        <?php
    ?>
    <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="process.php" method="post">
        <label for="">Name</label></br>
        <input type="text" name="name" id="name" required></p>
        <label for="">Email</label></br>
        <input type="email" name="email" id="email" required></p>
        <label for="">Password</label></br>
        <input type="password" name="pass" id="pass" required></p>
        <label for="">Phone Number</label></br>
        <input type="number" name="ph_num" id="ph_num" required></p>
        <input type="submit" value="Register" name="reg_button">
    </form>

    <p><a href="login.php">Login</a></p>
</body>
</html>