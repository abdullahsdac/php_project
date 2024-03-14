<?php 

$host = "localhost";
$username = "root";
$password = "sBL6u1@.6ZNc";
$db = "sdac1";

$conn = mysqli_connect($host,$username,$password,$db);

if (!$conn) {
    echo mysqli_connect_error();
}

?>