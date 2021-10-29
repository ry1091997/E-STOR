<?php
require 'include/common1.php';

if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
        require 'include/common.php';
        ?>
    </head>
    <body>
        <?php
        require 'include/header.php';
        ?>
        <div class="container cont-item text-center">
            <div class="table table-responsive-sm cart-table">
                <table class="table table-borderless table-hover">

                    <?php
                    $users_id = $_SESSION['user_id'];
                    $query = "SELECT * FROM users_item As u INNER JOIN items As i ON u.items_id=i.id WHERE users_id='$users_id'";
//                        die($query);
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    if (mysqli_num_rows($result) == 0) {
                        ?>
                        <div class="jumbotron">
                            <p><h2> Add items to the cart first</h2></p>
                            <a href="home.php" class="btn btn-sm btn-primary">Shop now</a>
                        </div>  
                    <?php } else {
                        ?>
                        <thead>
                            <tr>
                                <th >item number</th>
                                <th >item name</th>
                                <th > price</th>
                                <th ></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sum = 0;
                            $id = " ";
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id'] ?></th>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['price'] ?></td>
                                    <?php $pid = $row['id']; ?>
                                    <td><a href="remove.php?pid=<?= $pid ?>" class="remove_item_link"> Remove</a></td>

                                </tr>
                                <?php
                                $sum = $sum + $row['price'];
                                $id .= $row['items_id'] . ",";
                            }
                            ?>
                            <tr>
                                <?php $id = rtrim($id, ", "); ?>
                                <td></td>
                                <td>Total</td>
                                <td>Rs:<?php echo $sum ?></td>
                                <td><a href = 'success.php?itemsid=<?= "$id" ?>' class = "btn btn-primary btn-sm">Confirm Order</a></td>
                            </tr>

                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
        <?php
        require 'include/footer1.php';
        ?>
    </body>
</html>