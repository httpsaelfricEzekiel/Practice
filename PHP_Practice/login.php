<?php 
    include "conn.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = test_input($_POST['email']);
        $password = test_input($_POST['pass']);
        $c_password = test_input($_POST['pass']);

        $emailErr = $passErr = $c_passErr = "";

        if(isset($_POST['loginAccount'])){

            if(!empty($email)){
                $email_name = $email;

                if(!filter_var($email_name, FILTER_VALIDATE_EMAIL)){
                    if($email_name == true){
                        $check_email = mysqli_query($conn, "SELECT * FROM login_user WHERE username = '$email' AND password = '$password' ");
                        $validate_email = mysqli_num_rows($check_email);
    
                        if($validate_email >= 1){
                            $_SESSION['email'] = $email;
                            $_SESSION['password'] = $password;
    
                            header("Location: index.php");
                        }
                    }
                } else {
                    $emailErr = "Invalid email format!";
                }
            } else {
                $emailErr = "Email required!";
            }

            if(!empty($password) && ($password == $c_password)){
                if(strlen($password) <= '8'){
                    $passErr = "Your password must contain at least 8 characters!";
                } else if (!preg_match("#[0-9]+#", $password)){
                    $passErr = "Your password must contain at least 1 number!";
                } else if (!preg_match("#[A-Z]+#", $password)){
                    $passErr = "Your password must contain at least 1 upper case letter!";
                } else if (!preg_match("#[a-z]+#", $password)){
                    $passErr = "Your password must contain at least 1 lower case letter!";
                } else {
                    $c_passErr = "Check you've entered your or Confirm your password!";
                }

                $pass = $password;

                if($pass == true){
                    $check_password = mysqli_query($conn, "SELECT * FROM login_user WHERE username = '$email' AND password = '$password' ");
                    $val_password = mysqli_num_rows($check_password);

                    if($val_password >= 1){
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;

                        header("Location: index.php");
                    }
                }

            } else {
                $passErr = "Password required!";
            }
        } else {
            header("Location: login.php");
        }
    } 
    
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="email" name="email" id="email" placeholder="Enter email"> <span class="error">* <?php echo $emailErr; ?></span><br>
        <input type="password" name="pass" id="pass" placeholder="Enter password"> <span class="error">* <?php echo $passErr; ?></span><br>
        <a href="register.php">Register</a>
        <button type="submit" name="loginAccount">Login</button>
    </form>
</body>
</html>