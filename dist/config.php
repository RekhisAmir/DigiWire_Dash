<?php
$con = mysqli_connect("localhost", "root", "", "db_ttei");
// $con = mysqli_connect("127.0.0.1", "root", "dNz!nb^JGY88w+PX", "ttei_db");
if ($con) {
     //echo "DB connected";
} else {
    echo "DB connection is failed";
    exit();
}
