<?php 
    include "conn.php";

    if(isset($_POST['verification_profile'])){
        $fname = $_POST(['fname']);
        $lname = $_POST(['lname']);
        $email = $_POST(['email']);
        $address = $_POST(['address']);
        $fb_link = $_POST(['fbLink']);
        $age = $_POST(['age']);
        $instaLink = $_POST(['instaLink']);
        $pass = $_POST(['password']);
        $gender = $_POST(['gender']);
        $school = $_POST(['school']);

        $insert = mysqli_query($conn, "INSERT INTO user_profile VALUES ('$fname', '$lname', '$email', '$address', '$fb_link', '$age', '$instaLink', '$pass', '$gender', '$school')");

        if($insert == true){
            echo "Data is inserted";
        } else {
            echo "data is not inserted";
        }
    }   
?>