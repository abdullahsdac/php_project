<?php 

include "connection.php";


$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$uname = $_POST["uname"];
$pass = $_POST["pass"];


$sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `username` = '$uname', `password` = '$pass' WHERE `users`.`id` = $id;";
$result = mysqli_query($conn,$sql);

if ($result) {
    echo "Record Updated Succesfully";
   header("location:usermanage.php");


} else {
    echo "failed". mysqli_error($conn);
}


mysqli_close($conn);
?>




