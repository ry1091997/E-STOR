<?php

require 'include/common1.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
//$password = md5($str);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(!preg_match($regex_email, $email) and strlen($password) >= 6 ) {
    $msg = "email entered is invalid";
    header('location: index.php? email_error=' . $msg);
}else if(strlen($password) < 6 and preg_match($regex_email, $email) ) {
    $msg = "password must contain at least 6 characters";
    header('location: index.php? password_error=' . $msg);
}else if(strlen($password) < 6 and !preg_match($regex_email, $email) ){
   header('location: index.php?email_error= enter correct email & password_error= enter correct password ');
}

$pass = md5($password);
$query = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
// die($query);
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row= mysqli_fetch_array($result);
if (mysqli_num_rows($result) == 0) {
    echo 'There is no user with this email';
} else {
    $id = $row['id'];
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $id;
    header('location:home.php');
}
