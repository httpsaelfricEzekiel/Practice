<?php 
    include "conn.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $first_name = test_input($_POST['firstName']);
        $last_name = test_input($_POST['lastName']);
        $email = test_input($_POST['email']);
        $pass = test_input($_POST['pass']);
        $c_password = test_input($_POST['pass']);

        $firstNameErr = $lastNameErr = $emailErr = $passwordErr = $c_passwordErr = "";

        if(isset($_POST['registerAccount'])){
            $insertQuery = "INSERT INTO login_user VALUES('0', '$first_name', '$last_name', '$email', '$pass')";

            if(empty($first_name)){
                $firstNameErr = "First name is required!";
            } else {
                $firstName = $first_name;

                if(!preg_match("/^[a-zA-Z-' ]*$/", $firstName)){
                    $firstNameErr = "Only letters and white spaces required!";
                } else {
                    if($firstName == true){
                        $check_firstName = mysqli_query($conn, "SELECT * FROM login_user WHERE firstName = '$first_name'");
                        $val_fname = mysqli_num_rows($check_firstName);

                        if($val_fname <= 0){
                            $insert_fname = mysqli_query($conn, $insertQuery);

                            if($insert_fname == true){
                                header("Location: register.php");
                            } else {
                                ?>
                                    <script>
                                        alert("No first name inserted!");
                                        window.location.href="register.php";
                                    </script>
                                <?php
                            }
                        } else {
                            $firstNameErr = "First name already exists!";
                        }
                    }
                }
            }

            if(empty($last_name)){
                $lastNameErr = "Last name is required!";
            } else {
                $lastName = $last_name;

                if(!preg_match("/^[a-zA-Z-' ]*$/", $lastName)){
                    $lastNameErr = "Only letters and white spaces required!";
                } else {
                    if($lastName == true){
                        $check_lastName = mysqli_query($conn, "SELECT * FROM login_user WHERE lastName = '$last_name'");
                        $val_lastName = mysqli_num_rows($check_lastName);

                        if($val_lastName <= 0){
                            $insert_lastName = mysqli_query($conn, $insertQuery);

                            if($insert_lastName == true){
                                header("Location: register.php");
                            } else {
                                ?>
                                    <script>
                                        alert("No last name inserted!");
                                        window.location.href="register.php";
                                    </script>
                                <?php
                            }
                        } else {
                            $lastNameErr = "Last name already taken!";
                        }
                    } 
                }
            }

            if(empty($email)){
                $emailErr = "Email is required!";
            } else {
                $email_name = $email;

                if(!filter_var($email_name, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format!";
                } else {
                    if($email_name == true){
                        $check_email = mysqli_query($conn, "SELECT * FROM login_user WHERE username = '$email'");
                        $val_email = mysqli_num_rows($check_email);

                        if($val_email <= 0){
                            $insert_email = mysqli_query($conn, $insertQuery);

                            if($insert_email == true){
                                header("Location: register.php");
                            } else {
                                ?>
                                    <script>
                                        alert("No email inserted!");
                                        window.location.href="register.php";
                                    </script>
                                <?php
                            }
                        } else {
                            $emailErr = "Email already exists!";
                        }
                    } 
                }
            }

            if(empty($pass) && ($pass == $c_password)){
                $passwordErr = "Password is required!";
            } else if (strlen($pass) <= '4'){
                $passwordErr = "Your password is weak!";
            } else if(strlen($pass) <= '8'){
                $passwordErr = "Your password is moderately strong!";
            } else if (strlen($pass) <= '16'){
                $passwordErr = "Your password is strong!";
            } else if(!preg_match("#[0-9]+#", $pass)){
                $passwordErr = "Your password must contain at least 1 number!";
            } else if (!preg_match("#[A-Z]+#", $pass)){
                $passwordErr = "Your password must contain at least 1 upper case letter!";
            } else if (!preg_match("#[a-z]+#", $pass)){
                $passwordErr = "Your password must contain at least 1 lower case letter!";
            } else {
                $psw = $pass;

                if($psw == true){

                    $check_pass = mysqli_query($conn, "SELECT * FROM login_user WHERE password = '$pass'");
                    $val_pass = mysqli_num_rows($check_pass);

                    if($val_pass <= 0){
                        $insert_pass = mysqli_query($conn, $insertQuery);

                        if($insert_pass == true){
                            header("Location: register.php");
                        } else {
                            ?>
                                <script>
                                    alert("No password inserted!");
                                    window.location.href="register.php";
                                </script>
                            <?php
                        }
                    } else {
                        $passwordErr = "Password already exists!";
                    }
                } else {
                    $passwordErr = "Password is not set!";
                }
            } 
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
        <?php
        ?>
            <link rel="stylesheet" href="assets/css/style.css">
        <?php
    ?>
    <title>Register</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="firstName" id="firstName" placeholder="Enter first name"> <span> * <?php echo $firstNameErr; ?></span> <br>
        <input type="text" name="lastName" id="lastName" placeholder="Enter last name"> <span> * <?php echo $lastNameErr; ?></span><br>
        <input type="email" name="email" id="email_1" placeholder="Enter email"> <span> * <?php echo $emailErr; ?></span><br>
        <input type="password" name="pass" id="pass_1" placeholder="Enter password"> <span>* <?php echo $passwordErr; ?></span><br>
        <a href="login.php">Login</a>
        <button type="submit" name="registerAccount">Register</button>
    </form>
</body>
</html>