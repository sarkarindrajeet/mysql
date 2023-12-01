<?php
include "include/config.php";
$sql = "Select * from user where id order by id desc";
$excute = mysqli_query($conn, $sql);
$i = 1;
while ($data = mysqli_fetch_assoc($excute)) {
    echo $data['name'] . "<br>";
    echo $data['email'] . "<br>";
    echo $data['password'] . "<br>";
    $i++;
}   




