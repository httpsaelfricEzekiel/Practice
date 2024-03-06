<?php
    include "conn.php";

    if(isset($_POST['create_account'])){
        $profile_pic = $_POST['pic'];
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $validate = mysqli_query($conn, "SELECT * FROM students WHERE email = '$email'");
        $number = mysqli_num_rows($validate);

        if($number <= 0){
            $insert = mysqli_query($conn, "INSERT INTO students VALUES ('0', '$profile_pic', '$lastName', '$firstName', '$email', '$password')");

            if($insert == true){
                ?>
                    <script>
                        alert("data inserted");
                        window.location.href="index.php";
                    </script>
                <?php
            }
        } else {
            ?>
                <script>
                    alert("Email already Exists");
                    window.location.href="index.php";
                </script>
            <?php
        }
    }
?> 