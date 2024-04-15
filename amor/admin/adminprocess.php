<?php 
    include "../conn.php";

    if(isset($_POST['admin_login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
        $check_admin = mysqli_query($conn, $query);
        $num = mysqli_num_rows($check_admin);

        if($num >= 1){
            $_SESSION['email'] = $email;
            
            ?>
                <script>
                    alert("Welcome Admin!");
                    window.location.href="adminhome.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Wrong Email and Password");
                    window.location.href="index.php";
                </script>
            <?php
        }
    } 
?>