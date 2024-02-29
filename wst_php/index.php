<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
    <style>
        input {
            padding: 10px 10px;
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
                <input type="text" name="fname" placeholder="Enter first name" required>
                <br>
                <input type="text" name="lname" placeholder="Enter last nane" required>
                <br>
                <input type="email" name="email" placeholder="Enter email" required>
                <br>
                <input type="text" name="address"  placeholder="Enter address" required>
                <br>
                <input type="text" name="fb_link"  placeholder="Enter facebook link" required>
                <br>
                <input type="number" name="age" placeholder="Enter age" required>
                <br>
                <input type="text" name="insta_link" placeholder="Enter instagram link" required>
                <br>
                <input type="password" name="pass" placeholder="Enter password" required> 
                <br>
                <label>Male</label>
                <input type="radio" name="gender" required>
                <label>Female</label>
                <input type="radio" name="gender" required>
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
