<?php 

include "connection.php";


$uname = $_POST["uname"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM `users` WHERE `username` = '$uname' AND `password` = '$pass'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    header("location:home.php");
} else {
    echo "Invalid credentials <a href='login.html'>Try Again</a>";
    header("location:invalid_user.html");
}



mysqli_close($conn);
?>