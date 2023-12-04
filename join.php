<?php
  include "include/config.php";

//   Inner JOin

// $sql = "select *, u.name,u.email from user_details as ud  inner join user as u on ud.user_id = u.id";
// $execute = mysqli_query($conn,$sql);
// $i = 1;
// while($row = mysqli_fetch_assoc($execute)){
//     echo $row['name']."<br>";
//     echo $row['email']."<br>";
//     $i++;
// }

//Left Join

// $sql = "select *,ud.user_id from user as u left join user_details as ud on u.id = ud.user_id";
// $execute = mysqli_query($conn,$sql);
// $i = 1;
// while($row = mysqli_fetch_assoc($execute)){
//     echo $row['name']."<br>";
//     echo $row['email']."<br>";
//     $i++;
// }

//Right Join
// $sql = "select *,ud.user_id from user as u right join user_details as ud on u.id = ud.user_id";
// $execute = mysqli_query($conn,$sql);
// $i = 1;
// while($row = mysqli_fetch_assoc($execute)){
//     echo $row['name']."<br>";
//     echo $row['email']."<br>";
//     $i++;
// }

//Cross Join
$sql = "SELECT u.id, u.name, u.email
FROM user AS u
CROSS JOIN user_details AS ud
WHERE ud.user_id = u.id;
";
$execute = mysqli_query($conn,$sql);
$i = 1;
while($row = mysqli_fetch_assoc($execute)){
    echo $row['name']."<br>";
    echo $row['email']."<br>";
    $i++;
}

?>