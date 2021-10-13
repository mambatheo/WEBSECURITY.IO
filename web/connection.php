<?php
    $servername = "localhost";
    $username="root";
    $password="2016";
    $db="web security";
    $conn=mysqli_connect($servername,$username,$password,$db);
    if(!$conn){
        die("Connection error:" .mysql_error());
    }
?>