<?php 

session_start();


include "connection.php";


$uname = $_POST["uname"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM `admin` WHERE `username` = '$uname' AND `password` = '$pass'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
    $_SESSION["uname"] = $uname;
    header("location:dashboard.php");
} else {
    echo "Invalid credentials <a href='index.html'>Try Again</a>";
    header("location:invalid_admin.html");
}



mysqli_close($conn);
?>