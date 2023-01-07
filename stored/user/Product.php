<?php
include "db.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT product_name, product_price, product_description, product_img FROM product";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
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
        <div class="head bg-white p-15 between-flex">
        <div class="search p-relative" style="visibility: hidden;">
              <form>
                <input class="p-10" type="text" name="seaarch" id="search" placeholder="Seaarch" />
              </form>
          </div>
          <div class="icons d-flex align-center">
              <form action="" method="POST">
              <button type="submit" class="btn btn-outline-danger" name="Logout">Logout</button>
              </form>
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Product</h1>
        <div class="courses-page d-grid m-20 gap-20">
        <?php
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "
              <div class='course bg-white rad-6 p-relative'>
              <img class='cover' src='imgs/up/$row[product_img]' alt=''/>
              <div class='p-20'>
                <h4 class='m-0'>$row[product_name]</h4>
                <p class='description c-grey mt-15 fs-14'>$row[product_description]</p>
              </div>
              <div class='info p-15 p-relative between-flex'>
                <span class='c-grey'>
                  <i class='fa-solid fa-dollar-sign'></i>
                  $row[product_price]
                </span>
              </div>
            </div>
            ";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>        
    </div>
  </body>
</html>
