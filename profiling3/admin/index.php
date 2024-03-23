<?php 
    include "../conn.php";
    session_start();

    if(empty($_SESSION)){
        ?>
            <script>
                alert("Please login first");
                window.location.href="../index.php";
            </script>
        <?php
    } else {
        $email= $_SESSION['email'];

        $get_details = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");
        while($row = mysqli_fetch_object($get_details)){
            $firstName = $row -> firstName;
            $lastName = $row -> lastName;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $firstName. '' .$lastName?></title>
</head>
<body>
    <h1>Hello admin!!</h1>
    <a href="../logout.php">Logout</a>
</body>
</html>