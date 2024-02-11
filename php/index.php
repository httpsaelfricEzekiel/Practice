<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
        <input type="text" name="username" id="uname" placeholder="Username" required>
        <br>
        <input type="password" name="pass" id="password" placeholder="Password" required>
        <br>
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>

<?php   
    include "conn.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $usernameErr = $passErr = "";
        $username = $password = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST['name'])){
                $usernameErr = "Name is required";
            } else {
                $username = test_input($_POST['name']);
                if(!preg_match("/^[a-zA-Z-' ]*$/", $username)){
                    $usernameErr = "Name must be characters";
                }
            }

            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if(empty($_POST['pass'])){
                $passErr = "password in characters";
            } else {
                $password = test_input($_POST['pass']);
                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
                    $passErr = "Password length must be 8 or 16 characters";
                }   
            }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        }

        $insert = mysqli_query($conn, "INSERT INTO profile VALUES('0', $username, $password)");
    }
?>
