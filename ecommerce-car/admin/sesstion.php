<?php
session_start();

if(isset($_SESSION['admin'])){
    if($_SESSION['admin']->rols === "admin"){
        $name = $_SESSION['admin']->name_log;
        $email = $_SESSION['admin']->email_log;
        $date = $_SESSION['admin']->datastart_log;
        $active = $_SESSION['admin']->active;
        $rols = $_SESSION['admin']->rols;
    }else{
        header("location:../index.php",  true); 
        die("");
    }
}else{
    header("location:../index.php",  true); 
    die("");
}

if(isset($_POST['Logout'])){
    session_unset();
    session_destroy();
    header("location:../index.php",  true); 
}
