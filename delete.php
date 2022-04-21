<?php
    //including the database connection file
    $connection = mysqli_connect("localhost", "root", "", "school");

    //getting id of the data from url
    $id = $_GET['id'];

    //deleting the row from table
    $result = mysqli_query($connection, "DELETE FROM class WHERE id=$id");

    //redirecting to the display page
    header("location:view.php");

?>