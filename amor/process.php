<?php 
    include "conn.php";
    session_start();

    // this line of code is for register account
    if(isset($_POST['reg_button'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $pn = $_POST['ph_num'];

        $insert = mysqli_query($conn, "INSERT INTO users VALUES('0', '$name', '$email', '$password', '$pn')");

        if($insert == true){
            ?>
                <script>
                    alert("Registered Account Successful");
                    window.location.href="login.php"
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Error in Registration!\nTry Again!");
                    window.location.href="register.php";
                </script>
            <?php
        }

    }

    // this line of code is for login
    if(isset($_POST['login'])){
        $email = $_POST['login_email'];
        $pass = $_POST['login_pass'];

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
        $check = mysqli_query($conn, $query);

        $num = mysqli_num_rows($check);

        if($num >= 1 ){
            $_SESSION['email'] = $email;
            ?>
                <script>
                    alert("Account Accepted Welcome Users!");
                    window.location.href="index.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Email and password not exists!");
                    window.location.href="login.php";
                </script>
            <?php
        }
    }

    // this line of code for updating account
    if(isset($_POST['update_account'])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $pn = $_POST['ph_num'];

        $update_account = mysqli_query($conn, "UPDATE users SET name = '$name', email = '$email', password = '$password', phoneNumber = '$pn' WHERE id = '$id'");

        if($update_account == true){
            ?>
                <script>
                    alert("Data updated");
                    window.location.href="update_profile.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("No data updated");
                    window.location.href="update_profile.php";
                </script>
            <?php
        }
    }

    // this line of code is for create post

    if(isset($_POST['createPost'])){
        $title = $_POST['title'];
        $date = $_POST['date'];
        $desc = $_POST['desc'];
        $posted_by = $_POST['posted_by'];

        $query = "INSERT INTO post VALUES('0', '$title', '$date', '$desc', '$posted_by')";
        $insert = mysqli_query($conn, $query);
        

        if($insert == true){
            ?>
                <script>
                    alert("Post uploaded");
                    window.location.href="createPost.php";
                </script>
            <?php 
        } else {
            ?>
                <script>
                    alert("Post error");
                    window.location.href="createPost.php";
                </script>
            <?php 
        }
    }
?>