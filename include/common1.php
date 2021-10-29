<?php
$con= mysqli_connect("localhost" , "root" , "", "estore") or 
 die(mysqli_error($con));
$foreign = 'SET foreign_key_checks = 0';
mysqli_query($con, $foreign);
if(!isset($_SESSION)){
session_start();
}
?>
