<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "collage";

    $conn = mysqli_connect($host, $user, $pass, $dbName);

    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }else{
        echo "<script>console.log('Connected Successfully')</script>";
    }

?>