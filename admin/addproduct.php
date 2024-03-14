<?php 

include "connection.php";


$name = $_POST["name"];
$description = $_POST["description"];
$image = $_FILES['image']['name'];

$target_dir = "products/";
$target_destination = $target_dir.basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target_destination);
$sql = "INSERT INTO `products` (`id`, `name`, `description`, `image`) VALUES (NULL, '$name', '$description', '$image');";

if (mysqli_query($conn,$sql)) {
    header("location:productmanage.php");
} else {
    echo "Product Not Added";
}

mysqli_close($conn);

?>