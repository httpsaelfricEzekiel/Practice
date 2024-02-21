<?php
    include "conn.php";

    if(isset($_POST['user_login'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        
        $validate = mysqli_query($conn, "SELECT * FROM users_profile WHERE firstName = '$firstName' AND lastName = '$lastName'");
        $number = mysqli_num_rows($validate);

        if($number <= 0){
            $insert = mysqli_query($conn, "INSERT INTO users_profile VALUES('0', '$firstName', '$lastName', '$age')");

            if($insert == true){
                ?>
                    <script>
                        alert("Data inserted");
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("No data inserted");
                    </script>
                <?php
            }
        } else {
            ?>
                <script>
                    alert("First Name is already existed");
                </script>
            <?php 
        }

        if($number <= 0){
            $insert = mysqli_query($conn, "INSERT INTO users_profile VALUES('0', '$firstName', '$lastName', '$age')");
            if($insert == true){
                ?>
                    <script>
                        alert("Data inserted");
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("No data inserted");
                    </script>
                <?php
            }

        } else {
            ?>
                <script>
                    alert("Last Name is already existed");
                </script>
            <?php 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="firsName">First Name</label><br>
        <input type="text" name="firstName" id="firstName" placeholder="Enter first name" required><br>
        <label for="lastName">Last Name</label><br>
        <input type="text" name="lastName" id="lastName" placeholder="Enter last nane" required><br>
        <label for="age">Age</label><br>
        <input type="number" name="age" id="age" placeholder="Enter age" required><br>
        <input type="reset" value="clear">
        <input type="submit" value="Login" name="user_login">
    </form>
</body>
</html>