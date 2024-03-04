<?php
    include "conn.php";

    $update_id = $_GET['update_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        input {
            padding: 10px 10px;
            box-sizing: border-box;
            cursor: pointer;
        }
        body {
            background-image: url("mybgx.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
<div class="form-container">
        <center>
            <a href="records.php">View Records</a>
            <?php
                $get_data = mysqli_query($conn, "SELECT * FROM user_profile WHERE id = '$update_id'");

                while($row_data = mysqli_fetch_object($get_data)){
                    $firstName = $row_data -> firstName;
                    $lastName = $row_data -> lastName;
                    $email = $row_data -> email;
                    $address = $row_data -> address;
                    $fbLink = $row_data -> fbLink;
                    $age = $row_data -> age;
                    $instaLink = $row_data-> instaLink;
                    $password = $row_data -> password;
                    $gender = $row_data-> gender;
                    $school = $row_data-> school;
                }
            ?>
            <h1>Update Form</h1>
            <form action="login.php?update_id=<?php echo $update_id?>" method="post">
                <label>First Name</label>
                <br>
                <input type="text" name="fname" placeholder="Enter first name"  value=<?php echo $firstName?>   required>
                <br>
                <label>Last Name</label>
                <br>
                <input type="text" name="lname" placeholder="Enter last nane" value=<?php echo $lastName?>  required>
                <br>
                <label>Email</label>
                <br>
                <input type="email" name="email" placeholder="Enter email" value=<?php echo $email?>    required>
                <br>
                <label>Address</label>
                <br>
                <input type="text" name="address"  placeholder="Enter address" value=<?php echo $address?>  required>
                <br>
                <label>Facebook Link</label>
                <br>
                <input type="text" name="fb_link"  placeholder="Enter facebook link" value=<?php echo $fbLink?> required>
                <br>
                <label>Age</label>
                <br>
                <input type="number" name="age" placeholder="Enter age" value=<?php echo $age?> required>
                <br>
                <label>Instagram Link</label>
                <br>
                <input type="text" name="insta_link" placeholder="Enter instagram link" value=<?php echo $instaLink?> required>
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="pass" placeholder="Enter password" value=<?php echo $password?>  required> 
                <br>
                <br>
                <label>Male</label>
                <input type="radio" name="gender" value="Male" value=<?php echo $gender?> required>
                <label>Female</label>
                <input type="radio" name="gender" value="Female" value=<?php echo $gender?> required>
                <br>
                <br>
                <label>College/University</label>
                <br>
                <input type="text" name="school"  placeholder="Enter college or univeristy"value=<?php echo $school?> required>
                <br>
                <br>
                <input type="reset" value="Reset">
                <input type="submit" value="Update" name="update_data">
            </form>
        </center>
    </div>
</body>
</html>
