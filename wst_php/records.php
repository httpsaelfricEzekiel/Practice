<?php 
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
</head>
<body>
    <div class="table-box">
        <center>
            <a href="index.php">Add Profile</a>
            <a href="records.php">View Records</a>
            <h1>List of Data</h1>
            <table border="2px solid">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>FB Link</th>
                    <th>Age</th>
                    <th>Instagram Link</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>College/Universities</th>
                    <th>ACTION 1</th>
                    <th>ACTION 2</th>
                </tr>

                <?php
                    $records = mysqli_query($conn, "SELECT * FROM user_profile");
                    while($get_records = mysqli_fetch_array($records)){
                        ?>  
                            <tr>
                                <td><?php echo $get_records['id']?></td>
                                <td><?php echo $get_records['firstName']?></td>
                                <td><?php echo $get_records['lastName']?></td>
                                <td><?php echo $get_records['email']?></td>
                                <td><?php echo $get_records['address']?></td>
                                <td><?php echo $get_records['fbLink']?></td>
                                <td><?php echo $get_records['age']?></td>
                                <td><?php echo $get_records['instaLink']?></td>
                                <td><?php echo $get_records['password']?></td>
                                <td><?php echo $get_records['gender']?></td>
                                <td><?php echo $get_records['school']?></td>
                                <td><a href="update.php?update_id=<?php echo $get_records['id'];?>">UPDATE</a></td>
                                <td><a href="delete.php?delete_id=<?php echo $get_records['id'];?>">DELETE</a></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        </center>
    </div>
</body>
</html>
