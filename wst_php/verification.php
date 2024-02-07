<?php 
    include "conn.php";

    if(isset($_POST['verification_profile'])){
        $fname = $_POST(['fname']);
        $lname = $_POST(['lname']);
        $email = $_POST(['email']);
        $address = $_POST(['address']);
        $fbLink = $_POST(['fb_link']);
        $age = $_POST(['age']);
        $instaLink = $_POST(['insta_link']);
        $password = $_POST(['pass']);
        $gender = $_POST(['gender']);
        $school = $_POST(['school']);

        $insert = mysqli_query($conn, "INSERT INTO user_profile VALUES ('0', '$fname', '$lname', '$email', '$address', '$fbLink', '$age', '$instaLink', '$password', '$gender', '$school')");

        if($insert == true){
            echo "data is inserted";
        } else {    
            echo "data is not inserted";
        }
    }   
?>