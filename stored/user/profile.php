<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
  <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0"><?php echo $company; ?></h3>
        <ul p-0>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="user.php">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="insert.php">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Insert</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="profile.php">
              <i class="fa-regular fa-user fa-fw"></i>
              <span>Profile</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="Table.php">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>Table Data</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="Product.php">
            <i class="fa-regular fa-folder-open"></i>              
            <span>Product</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="content w-full">
        <!-- Start Head -->
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
              <h3 class="m-0"><?php echo $name ;?></h3>
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
                  <span><?php echo $name ;?></span>
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
                  <span><?php echo $date;?></span>
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
                  <span>Python</span>
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
              <button class="btn btn-outline-success">HTML</button>
              <button class="btn btn-outline-success">Pugjs</button>
              <button class="btn btn-outline-success">CSS</button>
              <button class="btn btn-outline-success">SASS</button>
              <button class="btn btn-outline-success">Stylus</button>
              <button class="btn btn-outline-success">JavaScript</button>
              <button class="btn btn-outline-success">TypeScript</button>
              <button class="btn btn-outline-success">Vuejs</button>
              <button class="btn btn-outline-success">Reactjs</button>
              <button class="btn btn-outline-success">Jest</button>
              <button class="btn btn-outline-success">PHP</button>
              <button class="btn btn-outline-success">Jasmine</button>
              <button class="btn btn-outline-success">Laravel</button>
              <button class="btn btn-outline-success">Python</button>
              <button class="btn btn-outline-success">Django</button>
            </div>
          <!-- End Other Data -->
        </div>
      </div>
    </div>
  </body>
</html>
