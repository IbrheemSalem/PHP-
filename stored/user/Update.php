<?php
include "db.php";

$numberofproduct = $_POST['idproduct'];
$namepr = $_POST['namepr'];
$descriptionpr = $_POST['descriptionpr'];
$pricepr = $_POST['pricepr'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update</title>
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
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
              <form action="" method="POST">
              <button type="submit" class="btn btn-outline-danger" name="Logout">Logout</button>
              </form>
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Update</h1>
        <div class="settings-page m-20 d-grid gap-20">
        <form action="Ud.php" method="POST" enctype="multipart/form-data"> 
        <div class="mb-3">
            <?php echo "<p>$namepr</p>";?>
                <label for="exampleInputEmail1" class="form-label">New Product Name</label>
                <input type="text" name="Productname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
                <input type="hidden" name="id" value=<?php echo $_POST['idproduct']; ?> class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            </div>
            <div class="mb-3">
            <div class="mb-3">
            <?php echo "<p>$$pricepr</p>";?>
                <label for="exampleInputEmail1" class="form-label">New Product Price</label>
                <input type="number"  name="Price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            </div>
            <div class="mb-3">
            <div class="mb-3">
            <?php echo "<p>$descriptionpr</p>";?>
                <label for="exampleInputtext" class="form-label">New Product Description</label>
                <input type="text" name="Description" class="form-control" id="exampleInputtext" aria-describedby="emailHelp" require>
            </div>
            <div class="mb-3">
                <label for="file" class="form- ">New Upload Img</label><br>
                <input type="file" name="Uploadimg" class="form- " id="exampleInputPassword1">
            </div>
            <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
