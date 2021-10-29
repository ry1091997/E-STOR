<?php

require 'include/common1.php';
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$str = mysqli_real_escape_string($con, $_POST['password']);
$cont = $_POST['contact'];
$city = mysqli_real_escape_string($con, $_POST['city']);
$add = mysqli_real_escape_string($con, $_POST['address']);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$password = md5($str);
if (empty($name) or empty($email)or empty($str)or empty($cont)or empty($city)or empty($add)) {
    header('location:signup.php?error= please fill the all reqired field');
//    die('please fill the all reqired field');
//    }
} else {
    if (!preg_match($regex_email, $email) and strlen($str) >= 6 and strlen($cont) == 10) {
        header('location:signup.php?email_error= Invalid email id');
    } else if (preg_match($regex_email, $email) and strlen($str) < 6 and strlen($cont) == 10) {
        header('location:signup.php?password_error= enter at least 6 digit password');
    } else if (preg_match($regex_email, $email) and strlen($str) >= 6 and strlen($cont) < 10) {
        header('location:signup.php?cont_error= enter at least 10 digit mobile number');
    } else if (!preg_match($regex_email, $email) and strlen($str) < 6 and strlen($cont) < 10) {
        $email_error = 'Invalid email id';
        $password_error = 'enter at least 6 digit password';
        $cont_error = 'enter at 10 digit mobile number';
        header("location:signup.php?email_error=" . $email_error . "& password_error=" . $password_error . "&cont_error=" . $cont_error);
    } else if (preg_match($regex_email, $email) and strlen($str) < 6 and strlen($cont) < 10) {
        $password_error = 'enter at least 6 digit password';
        $cont_error = 'enter at lesat 10 digit mobile number';
        header("location:signup.php? password_error=" . $password_error . "&cont_error=" . $cont_error);
    } else if (!preg_match($regex_email, $email) and strlen($str) >= 6 and strlen($cont) < 10) {
        $email_error = 'Invalid email id';
        $cont_error = 'enter at 10 digit mobile number';
        header("location:signup.php?email_error=" . $email_error . "& cont_error=" . $cont_error);
    } else if (!preg_match($regex_email, $email) and strlen($str) < 6 and strlen($cont) == 10) {
        $email_error = 'Invalid email id';
        $password_error = 'enter at least 6 digit password';
        header("location:signup.php?email_error=" . $email_error . "& password_error=" . $password_error);
    } else {
        $query = "SELECT id FROM users WHERE email='$email'";
//      die($query);
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        if (mysqli_num_rows($result) == 0) {

            $row = mysqli_fetch_array($result);
            $query = "INSERT INTO users(name,email,password,contact,city,address)VALUES ('$name','$email','$password','$cont','$city','$add')";
//          die($query);
            $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
            mysqli_insert_id($con);
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = mysqli_insert_id($con);
//          echo $_SESSION['user_id'];
            header('location:home.php');
        } else {
            header('location:signup.php?email_id= email id already exist');
//            echo 'email id already exist';
        }
    }
}
//if (!empty($name) and !empty($email) and !empty($str) and !empty($cont) and !empty($city) and !empty($add))
//$query = "SELECT id FROM users WHERE email='$email'";
////die($query);
//$result = mysqli_query($con, $query) or die(mysqli_error($con));
//if (mysqli_num_rows($result) == 0) {
//
//    $row = mysqli_fetch_array($result);
//    $query = "INSERT INTO users(name,email,password,contact,city,address)VALUES ('$name','$email','$str','$cont','$city','$add')";
////    die($query);
//    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
//    mysqli_insert_id($con);
//    $_SESSION['email'] = $email;
//    $_SESSION['user_id'] = mysqli_insert_id($con);
////    echo $_SESSION['user_id'];
//    header('location:home.php');
//
//} else {
//    echo 'email id already exist';
//}
// or empty($email)or empty($password)or empty($cont)or empty($city)or empty($add)
?>
