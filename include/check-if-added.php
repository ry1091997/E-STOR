<?php

function check_if_added_to_cart($items_id){
    require 'include/common1.php';
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM users_item WHERE users_id='$user_id' and items_id='$items_id' and status = 'Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    if(mysqli_num_rows($result)>0){
        return 1;
    } else {
        return 0;
    }
}

