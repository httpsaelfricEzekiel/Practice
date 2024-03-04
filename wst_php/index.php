<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
    <style>
        input {
            padding: 10px 10px;
            cursor: pointer;
            box-sizing: border-box;
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
            <a href="index.php">Add Profile</a>
            <a href="records.php">View Records</a>
            <h1>Profile Form</h1>
            <form action="login.php" method="post">
                <label>First Name</label>
                <br>
                <input type="text" name="fname" placeholder="Enter first name" required>
                <br>
                <label>Last Name</label>
                <br>
                <input type="text" name="lname" placeholder="Enter last nane" required>
                <br>
                <label>Email</label>
                <br>
                <input type="email" name="email" placeholder="Enter email" required>
                <br>
                <label>Address</label>
                <br>
                <input type="text" name="address"  placeholder="Enter address" required>
                <br>
                <label>Facebook Link</label>
                <br>
                <input type="text" name="fb_link"  placeholder="Enter facebook link" required>
                <br>
                <label>Age</label>
                <br>
                <input type="number" name="age" placeholder="Enter age" required>
                <br>
                <label>Instagram Link</label>
                <br>
                <input type="text" name="insta_link" placeholder="Enter instagram link" required>
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="pass" placeholder="Enter password" required> 
                <br>
                <br>
                <label>Male</label>
                <input type="radio" name="gender" value="Male">
                <label>Female</label>
                <input type="radio" name="gender" value="Female">
                <br>
                <br>
                <label>College/University</label>
                <br>
                <input type="text" name="school"  placeholder="Enter college or univeristy" required>
                <br>
                <br>
                <input type="reset" value="Reset">
                <input type="submit" value="Login" name="verification_profile">
            </form>
        </center>
    </div>
</body>
</html>
