<?php
if(isset($_POST['submit'])){
  include("namedb.php");
$erorr = " ";

$login = $db->prepare("SELECT * FROM users WHERE email = :em AND password = :pass");
$login->bindParam("em", $_POST['em']);
$encpass = sha1($_POST['pass']);
$login->bindParam("pass", $encpass);
$login->execute();
  if($login->rowCount() == 1){
    $user = $login->fetchObject();
      if($user->active == 1){  
        session_start();
          if($user->rols === "admin"){
            header("location:admin/index.php",  true);
            $_SESSION['admin'] = $user;
            exit;
          }elseif($user->rols === "user"){
            header("location:user/user.php",  true); 
            $_SESSION['user'] = $user;
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
<htm lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Sign in to your account</span>
              <form id="stripe-login" action="" method="POST">
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="em" required>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                    <div class="reset-pass">
                      <!-- <a href="#">Forgot your password?</a> -->
                    </div>
                  </div>
                  <input type="password" name="pass" required>
                </div>
                <div class="field padding-bottom--24">
                  <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Continue" >
                </div>
              </form>
              <?php
              if(isset($erorr_arr)){
                echo $erorr_arr;
              }
              ?>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>Don't have an account? <a href="index.php">Sign up</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>