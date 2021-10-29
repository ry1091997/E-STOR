<?php
require 'include/common1.php';
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$msg = mysqli_real_escape_string($con, $_POST['message']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if (empty($name) or empty($email) or empty($msg)) {
    header('location: contact.php?error=please fill the all field');
//     $error='please fill the all field';
} else {
    if (!preg_match($regex_email, $email)) {
        header('location:contact.php?email_error=invalid email id');
//        $email_error='invalid email id';
    } else {
        $query = "SELECT email FROM users_contact WHERE email='$email' ";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 0) {
            $query = "INSERT INTO users_contact(name,email,message) VALUES('$name','$email','$msg')";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            require 'include/common.php';
            ?> <div class="jumbotron text-center">
                <p> <h3>Thank you for contacting us! WE will contact you shortly </h3></p>
            </div>
            <?php
        } else {
            header('location:contact.php?err=you already contact us');
        }
    }
}
//header('location:contact.php?error='.$error.'&& email_error='.$email_error);
?>


