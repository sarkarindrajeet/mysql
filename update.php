<?php
include "include/config.php";

$update = "update user set name = 'indrajeet' where id=1";

if (mysqli_query($conn, $update)) {
    echo "recored update successfuly";
} else {
    echo "error";
}
