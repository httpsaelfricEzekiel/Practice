<?php
    include "conn.php";

    if(isset($_POST['user_login'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];


        $validate = mysqli_query($conn, "SELECT * FROM users_f1 WHERE username = '$username'");
        $number_username = mysqli_num_rows($validate);

        if($number_username <= 0 ){
            $insert = mysqli_query($conn, "INSERT INTO users_f1 VALUES('0', '$username', '$pass')");

            if($insert == true){
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
                    alert("Usernane already exists");
                    window.location.href="index.php";
                </script>
            <?php
        }
        
    }

    $validate_pass = mysqli_query($conn, "SELECT * FROM users_f1 WHERE password = '$pass'");
    $number_pass = mysqli_num_rows($validate_pass);

    if($number_pass <= 0){
        $insert = mysqli_query($conn, "INSERT INTO users_F1 VALUES ('0', '$username', '$pass')");
    } else {
        ?>
            <script>
                alert("Password already exists!");
                window.location.href="index.php";
            </script>
        <?php
    }
?>