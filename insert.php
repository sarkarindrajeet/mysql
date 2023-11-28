<?php
//single insert query
include "include/config.php";
$userName = 'Jeet';
$email    = 'jeet@gmail.com';
$password = 'jeet';
$sql = "insert into user(name,email,password)values('$userName','$email','$password')";
$execute = mysqli_query($conn, $sql);
//get last id
$sql1 = "insert into user(name,email,password)values('Raj','raj@gmail.com','raj')";
if (mysqli_query($conn, $sql1)) {
    $last_id = mysqli_insert_id($conn);
    echo "insert success id :" . $last_id;  
}
//
