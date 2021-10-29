<?php
require 'include/common1.php';
if (isset($_SESSION['email'])) {
    header('location:home.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
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
                <div class="col-md-4">
                    <div class="card  border-0">
                        <div class="card-body">
                            <h4>WHO WE ARE</h4>
                            <img src="image/about.jpg" alt="img" class="card-img-top aimg">

                            <p class="text-justify">
                                E-commerce is revolutionizing the way we all shop in India. Why do you want to hop from one store to another in search of the latest phone when you can find it on the Internet in a single click ?  
                                For those of you with erratic working hours, E-Store is your best bet. Shop in your PJs, at night or in the wee hours of the morning. This e-commerce never shuts down
                                Get an instant discount on the phone that you have been eyeing on.
                            </p>
                        </div>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class="card  border-0">
                        <div class="card-body">
                            <h4>OUR HISTORY</h4>

                            <p class="text-justify">
                            <h6 class="text-primary">2014</h6>
                            E-store is an Indian e-commerce company based in delhi, india. It was founded by Gaurav and Rahul in 2014.The company  focused on mobile phone sales
                            .E-store is significantly dominant in the sale of mobile phones. e-store slowly grew in prominence  and it was receiving 100 orders per day.</p>
                            <p class="text-justify">
                            <h6 class="text-primary">2015</h6>
                            In January 2015,e-store has received refund of $12 million from venture partners and Indo-US venture partners.</p>
                            <p class="text-justify">   <h6 class="text-primary">2018</h6>
                            E-store received its 2nd round of funding of $20 million on feb-2018. The round of funding was led by Fcom with all the current institutional invester. 

                            </p>

                        </div>
                    </div>    
                </div>
                <div class="col-md-4">
                    <div class="card  border-0">
                        <div class="card-body">
                            <h4>OPPORTUNITIES</h4>


                            <h6>Available Roles </h6> 


                            <p class="text-justify">  1. Jr/Sr. Web Developement [Full Time Role + also available as a 6 Months intership] </p>
                            <p class="text-justify">   2.Bussiness Apprentic [6 Months Internship] </p>
                            <p class="text-justify">  3.Manage at background operations [Full Time Role + available as a 6 Months internship] </p>
                            </p>
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

