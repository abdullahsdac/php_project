<?php 

$id = $_GET["id"];

include "connection.php";


$sql = "DELETE FROM `users` WHERE `users`.`id` = $id";
$result = mysqli_query($conn,$sql);

if ($result) {
    header("location:usermanage.php");
} else {
    echo "Something Went Wrong Or Error 404 Page";
}



mysqli_close($conn);
?>