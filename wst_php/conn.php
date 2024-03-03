<?php 
    $url = "localhost";
    $username = "root";
    $pass = "";

    $conn = mysqli_connect($url, $username, $pass);
    $db = mysqli_select_db($conn, "amor");
?>
