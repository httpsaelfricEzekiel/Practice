<?php 
    include "../conn.php";
    session_start();

    $email = $_SESSION['email'];

    $query = "SELECT * FROM admin";
    $get_admin_name = mysqli_query($conn, $query);

    while($row = mysqli_fetch_object($get_admin_name)){
        $admin_name = $row -> admin_name;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $admin_name ?></title>
</head>
<body>
    <a href="adminhome.php">Home</a> | 
    <a href="user_post.php">User's Posts</a> | 
    <a href="index.php">Logout</a>

    <h1>All Post by the Users</h1>
    <hr>

    <?php 
        $get_users_post = mysqli_query($conn, "SELECT * FROM post");

        while($row1 = mysqli_fetch_array($get_users_post)){
            ?>
                <h2>Title: <?php echo $row1['title']; ?></h2>
                <h2>Date: <?php echo $row1['date']; ?></h2>
                <h2>Description: <?php echo $row1['desc']; ?></h2>
                <h2>Posted By: <?php echo $row1['postBy']; ?> </h2>
                
                <hr>
            <?php
        }
    ?>
</body>
</html>