<?php
if(isset($_POST['submit'])){
    include("server.php");
$erorr = " ";
$login = $db->prepare("SELECT * FROM log WHERE email_log = :em AND password_log = :pass");
$login->bindParam("em", $_POST['em']);
$encpass = sha1($_POST['pass']);
$login->bindParam("pass", $encpass);
$login->execute();
    if($login->rowCount() == 1){
        $user = $login->fetchObject();
        if($user->active == 1){  
            session_start();
            if($user->rols === "admin"){
                $_SESSION['admin'] = $user;
                header("location:../admin",  true); 
                exit;
            }elseif($user->rols === "user"){
                $_SESSION['user'] = $user;
                header("location:../shop.php",  true); 
                exit;
            }else{
                echo "error";
            }
            }else{
            $erorr_arr = '<div class="alert alert-danger" role="alert">
                            Error
                            </div>';
            } 
        }else{
        $erorr_arr ='<div class="alert alert-danger" role="alert">
                            Incorrect password, please re-type it or email
                    </div>';
        } 
    } 
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>LogIn</title>
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
    <span class="remember"><a href="singup.php">Singup</a></span>

    <div id="container">
        <h1>Log In</h1>
        <span class="close-btn">
            <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>
        <form action="" method="POST">
            <input type="email" name="em" placeholder="E-mail">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" name="submit" value="Log In">
            <div id="remember-container">
                <span id="forgotten">Forgotten password</span>
            </div>
        </form>
        <?php
            if(isset($erorr_arr)){
                echo $erorr_arr;
            }
        ?>
    </div>
    <!-- Forgotten Password Container -->
    <div id="forgotten-container">
        <h1>Forgotten</h1>
        <span class="close-btn">
            <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>
        <form>
            <input type="email" name="email" placeholder="E-mail">
            <a href="#" class="orange-btn">Get new password</a>
        </form>
    </div>

</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
