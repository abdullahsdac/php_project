<?php 

$id = $_GET["id"];

include "connection.php";


$sql = "DELETE FROM `products` WHERE `products`.`id` = $id";
$result = mysqli_query($conn,$sql);

if ($result) {
    header("location:productmanage.php");
} else {
    echo "Something Went Wrong Or Error 404 Page";
}



mysqli_close($conn);
?>