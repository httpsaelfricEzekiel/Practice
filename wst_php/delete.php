<?php 
    include "conn.php";

    $delete_id = $_GET['delete_id'];

    $delete_data = mysqli_query($conn, "DELETE FROM user_profile WHERE id = '$delete_id'");

    if($delete_data == true){
        ?>  
            <script>
                alert("Data is deleted");
                window.location.href="records.php";
            </script>
        <?php
    } else {
        ?>
            <script>
                alert("No data deleted");
                window.location.href="records.php";
            </script>
        <?php
    }
?>