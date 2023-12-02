<?php
    include "include/config.php";
    // $query = "select count(name) as ncount from user";
    // $execute = mysqli_query($conn, $query);
    // $i = 1;
    // while($data = mysqli_fetch_assoc($execute)){
    //     echo $data['ncount'];
    //     $i++;
    // }

    // $query = "select avg(id) as navg from user";
    // $execute = mysqli_query($conn, $query);
    // $i = 1;
    // while($data = mysqli_fetch_assoc($execute)){
    //     echo $data['navg'];
    //     $i++;
    // }
    $query = "select sum(id) as nsum from user";
    $execute = mysqli_query($conn, $query);
    $i = 1;
    while($data = mysqli_fetch_assoc($execute)){
        echo $data['nsum'];
        $i++;
    }

?>