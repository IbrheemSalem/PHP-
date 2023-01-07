<?php
session_start();

if(isset($_SESSION['user'])){
  if($_SESSION['user']->rols === "user"){
    $name = $_SESSION['user']->username;
    $company = $_SESSION['user']->company;
  }else{
    header("location:../login.php",  true); 
    die("");
  }
}else{
 
  die("");
}

if(isset($_POST['Logout'])){
  session_unset();
  session_destroy();
  header("location:../login.php",  true); 
}

$name = $_SESSION['user']->username;
$phone = $_SESSION['user']->phone;
$date = $_SESSION['user']->date;
$email = $_SESSION['user']->email;
$company = $_SESSION['user']->company;
$country = $_SESSION['user']->country;

