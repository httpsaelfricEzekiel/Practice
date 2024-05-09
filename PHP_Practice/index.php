<?php 
    include "conn.php";
    session_start();

    if(empty($_SESSION)){
        header("Location: login.php");
    } else {
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
    
        $query = mysqli_query($conn, "SELECT * FROM login_user WHERE username = '$email' AND password = '$password'");
        while($get_data = mysqli_fetch_object($query)){
            $firstName = $get_data -> firstName;
            $lastName = $get_data -> lastName;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $firstName . " " . $lastName; ?></title>
</head>
<body>
    <h1>hi <?php echo $firstName . " " . $lastName; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>