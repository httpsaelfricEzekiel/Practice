<?php
    include "conn.php";
    session_start();

    if(isset($_POST['create_account'])){
        // input for uploading a photos
        $profile_pic = $_FILES['pic']['name'];
        $fileTmpName = $_FILES['pic']['tmp_name'];
        
        // inputs for fields/text box
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $validate = mysqli_query($conn, "SELECT * FROM students WHERE email = '$email'");
        $number_email = mysqli_num_rows($validate);

        if($number_email <= 0){
            $insert = mysqli_query($conn, "INSERT INTO students VALUES ('0', '$profile_pic', '$lastName', '$firstName', '$email', '$password')");

            if($insert == true){
                $fileDestination = 'upload/'.$profile_pic;
                move_uploaded_file($fileTmpName, $fileDestination);
                ?>
                    <script>
                        alert("Data inserted");
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

        $check = mysqli_query($conn, "SELECT * FROM students WHERE email = '$email' AND password = '$pass'");
        $validate = mysqli_num_rows($check);
        if($validate >= 1){
            $_SESSION['email'] = $email;
            ?>
                <script>
                    alert("Login Successfully");
                    window.location.href="students/index.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Wrong email and password");
                    window.location.href="index.php";
                </script>
            <?php
        }
    }

    // This code is for admin login
    if(isset($_POST['admin_login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
        $check_num = mysqli_num_rows($check);

        if($check_num >= 1){
            $_SESSION['email'] = $email;

            ?>
                <script>
                    alert("Login Successful!");
                    window.location.href="admin/index.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Wrong email and password");
                    window.location.href="index.php";
                </script>
            <?php
        }
    }
?> 