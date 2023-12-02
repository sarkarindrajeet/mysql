<?php 

 include "include/config.php";
//like

//  $sql = "select * from user where name like '%t'";
//  $ex = mysqli_query($conn, $sql);
// $i = 1;
// while($data = mysqli_fetch_array($ex)){
//     echo $data['name'] ."<br>";
//     $i++;
// }

//in
// $sql = "select * from user where name not in('jeet','Jeet')";
// $ex = mysqli_query($conn, $sql);
// $i = 1;
// while($data = mysqli_fetch_array($ex)){
  
//    echo $data['email'] ."<br>";
//    echo $data['password'] ."<br>";
//    $i++;
// }

//Between

$sql = "select * from user where id between 2 and 4";
$ex = mysqli_query($conn, $sql);
$i = 1;
while($data = mysqli_fetch_array($ex)){
  
   echo $data['email'] ."<br>";
   echo $data['password'] ."<br>";
   $i++;
}
?>