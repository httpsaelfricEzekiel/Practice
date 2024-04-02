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


    <h1>Create Post</h1>

    <form action="process.php" method="post">
        <label for="">Title</label><br>
        <input type="text" name="title" id="title" placeholder="What's on your mind?" required></p>
        <label for="">Select Date</label><br>
        <input type="date" name="date" id="date" required></p>
        <label for="">Add Description</label><br>
        <textarea name="desc" id="desc" cols="50" rows="10"></textarea></p>
        <input type="hidden" name="posted_by" value=<?php echo $name?>>
        <input type="submit" name="createPost" value="Post">
    </form>
</body>
</html>