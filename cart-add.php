<?php
require 'include/common1.php';
$item_id = $_GET['id'];
$users_id = $_SESSION['user_id'];
$query = "INSERT INTO users_item(users_id, items_id, status) VALUES('$users_id', '$item_id', 'Added to cart')";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
header('location:home.php');
?>

