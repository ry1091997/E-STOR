<?php
require 'include/common1.php';
if (isset($_SESSION['email'])) {
    header('location: home.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale =1.0">
        <title>index</title>

        <?php
        require 'include/common.php';
        ?>

    </head>
    <body> 
        <?php
        require 'include/header.php';
        ?>
        <!--style="height: 200px; object-fit: cover; object-position: center center;"-->
        <div class="container cont-item">
            <div class="row row-ind">
                <div class=" col-md-4 col-item">
                    <div class="card text-justify" >
                        <div class="card-header bg-grey ">
                            <h4>Mobile 1</h4> 
                        </div>
                        <div class="card-body text-center">
                            <img src="image/apple-iphone-xr.jpeg" alt="img1" class="abs card-img-top "  >
                            <caption>
                                <p class="paragraph"> <h6>Apple iPhone Xs (cherry red, 8GB RAM, 128GB Storage,</h6>Rs-95,500</p>
                                <p class="paragraph"><a href="" role="button" class="btn btn-primary btn-block">Order now</a></p>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-item">
                    <div class="card  text-justify" >
                        <div class="card-header bg-grey " >
                            <h4>Mobile 2</h4> 
                        </div>
                        <div class="card-body text-center">
                            <img src="image/oneplus-7t.jpeg" alt="img1" class="abs card-img-top"  >
                            <caption>
                                <p class="paragraph"> <h6>One Plus 7T (Glacier Blue, 8GB RAM,128GB Storage,</h6>Rs-47,999</p>
                                <p class="paragraph"> <a href="" role="button" class="btn btn-primary btn-block">Order now</a></p>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-item">
                    <div class="card  text-justify" >
                        <div class="card-header bg-grey " >
                            <h4>Mobile 3</h4> 
                        </div>


                        <div class="card-body text-center">
                            <img src="image/motorola-racer-turbo-edge.jpeg" alt="img1" class="abs card-img-top"  >
                            <caption>
                                <p class="paragraph"> <h6>Motorola racer(Glacier Blue, 8GB RAM,128GB Storage,</h6>Rs-37,999</p>
                                <p class="paragraph"> <a href="" role="button" class="btn btn-primary btn-block">Order now</a></p>
                            </caption>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-ind">
                <div class="col-lg-4 col-md-6 col-item">
                    <div class="card  text-justify" >
                        <div class="card-header bg-grey">
                            <h4>Mobile 4</h4> 
                        </div>
                        <div class="card-body text-center">
                            <img src="image/pixel-3a.jpeg" alt="img1" class="abs card-img-top">

                            <caption>
                                <p class="paragraph"> <h6> Google pixel -3a (Gold, 4GB RAM, 64GB Storage) </h6>Rs-37,000</p>
                                <p><a href="" role="button" class="btn btn-primary btn-block">Order now</a></p>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-item">
                    <div class="card  text-justify" >
                        <div class="card-header bg-grey">
                            <h4>Mobile 5</h4> 
                        </div>
                        <div class="card-body text-center">
                            <img src="image/poco-x2.jpeg" alt="img1" class="abs card-img-top"> 

                            <caption>
                                <p class="paragraph"> <h6> POCO X2 (Atlantis Blue, 4GB RAM, 64GB Storage) </h6>Rs-27,000</p
                                <p><a href="" role="button" class="btn btn-primary btn-block">Order now</a></p>
                            </caption>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-item">
                    <div class="card  text-justify" >
                        <div class="card-header bg-grey">
                            <h4>Mobile 6</h4> 
                        </div>
                        <div class="card-body text-center">
                            <img src="image/sg lite.jpeg" alt="img1" class="abs card-img-top">
                            <caption>
                                <p class="paragraph"> <h6>Samsung S10 Lite (Prism White, 128 GB)  (8 GB RAM) </h6>Rs-42,900</p
                                <p><a href="" role="button" class="btn btn-primary btn-block">Order now</a></p>
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


