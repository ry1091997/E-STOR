<?php
require 'include/common1.php';
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
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
                <div class="col-sm-10">
                    <h3>Live Support</h3>
                    <p> 24hours | 7 days week | 365 days a year Live Technical Support</p>
                    <p>E-store live support makes it easy for you to set up and manage a customer contact center and provided
                        reliable customer engagement at any scale.with E-store live support you can deploy a customer contact center
                        with just a few clicks in the management console,on-board agents from anywhere, and quickly begin to engage with
                        our customers.The E-store  customer service organization aims to deliver an exceptional level of services to our customers.
                    </p>

                </div>
                <div class="col-sm-2">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.vqcAmtdYALDOPrw2OeQ3QwHaFz&pid=Api&P=0&w=225&h=177" alt="img" class="rounded-circle">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <h3> CONTACT US </h3>

                    <form method="post" action="contact_script.php">
                        <div class="form-group">
                            <!--                            <label for="name">Name</label>-->
                            <input type="text" class="form-control" id="name" name="name" placeholder="name:">
                        </div>
                        <div class="form-group">
                            <!--                            <label for="email"> Email: </label>                             -->
                            <input type="email" class="form-control" id="email" name="email" placeholder="email:">
                            <div>
                                <?php
                                if (isset($_GET['email_error'])) {
                                    echo $_GET['email_error'];
                                }
                                if (isset($_GET['err'])) {
                                    echo $_GET['err'];
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                            <div>
                                <?php
                                if (isset($_GET['error'])) {
                                    echo $_GET['error'];
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" role="button" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5">
                    <h4>Company Information:</h4>
                    <p>Dr APJ Abdul Kalam Road,</p><p> 123 east 17th street,</p><p> 110033 New Delhi ,India</p> <p>Phone:(011)222 666 444</p>
                    <p> Fax:(011)123 11 22 0</p> <p>Email:info@e-store.com</p><p> Follow on:Facebook, Twitter</p>
                </div>
            </div>
        </div>
        <?php
        require 'include/login.php';
        require 'include/footer.php';
        ?>
    </body>
</html>

