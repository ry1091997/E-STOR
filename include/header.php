
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar fixed-top">

        <a href="index.php" class="navbar-brand brand store">E-Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav ml-auto list">
                <?php
                if(!isset($_SESSION['email'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-sign-in-alt"></i> Login</a>
                    <!--<button type="button"  data-toggle="modal" data-target="#myModal"><i class="fas fa-sign-in-alt"></i> Login  </button>-->                                     
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php"><i class="fas fa-address-card"></i> About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-id-badge"></i> Contact Us</a>
                </li>
                <?php
                } else{
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="setting.php"><i class="fas fa-user-cog"></i> Setting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</div>

