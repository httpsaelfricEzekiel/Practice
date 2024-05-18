<?php 
    require "conn.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $login_user = $_POST['loginAccount'];
        $email = test_input($_POST['email']);
        $password = test_input($_POST['pass']);
        $c_password = test_input($_POST['pass']);

        $emailErr = $passErr = $c_passErr = " ";

        if(isset($login_user)){

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
                    $emailErr = "Incorrect email format!";
                }
            } else {
                $emailErr = "Email required!";
            }
            
            if(!empty($password) && ($password == $c_password)){
                if(strlen($password) <= '4' ){
                    $passErr = "Your password must contain at least 4 characters!";
                } else if(strlen($password) <= '8') {
                    $passErr = "Your password must contain at least 8 characters!";
                } else if(strlen($password) <= '16'){
                    $passErr = "Your password must contain at least 16 characters!";
                } else if (!preg_match("#[0-9]+#", $password)){
                    $passErr = "Your password must contain at least 1 number!";
                } else if (!preg_match("#[A-Z]+#", $password)){
                    $passErr = "Your password must contain at least 1 upper case letter!";
                } else if (!preg_match("#[a-z]+#", $password)){
                    $passErr = "Your password must contain at least 1 lower case letter!";
                }

                $pass = $password;
                $passHash = password_hash($pass, PASSWORD_DEFAULT); // this line of code is encrypting your password

                // verifying your input if your input is correct
                if(password_verify($pass, $passHash)){
                    $check_password = mysqli_query($conn, "SELECT * FROM login_user WHERE username = '$email' AND password = '$pass' ");
                    $val_password = mysqli_num_rows($check_password);

                    if($val_password >= 1){
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $pass;

                        header("Location: index.php");
                    }
                } else { 
                    $passErr = "Incorrect password!";
                }

            } else {
                $passErr = "Password required!";
            }
        } else {
            echo "Error! In Logging in!";
        }

    } else {
        echo "Error in requesting post method!";
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
    <?php
        ?>  
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/style.css">
        <?php
    ?>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="login-h1">
                <h1>Login</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" id="loginForm">
                <div class="email-input">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email"> <span class="error">* <?php echo $emailErr; ?></span><br>
                </div>
                <div class="password-input">
                    <label for="pass">Password</label><br>
                    <input type="password" name="pass" id="pass"> <span class="error">*  <?php echo $passErr ?></span><br>
                </div>
                <div class="forgot-box">
                    <span><a href="">Forgot your password?</a></span>
                </div>
                <div class="ex-links">
                    <a href="register.php">Register</a>
                </div>
                <div class="submit-box">
                    <input class="login-button" type="submit" name="loginAccount" onsubmit="subForm()" value="Login">
                </div>
            </form>
        </div>
    </div>

    <?php 
        ?>
            <script src="assets/js/script.js"></script>
        <?php
    ?>
</body>
</html>