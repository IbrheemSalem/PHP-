<?php
include 'session.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
  <body>
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0"><?php echo $rols;?></h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="index.php">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.php">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Settings</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="user.php">
              <i class="fa-regular fa-user fa-fw"></i>
              <span>user</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="message.php">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>message</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative" style="visibility: hidden;">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
              <form action="" method="POST">
              <button type="submit" class="btn btn-outline-danger" name="Logout">Logout</button>
              </form>
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Profile</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <div class="avatar-box txt-c p-20">
              <img class="rad-half mb-10" src="imgs/avatar.png" alt="" />
              <h3 class="m-0"><?php echo $name;?></h3>
              <p class="c-grey mt-10">Level 20</p>
              <div class="level rad-6 bg-eee p-relative">
                <span style="width: 70%"></span>
              </div>
              <div class="rating mt-10 mb-10">
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
              </div>
              <p class="c-grey m-0 fs-13">550 Rating</p>
            </div>
            <div class="info-box w-full txt-c-mobile">
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey fs-15 m-0 w-full">General Information</h4>
                <div class="fs-14">
                  <span class="c-grey">Full Name</span>
                  <span><?php echo $name;?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Gender:</span>
                  <span>Male</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Country:</span>
                  <span><?php echo $country;?></span>
                </div>
                <div class="fs-14">
                  <label>
                    <input class="toggle-checkbox" type="checkbox" checked />
                    <div class="toggle-switch"></div>
                  </label>
                </div>
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0">Personal Information</h4>
                <div class="fs-14">
                  <span class="c-grey">Email:</span>
                  <span><?php echo $email;?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Phone:</span>
                  <span><?php echo $phone;?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Date Of Birth:</span>
                  <span>25/10/1982</span>
                </div>
                <div class="fs-14">
                  <label>
                    <input class="toggle-checkbox" type="checkbox" />
                    <div class="toggle-switch"></div>
                  </label>
                </div>
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0">Job Information</h4>
                <div class="fs-14">
                  <span class="c-grey">Title:</span>
                  <span>Full Stack Developer</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Programming Language:</span>
                  <span>PHP</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Years Of Experience:</span>
                  <span>15+</span>
                </div>
                <div class="fs-14">
                  <label>
                    <input class="toggle-checkbox" type="checkbox" checked />
                    <div class="toggle-switch"></div>
                  </label>
                </div>
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0">Billing Information</h4>
                <div class="fs-14">
                  <span class="c-grey">Payment Method:</span>
                  <span>Paypal</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Email:</span>
                  <span>email@website.com</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Subscription:</span>
                  <span>Monthly</span>
                </div>
                <div class="fs-14">
                  <label>
                    <input class="toggle-checkbox" type="checkbox" />
                    <div class="toggle-switch"></div>
                  </label>
                </div>
              </div>
              <!-- End Information Row -->
            </div>
          </div>
          <!-- End Overview -->
          <!-- Start Other Data -->
          <div class="other-data d-flex gap-20">
            <div class="skills-card p-20 bg-white rad-10 mt-20">
              <h2 class="mt-0 mb-10">My Skills</h2>
              <p class="mt-0 mb-20 c-grey fs-15">Complete Skills List</p>
                <button type="button" class="btn btn-warning m-1">HTML</button>
                <button type="button" class="btn btn-warning m-1">HAML</button>
                <button type="button" class="btn btn-warning m-1">CSS</button>
                <button type="button" class="btn btn-warning m-1">Stylus</button>
                <button type="button" class="btn btn-warning m-1">TypeScript</button>
                <button type="button" class="btn btn-warning m-1">SASS</button>
                <button type="button" class="btn btn-warning m-1">Jest</button>
                <button type="button" class="btn btn-warning m-1">Vuejs</button>
                <button type="button" class="btn btn-warning m-1">Pugjs</button>
                <button type="button" class="btn btn-warning m-1">PHP</button>
                <button type="button" class="btn btn-warning m-1">Jasmine</button>
                <button type="button" class="btn btn-warning m-1">Django</button>
                <button type="button" class="btn btn-warning m-1">Laravel</button>
                <button type="button" class="btn btn-warning m-1">Python</button>
            </div>
          </div>
          <!-- End Other Data -->
        </div>
      </div>
    </div>
  </body>
</html>
