<?php 
    include "../conn.php";
    session_start();

    $email = $_SESSION['email'];
    
    $query = "SELECT * FROM admin WHERE email = '$email'";
    $get_admin_name = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($get_admin_name)){
        $name = $row -> admin_name;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $admin_name; ?></title>
</head>
<body>
    <a href="adminhome.php">Home</a> | 
    <a href="user_post.php">User's Posts</a> | 
    <a href="index.php">Logout</a>
    <h1>Welcome Admin <?php echo $admin_name; ?></h1>
    <hr>

</body>
</html>