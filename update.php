<?php
    $id = $_GET['id'];
    if(isset($_POST['update'])){
        $name = $_POST["name"];
        $roll = $_POST["roll"];
        $section = $_POST["sec"];
        $gender = $_POST["gender"];
        $result = $_POST["result"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $phn = $_POST["phn"];

        $error = array();

        if ($name == null) {
            $error['name'] = "Name can't be empty";
            
        }
        if ($roll == null) {
            $error['roll'] = "Roll number can't be empty";
        }
        if ($section == null) {
            $error['section'] = "Section can't be empty";
        }
        if ($gender == null) {
            $error['gender'] = "Gender can't be empty";
        }
        if ($result == null) {
            $error['result'] = "Result can't be empty";
        }
        if ($email == null) {
            $error['email'] = "Email can't be empty";
        }
        if ($address == null) {
            $error['address'] = "Address can't be empty";
        }
        if ($phn == null) {
            $error['Phn'] = "Phone number can't be empty";
        }
        
        if(count($error)==0 ){
            $con = mysqli_connect("localhost","root","","school");
        
            $result =mysqli_query($con, "update class set name = '$name', roll = '$roll',section = '$section',gender = '$gender', result = '$result',email = '$email', address = '$address',phn = '$phn' where id = '$id'");
            
            // (name,roll,section,gender,result,email,address,phn) values('$name','$roll','$section','$gender','$result','$email','$address','$phn')
        
                if($result){
                    header("location:view.php");
                }
                else{
                    echo"failed";
                }
            }
        

        
    }
?>

<html>
    <head>
        <title>
            Student Management System 
        </title>
    </head>
    <body>
        
        <a href="view.php">Dash Board</a>
        <h2>Student Management System Register Form</h2>
        <form action="" method="POST">

            <input type="text" name="name"  placeholder="Enter students Name"><br>
            <?php
                if(isset($error['name'])){
                echo $error['name'];
                }
            ?><br>
            <input type="text" name="roll" placeholder="Enter Student Roll Number"><br>
            <?php
                if(isset($error['roll'])){
                echo $error['roll'];
                }
            ?><br>
            <input type="text" name="sec" placeholder="Enter Section"><br>
            <?php
                if(isset($error['section'])){
                echo $error['section'];
                }
            ?><br>
            <input type="text" name="gender" placeholder="Enter Students Gender"><br>
            <?php
                if(isset($error['gender'])){
                echo $error['gender'];
                }
            ?><br>
            <input type="text" name="result" placeholder="Enter Students Result"><br>
            <?php
                if(isset($error['result'])){
                echo $error['result'];
                }
            ?><br>
            <input type="text" name="email" placeholder="Enter sudents email id"><br>
            <?php
                if(isset($error['email'])){
                echo $error['email'];
                }
            ?><br>
            <input type="text" name="address" placeholder="Enter Students Address"><br>
            <?php
                if(isset($error['address'])){
                echo $error['address'];
                }
            ?><br>
            <input type="text" name="phn" placeholder="Parents Phone Number"><br>
            <?php
                if(isset($error['phn'])){
                echo $error['phn'];
                }
            ?><br>
            <input type="submit" name="update" value="update">
        </form>
    </body>
</html>