<?php
require 'include/common1.php';
if (!isset($_SESSION['email'])) {
    header('location: home.php');
}
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
        <meta name="viewport" content="width=device-width, initial-scale =1.0">

        <?php
        require 'include/common.php';
        ?>

    </head>
    <body> 
        <?php
        require 'include/header.php';
        require 'include/check-if-added.php';
        ?>

        <div class="container cont-item">
            <div class="row row-ind">
                <div class="col-lg-4 col-md-6 col-item">
                    <div class="card">
                        <div class="card-header bg-grey">
                            <h4># 1</h4> 
                        </div>
                        <img src="image/apple-iphone-xr.jpeg" class=" abs card-img-top">
                        <div class="card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>Apple iPhone XR (cherry red, 8GB RAM, 128GB Storage,</h6>Rs-95,500</p>                              


                                <?php
//                                } else {
                                if (check_if_added_to_cart(1)) {

                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
//                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-item">
                    <div class="card" >
                        <div class="card-header bg-grey">
                            <h4>#2</h4> 
                        </div>
                        <img src="image/pixel-3a.jpeg" alt="img1" class="abs card-img-top">
                        <div class="card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>Google pixel 3a(Black, 8GB RAM, 128GB Storage,</h6>Rs-47,999</p>

                                <?php
                                if (check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>

                            </caption>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 col-item">
                    <div class = "card" >
                        <div class = "card-header bg-grey">
                            <h4># 3</h4> 
                        </div>
                        <img src = "image/poco-x2.jpeg" alt = "img1" class = "abs card-img-top">
                        <div class = "card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>Poco x2(Sky blue, 4GB RAM, 64GB Storage,</h6>Rs-37,999</p>

                                <?php
                                if (check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = "row row-ind">
                <div class = "col-lg-4 col-md-6 col-item">
                    <div class = "card" >
                        <div class = "card-header bg-grey">
                            <h4>#4</h4>
                        </div>
                        <img src = "image/realme-x.jpeg" alt = "img1" class = "abs card-img-top">
                        <div class = "card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>Realme X(Lite grey, 8GB RAM, 128GB Storage,</h6>Rs-57,999</p>

                                <?php
                                if (check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 col-item">
                    <div class = "card" >
                        <div class = "card-header bg-grey">
                            <h4>#5</h4>
                        </div>
                        <img src = "image/oppo-reno-10x-zoom.jpeg" alt = "img1" class = "abs card-img-top">
                        <div class = "card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>oppo-reno-10x(Dark black, 4GB RAM, 64GB Storage,</h6>Rs-27,990</p>

                                <?php
                                if (check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 col-item">
                    <div class = "card" >
                        <div class = "card-header bg-grey">
                            <h4>#6</h4>
                        </div>
                        <img src = "image/motorola-racer-turbo-edge.jpeg" alt = "img1" class = "abs card-img-top">
                        <div class = "card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>motorola-racer-turbo(Black, 8GB RAM, 256GB Storage,</h6>Rs-42,900</p>

                                <?php
                                if (check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-ind">
                <div class="col-lg-4 col-md-6 col-item">
                    <div class="card">
                        <div class="card-header bg-grey">
                            <h4># 7</h4> 
                        </div>
                        <img src="image/vivo-s1.jpeg" class=" abs card-img-top">
                        <div class="card-body text-center">
                            <caption>
                                <?php
                                if (check_if_added_to_cart(7)) {
                                    ?>
                                    <p class="paragraph"> <h6>Vivo s1 pro (Dark blue, 8GB RAM, 128GB Storage,</h6>Rs-20,990</p>
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                <?php } else {
                                    ?>
                                    <p class="paragraph"> <h6>Vivo s1 pro (Dark blue, 8GB RAM, 128GB Storage,</h6>Rs-20,990</p>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-item">
                    <div class="card" >
                        <div class="card-header bg-grey">
                            <h4>#8</h4> 
                        </div>
                        <img src="image/oppo f11-pro.jpeg" alt="img1" class="abs card-img-top">
                        <div class="card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>oppo F11-pro(Navy blue, 8GB RAM, 128GB Storage,</h6>Rs-23,990</p>

                                <?php
                                if (check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>

                            </caption>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 col-item">
                    <div class = "card" >
                        <div class = "card-header bg-grey">
                            <h4>#9</h4> 
                        </div>
                        <img src = "image/mi-redmi-note-7-pro.jpeg" alt = "img1" class = "abs card-img-top">
                        <div class = "card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>Redmi note 9 pro(Black, 8GB RAM, 128GB Storage,</h6>Rs-16,499</p>

                                <?php
                                if (check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = "row row-ind">
                <div class = "col-lg-4 col-md-6 col-item">
                    <div class = "card" >
                        <div class = "card-header bg-grey">
                            <h4>#10</h4>
                        </div>
                        <img src = "image/honor 20.jpeg" alt = "img1" class = "abs card-img-top">
                        <div class = "card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>Honor 20(Navy blue, 6GB RAM, 128GB Storage,</h6>Rs-35,999</p>

                                <?php
                                if (check_if_added_to_cart(10)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 col-item">
                    <div class = "card" >
                        <div class = "card-header bg-grey">
                            <h4>#11</h4>
                        </div>
                        <img src = "image/samsung-galaxy-note10-lite.jpeg" alt = "img1" class = "abs card-img-top">
                        <div class = "card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>samsung galaxy note 10(Pink, 12GB RAM, 256GB Storage,</h6>Rs-45,000</p>

                                <?php
                                if (check_if_added_to_cart(11)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class = "col-lg-4 col-md-6 col-item">
                    <div class = "card" >
                        <div class = "card-header bg-grey">
                            <h4>#12</h4>
                        </div>
                        <img src = "image/samsung-galaxy-s20-ultra.jpeg" alt = "img1" class = "abs card-img-top">
                        <div class = "card-body text-center">
                            <caption>
                                <p class="paragraph"> <h6>Samsung galaxy s20(Dark black, 8GB RAM, 128GB Storage,</h6>Rs-97999</p>

                                <?php
                                if (check_if_added_to_cart(12)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php
                                }
                                ?>
                            </caption>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require 'include/login.php';
        require 'include/footer.php';
        ?>
    </body>
</html>
<!--if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
<?php ?>
                                } else {-->



