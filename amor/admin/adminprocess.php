<?php 
    include "../conn.php";

    if(isset($_POST['admin_login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        echo $email . " " . $pass;
    }
?>