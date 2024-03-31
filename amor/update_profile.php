<?php 
    include "conn.php";
    session_start();

    $e = $_SESSION['email'];

    $get_name = mysqli_query($conn, "SELECT * FROM users WHERE email = '$e'");
    while($row = mysqli_fetch_object($get_name)){
        $id = $row -> id;
        $name = $row -> name;
        $email = $row -> email;
        $pass = $row -> password;
        $pn = $row -> phoneNumber;
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

    <center>
        <h1>Update Profile</h1>

        <form action="process.php?id=<?php echo $id; ?>" method="post">
            <label for="">Name</label><br>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>" required></p>
            <label for="">Email</label><br>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>" required></p>
            <label for="">Password</label><br>
            <input type="password" name="pass" id="pass" value="<?php echo $pass; ?>" required></p>
            <label for="">Phone Number</label><br>
            <input type="number" name="ph_num" id="ph_num" value="<?php echo $pn; ?>" required></p>
            <input type="submit" value="Update" name="update_account">
        </form>
    </center>
</body>
</html>