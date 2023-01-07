<?php
session_start();

if(isset($_SESSION['admin'])){
    if($_SESSION['admin']->rols === "admin"){
        $name = $_SESSION['admin']->username;
        $phone = $_SESSION['admin']->phone;
        $date = $_SESSION['admin']->date;
        $email = $_SESSION['admin']->email;
        $company = $_SESSION['admin']->company;
        $country = $_SESSION['admin']->country;
        $rols = $_SESSION['admin']->rols;
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
