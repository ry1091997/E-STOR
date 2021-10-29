<?php
require 'include/common1.php';
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>
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
            <div class="row">
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-header bg-grey">

                        </div>
                        <div class="card-body">
                            <img src="image/sup.png" alt="img" class="img-thumbnail">
                        </div>
                        <div class="card-header bg-grey">

                        </div>
                    </div>
                </div>
                <div class="offset-sm-1 col-sm-4 offset-sm-1">
                    <h4>Sign Up</h4>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">                       
                            <input type="text" class="form-control" placeholder="name" name="name">
                        </div>
                        <div class="form-group">                           
                            <input type="email" class="form-control" placeholder="email" name="email">
                            <div>
                                <?php
                                if (isset($_GET['email_error'])) {
                                    echo $_GET['email_error'];
                                }
                                if (isset($_GET['email_id'])) {
                                    echo $_GET['email_id'];
                                }
                                ?>
                            </div>

                        </div>
                        <div class="form-group">                          
                            <input type="password" class="form-control" placeholder="password" name="password">
                            <div>
                                <?php
                                if (isset($_GET['password_error'])) {
                                    echo $_GET['password_error'];
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">                          
                            <input type="number" class="form-control" placeholder="contact" name="contact">
                            <div>
                                <?php
                                if (isset($_GET['cont_error'])) {
                                    echo $_GET['cont_error'];
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">                           
                            <input type="text" class="form-control" placeholder="City" name="city">
                        </div>
                        <div class="form-group">                           
                            <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                        <div>
                            <?php
                            if (isset($_GET['error'])) {
                                echo $_GET['error'];
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary signb" value=”registration_submit”>Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        <?php
        require 'include/login.php';
        require 'include/footer.php';
        ?>

    </body>
</html>


