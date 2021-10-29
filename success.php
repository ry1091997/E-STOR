<?php
require 'include/common1.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        require 'include/common.php';
        ?>
    </head>
    <body>
        <?php
//        require 'include/header.php';
        $id = $_GET['itemsid'];
        $users_id = $_SESSION['user_id'];      
        $query = "UPDATE users_item SET status='Confirmed' WHERE users_id=" . $users_id . " AND items_id IN (" . $id . ") and status='Added to cart'";
//        die($query);
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        ?> 
        <div class="container cont-item">
            <div class="jumbotron text-center">
                <p> Thnak you for ordering from E-Store. The order shall be delivered to you shortly</p></br>
                <p>Order some more electronics items click <a href="home.php">here</a></p>
            </div>
        </div>
    </body>
</html>
