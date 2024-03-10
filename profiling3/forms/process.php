<?php
    include "conn.php";

    if(isset($_POST['create_account'])){
        $profile_pic = $_FILES['pic']['name'];
        $fileTmpName = $_FILES['pic']['tmpName'];
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $validate = mysqli_query($conn, "SELECT * FROM students WHERE email = '$email'");
        $number = mysqli_num_rows($validate);

        if($number <= 0){
            $insert = mysqli_query($conn, "INSERT INTO students VALUES ('0', '$profile_pic', '$lastName', '$firstName', '$email', '$password')");

            if($insert == true){

                $fileDestination = "upload/".$profile_pic;
                move_uploaded_file($fileTmpName, $fileDestination);
                ?>
                    <script>
                        alert("data inserted");
                        window.location.href="index.php";
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("No data inserted");
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

    // This code is for Login students

    if(isset($_POST['student_login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $check = mysqli_query($conn, )
    }
?> 