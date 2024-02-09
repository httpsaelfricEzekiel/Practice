<?php 
    include "conn.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $insert = mysqli_query($conn, "INSERT INTO users VALUES('0', $username, $password)");

        $nameErr = $username = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST['name'])){
                $alert = "Name in characters";
            } else {
                $name = test_input($_POST['name']);
                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                    $alert = "Name must be characters";
                }
            }
        }
    }


?>