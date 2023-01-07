<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Sing up</title>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">  
</head>
<body>
<div class="cent">
    <div id="login-button">
        <img src="http://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
        </img>
    </div>
    <span class="remember"><a href="index.php">Log in</a></span>

    <div id="container"  style="height: 300px;">
        <h1>Log In</h1>
        <span class="close-btn">
            <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" require>
            <input type="email" name="email" placeholder="E-mail" require>
            <input type="password" name="password" placeholder="Password" require>
            <input type="password" name="password1" placeholder="Re-Password" require>
            <input type="submit" name="submit" value="Log In">>
        </form>
    </div>
</div>
<?php
include("server.php"); 
date_default_timezone_set("Asia/Amman");
$date = date('Y-m-d');

if(isset($_POST['submit'])){
$checkEmail = $db->prepare("SELECT * FROM log WHERE email_log = :email");

$email = $_POST['email'];
$checkEmail->bindParam("email",$email);
$checkEmail->execute();                       
if($checkEmail->rowCount()>0){
    echo '  <div class="alert alert-danger" role="alert">
                The Email already registered
            </div>';
}else{
    $name = $_POST['username'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password1'];
    if($password1 == $password2){
        $password1 = sha1($password1);

    $adddb = $db->prepare("INSERT INTO log(name_log,email_log,password_log,datastart_log)
    VALUES (:username, :email, :password, :date)");
    
    $adddb->bindParam("username", $name);
    $adddb->bindParam("email", $email);
    $adddb->bindParam("password", $password1);
    $adddb->bindParam("date", $date);
    
    if($adddb->execute()){
        echo    '<div class="alert alert-success" role="alert">
                    A simple success 
                </div>';
        #header('Location: index.php');
        exit;                    
        echo '  <div class="alert alert-danger" role="alert">
                        danger 
                </div>';
    }
    }else{
        echo '  <div class="alert alert-danger" role="alert">
                danger  NOt Password rep
                </div>';
    }                           
}
}//end form inser data
?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
