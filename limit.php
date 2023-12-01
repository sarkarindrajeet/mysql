<?php
    include "include/config.php";

    $query = "select * from user limit 3";
    $execute = mysqli_query($conn, $query);

    $i = 1;
    while($data= mysqli_fetch_array($execute)){
        echo $data['name']."<br>";
        echo $data['email']."<br>";
        echo $data['password']."<br>";
        $i++;
    }
   echo "offset <br>";
    $query = "select * from user limit 2 offset 3";
    $execute = mysqli_query($conn, $query);

    $i = 1;
    while($data= mysqli_fetch_array($execute)){
        echo $data['name']."<br>";
        echo $data['email']."<br>";
        echo $data['password']."<br>";
        $i++;
    }

?>