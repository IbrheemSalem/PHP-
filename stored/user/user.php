<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <h1 class="p-relative">Dashboard</h1>
        <div class="wrapper d-grid gap-20">
          <!-- Start Welcome Widget -->
          <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
            <div class="intro p-20 d-flex space-between bg-eee">
              <div>
                <h2 class="m-0">Welcome</h2>
                <p class="c-grey mt-5"><?php echo $company; ?></p>
              </div>
              <img class="hide-mobile" src="imgs/welcome.png" alt="" />
            </div>
            <img src="imgs/avatar.png" alt="" class="avatar" />
            <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
              <div><?php echo $name; ?><span class="d-block c-grey fs-14 mt-10">Developer</span></div>
              <div>80 <span class="d-block c-grey fs-14 mt-10">Projects</span></div>
              <div>$8500 <span class="d-block c-grey fs-14 mt-10">Earned</span></div>
            </div>
            <a href="profile.html" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape">Profile</a>
          </div>
          <!-- End Welcome Widget -->
          <!-- Start Quick Draft Widget -->
          <div class="quick-draft p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Quick Draft</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Write A Draft For Your Ideas</p>
            <form>
              <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" placeholder="Title" />
              <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" placeholder="Your Thought"></textarea>
              <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="Save" />
            </form>
          </div>
          <!-- End Quick Draft Widget -->
          <!-- Start Targets Widget -->
          <div class="targets p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Yearly Targets</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Targets Of The Year</p>
            <div class="target-row mb-20 blue center-flex">
              <div class="icon center-flex">
                <i class="fa-solid fa-dollar-sign fa-lg c-blue"></i>
              </div>
              <div class="details">
                <span class="fs-14 c-grey">Money</span>
                <span class="d-block mt-5 mb-10 fw-bold">$20.000</span>
                <div class="progress p-relative">
                  <span class="bg-blue blue" style="width: 80%">
                    <span class="bg-blue">80%</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="target-row mb-20 center-flex orange">
              <div class="icon center-flex">
                <i class="fa-solid fa-code fa-lg c-orange"></i>
              </div>
              <div class="details">
                <span class="fs-14 c-grey">Projects</span>
                <span class="d-block mt-5 mb-10 fw-bold">24</span>
                <div class="progress p-relative">
                  <span class="bg-orange orange" style="width: 55%">
                    <span class="bg-orange">55%</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="target-row mb-20 center-flex green">
              <div class="icon center-flex">
                <i class="fa-solid fa-user fa-lg c-green"></i>
              </div>
              <div class="details">
                <span class="fs-14 c-grey">Team</span>
                <span class="d-block mt-5 mb-10 fw-bold">12</span>
                <div class="progress p-relative">
                  <span class="bg-green green" style="width: 75%">
                    <span class="bg-green">75%</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- End Targets Widget -->
          <!-- Start Ticket Widget -->
          <div class="tickets p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Tickets Statistics</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Everything About Support Tickets</p>
            <div class="d-flex txt-c gap-20 f-wrap">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">2500</span>
                Total
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">500</span>
                Pending
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">1900</span>
                Closed
              </div>
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-xmark fa-2x mb-10 c-red"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">100</span>
                Deleted
              </div>
            </div>
          </div>
          <!-- End Ticket Widget -->
  </body>
</html>
