<?php

    $con = mysqli_connect("localhost", "root", "", "school");

    $result =mysqli_query($con,"select * from class");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>This is view file</title>
</head>
<body>
<button><a href="index.php">Add New Student</a></button>

    <h2>Registers Student Information</h2>
    <table width='90%' border="0">
        <tr bgcolor='#CCCCCC'>
            <th>SL</th>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Section</th>
            <th>Gender</th>
            <th>Semester Result</th>
            <th>Email</th>
            <th>Home Town</th>
            <th>Phone Number</th>
        </tr>

        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['roll']."</td>";
            echo "<td>".$res['section']."</td>";
            echo "<td>".$res['gender']."</td>";
            echo "<td>".$res['result']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['address']."</td>";
            echo "<td>".$res['phn']."</td>";
            echo "<td><a href=\"update.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\">Delete</a></td>
            ";       
        }
        ?>

        </table>

</body>
</html>