<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'unisystem');
 

    if(mysqli_connect_errno()){
        die('Database connection faild ' . mysqli_connect_errno());
    } else {
        //echo "Connection successful.";
    }
?>