<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
</head>
<body>
    <div class="form-container">
        <form action="verification.php" method="POST">
            <input type="text" name="fname" id="fname" placeholder="Enter first name" required>
            <br>
            <input type="text" name="lname" id="lname" placeholder="Enter last nane" required>
            <br>
            <input type="email" name="email" id="email" placeholder="Enter email" required>
            <br>
            <input type="text" name="address" id="address" placeholder="Enter address" required>
            <br>
            <input type="text" name="fb_Link" id="fbLink" placeholder="Enter facebook link" required>
            <br>
            <input type="number" name="age" id="age" placeholder="Enter age" required>
            <br>
            <input type="text" name="insta_link" id="instaLink" placeholder="Enter instagram link" required>
            <br>
            <input type="password" name="pass" id="password" placeholder="Enter password" required> 
            <br>
            <input type="text" name="gender" id="gender" placeholder="Enter sex" required>
            <br>
            <input type="text" name="school" id="school" placeholder="Enter college or univeristy" required>
            <br>
            <br>
            <input type="reset" value="Reset">
            <input type="submit" value="Login"  id="login" name="verification_profile">
        </form>
    </div>
</body>
</html>