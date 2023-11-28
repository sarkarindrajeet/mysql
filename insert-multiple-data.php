<?php
include "include/config.php";

$data = "insert into user (name,email,password)values('test','test@gmail.com','1234');";
$data .= "insert into user (name,email,password)values('preetu','preetu@gmail.com','preetu');";
$data .= "insert into user (name,email,password)values('jeet','jeet@gmail.com','jeet')";

if (mysqli_multi_query($conn, $data)) {
    echo "data successfully insert";
} else {
    echo "error";
}
