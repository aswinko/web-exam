<?php
    include("./conn.php");


    //Insert code

    if(isset($_POST['insert'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $std = $_POST['std'];
        $email = $_POST['email'];
    
    
        $sql = "INSERT INTO `student`(name, address, std, email) VALUES ('$name', '$address', '$std', '$email')";
    
        $res = mysqli_query($conn, $sql);
    
        if($res) {
            echo "Record inserted succcessfully!";
        }else {
            echo "Error - " . mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        Name
        <input type="text" name="name" id="name"/>
        Address
        <input type="text" name="address" id="address" />
        Std
        <input type="text" name="std" id="std"/>
        Email
        <input type="email" name="email" id="email" />

        <button type="submit" name="insert" onclick="return validate()">Insert</button>

    </form>

    <script src="./script.js"></script>
</body>
</html>