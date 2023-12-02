<?php
    include "include/config.php";
    // $query = "SELECT MAX(id) As newid FROM user";
    // $excute = mysqli_query($conn, $query);
    // $i = 1;
    // while($row = mysqli_fetch_assoc($excute)){
    //     echo $row['newid'];
    //     $i++;
    // }

    $query = "select min(id) as newid from user";
    $excute = mysqli_query($conn , $query);
    $i =1;
    while($row = mysqli_fetch_assoc($excute)){
        echo $row['newid'];
        $i++;
    }


?>