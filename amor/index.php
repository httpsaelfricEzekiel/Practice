<?php 
    include "conn.php";
    session_start();
    
    $e = $_SESSION['email'];

    $get_name = mysqli_query($conn, "SELECT * FROM users WHERE email = '$e'");
    while($row = mysqli_fetch_object($get_name)){
        $name = $row -> name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
</head>
<body>
    <a href="index.php">Home</a>
    <a href="gallery.php">Gallery</a>
    <a href="groupProject.php">Group Project</a>
    <a href="createPost.php">Create Post</a>
    <a href="update_profile.php">Update Profile</a>
    <a href="login.php">Logout</a>

    <hr>

    <h1>This is your post</h1>

    <?php 
        $get_post = mysqli_query($conn, "SELECT * FROM post WHERE postBy = '$name'");

        while($row = mysqli_fetch_array($get_post)){
            ?>
                <h2>Title: <?php echo $row['title']; ?></h2>
                <h3>Date: <?php echo $row['date']; ?></h3>
                <h3>Description: <?php echo $row['desc']; ?></h3>
                <hr>
            <?php
        }
    ?>
</body>
</html>