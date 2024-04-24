<?php 
    include "conn.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $first_name = test_input($_POST['firstName']);
        $last_name = test_input($_POST['lastName']);
        $email = test_input($_POST['email']);
        $password = test_input($_POST['pass']);

        $firstNameErr = $lastNameErr = $emailErr = $passwordErr = " ";

        if(isset($_POST['registerAccount'])){
            
            if(empty($first_name)){
                $firstNameErr = "First name is required!";
            } else {
                $firstName = $first_name;

                if(!preg_match("/^[a-zA-Z-' ]*$/", $firstName)){
                    $firstNameErr = "Only letters and white spaces required!";
                } 
            }

            if(empty($last_name)){
                $lastNameErr = "Last name is required!";
            } else {
                $lastName = $last_name;

                if(!preg_match("/^[a-zA-Z-' ]*$/", $lastName)){
                    $lastNameErr = "Only letters and white spaces required!";
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
    <title>Register</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="firstName" id="firstName" placeholder="Enter first name"> <span><?php echo $firstNameErr; ?></span> <br>
        <input type="text" name="lastName" id="lastName" placeholder="Enter last name"> <span><?php echo $lastNameErr; ?></span><br>
        <input type="email" name="email" id="email" placeholder="Enter email"><br>
        <input type="password" name="pass" id="pass" placeholder="Enter password"><br>
        <a href="login.php">Login</a>
        <button type="submit" name="registerAccount">Register</button>
    </form>
</body>
</html>