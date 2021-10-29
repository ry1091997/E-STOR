<?php
require 'include/common1.php';
$item_id=$_GET['pid'];
echo $item_id;
$user_id=$_SESSION['user_id'];
$query = "DELETE u FROM users_item AS u INNER JOIN items AS i ON u.items_id = '$item_id' WHERE users_id='$user_id'";
//die($query);
$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
//echo "Product Successfully remove From the cart";
header('location:cart.php');
?>

