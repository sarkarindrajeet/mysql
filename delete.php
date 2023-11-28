<?php
include "include/config.php";
$delete = "delete from user where id=3";

if (mysqli_query($conn, $delete)) {
    echo "recored successfully delete";
} else {
    echo "something wrong!";
}
