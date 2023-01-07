<?php
include 'session.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects</title>
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
        <h1 class="p-relative">Projects</h1>
        <div class="projects-page d-grid m-20 gap-20">
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/10/2021</span>
            <h4 class="m-0">Elzero Dashboard</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Elzero Dashboard Project Design And Programming And Hosting</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
              <a href="#"><img src="imgs/team-04.png" alt="" /></a>
              <a href="#"><img src="imgs/team-05.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
              <span class="fs-13 rad-6 bg-eee">Hosting</span>
              <span class="fs-13 rad-6 bg-eee">Marketing</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-red" style="width: 50%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                2500
              </div>
            </div>
          </div>
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/6/2022</span>
            <h4 class="m-0">Academy Portal</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Academy Portal Project Design And Programming</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 80%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                1800
              </div>
            </div>
          </div>
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/6/2022</span>
            <h4 class="m-0">Chatting Application</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Chatting Application Project Design</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Design</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-blue" style="width: 100%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                950
              </div>
            </div>
          </div>
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/6/2022</span>
            <h4 class="m-0">Ahmed Dashboard</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Ahmed Dashboard Project Design And Programming And Hosting</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
              <a href="#"><img src="imgs/team-04.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
              <span class="fs-13 rad-6 bg-eee">Hosting</span>
              <span class="fs-13 rad-6 bg-eee">Marketing</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 60%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                1700
              </div>
            </div>
          </div>
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/6/2022</span>
            <h4 class="m-0">Ahmed Portal</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Ahmed Portal Project Design And Programming</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 70%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                850
              </div>
            </div>
          </div>
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/6/2022</span>
            <h4 class="m-0">Mohamed Application</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Mohamed Application Project Design</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Design</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-red" style="width: 40%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                950
              </div>
            </div>
          </div>
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/6/2022</span>
            <h4 class="m-0">Mohamed Dashboard</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Mohamed Dashboard Project Design And Programming And Hosting</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
              <a href="#"><img src="imgs/team-04.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
              <span class="fs-13 rad-6 bg-eee">Hosting</span>
              <span class="fs-13 rad-6 bg-eee">Marketing</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 65%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                1950
              </div>
            </div>
          </div>
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/6/2022</span>
            <h4 class="m-0">Mohamed Portal</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Mohamed Portal Project Design And Programming</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Programming</span>
              <span class="fs-13 rad-6 bg-eee">Design</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 60%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                1650
              </div>
            </div>
          </div>
          <div class="project bg-white p-20 rad-6 p-relative">
            <span class="date fs-13 c-grey">15/6/2022</span>
            <h4 class="m-0">Ahmed Application</h4>
            <p class="c-grey mt-10 mb-10 fs-14">Ahmed Application Project Design</p>
            <div class="team">
              <a href="#"><img src="imgs/team-01.png" alt="" /></a>
              <a href="#"><img src="imgs/team-02.png" alt="" /></a>
              <a href="#"><img src="imgs/team-03.png" alt="" /></a>
            </div>
            <div class="do d-flex">
              <span class="fs-13 rad-6 bg-eee">Design</span>
            </div>
            <div class="info between-flex">
              <div class="prog bg-eee">
                <span class="bg-green" style="width: 90%"></span>
              </div>
              <div class="fs-14 c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                950
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
