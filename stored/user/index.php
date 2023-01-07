<?php
session_start();

if(isset($_SESSION['user'])){
    if($_SESSION['user']->rols === "user"){
    $name = $_SESSION['user']->username;
    $company = $_SESSION['user']->company;
    }else{
    header("location:../not.html",  true); 
    die("");
}
}else{
    header("location:../not.html",  true); 
    die("");
}