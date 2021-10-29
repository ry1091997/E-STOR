<?php
require 'include/common1.php';
 session_start();
 session_unset();
 session_destroy();
 if(!isset($_SESSION['email'])){ 
     header('location:index.php');
     exit; 
 }

