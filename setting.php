<?php
require 'include/common1.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Setting Page</title>
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
        <div class="container cont-item">
            <form method="post" action="settings_script.php">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <h2>Change Password</h2>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="old password" name="old"> 
                            <div><?php
                                if (isset($_GET['old_msg'])) {
                                    echo $_GET['old_msg'];
                                }
                                ?></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="new password" name="new"> 
                            <div><?php
                                if (isset($_GET['new_msg'])) {
                                    echo $_GET['new_msg'];
                                }
                                ?></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="re-type password" name="retype"> 
                            <div><?php
                            if (isset($_GET['msg1'])) {
                                echo $_GET['msg1'];
                            }
                            ?></div>
                        </div>
                        <div><?php
                            if (isset($_GET['error_msg'])) {
                                echo $_GET['error_msg'];
                            }
                            ?></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" role="button">Change</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php
        require 'include/footer1.php';
        ?>

    </body>
</html>


