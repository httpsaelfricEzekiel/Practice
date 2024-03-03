<?php
    include "conn.php";

    if(isset($_POST['verification_profile'])){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $fbLink = $_POST['fb_link'];
        $age = $_POST['age'];
        $instaLink = $_POST['insta_link'];
        $password = $_POST['pass'];
        $gender = $_POST['gender'];
        $school = $_POST['school'];
        
        $validate = mysqli_query($conn, "SELECT * FROM user_profile WHERE firstName = '$firstName' AND lastName = '$lastName'");
        $number = mysqli_num_rows($validate);

        if($number <= 0){
            $insert = mysqli_query($conn, "INSERT INTO user_profile VALUES('0', '$firstName', '$lastName', '$email', '$address', '$fbLink', '$age', '$instaLink', '$password', '$gender', '$school')");

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
                    alert("First Name is already existed");
                    window.location.href="index.php";
                </script>
            <?php 

        }
    }

    if(isset($_POST['update_data'])){
        $updateID= $_GET['update_id'];
        
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $fbLink = $_POST['fb_link'];
        $age = $_POST['age'];
        $instaLink = $_POST['insta_link'];
        $password = $_POST['pass'];
        $gender = $_POST['gender'];
        $school = $_POST['school'];

        $update_data = mysqli_query($conn, "UPDATE FROM user_profile SET firstName = '$firstName', lastName = '$lastName', email='$email', address = '$address', fbLink = '$fbLink' age = '$age', instaLink = '$instaLink', password= '$password', gender = '$gender', school = '$school' WHERE id = '$updateID'");

        if($update_data == true){
            ?>
                <script>
                    alert("Data updated");
                    window.location.href="records.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("No data updated");
                    window.location.href="records.php";
                </script>
            <?php
        }
    }
?>  