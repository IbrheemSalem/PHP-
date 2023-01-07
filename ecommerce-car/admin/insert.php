<?php
 include 'server.php';
$end = "";
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $img = $_FILES['img'];
  $imgname = $_FILES['img']['name'];
  $tmp_name = $_FILES['img']['tmp_name'];
  move_uploaded_file($tmp_name, "../img/up/".$imgname);
  try {
    $sql =("INSERT INTO product (name, description, price	, img)
    VALUES ('$name', '$description', '$price', '$imgname')");
  $connp->exec($sql);
    $end = "<div class='alert alert-success mt-3' role='alert'>success</div>";
  } catch(PDOException $e) {
    $end = "<div class='alert alert-danger mt-3' role='alert'>Error</div>";
  }
  $connp = null;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
        <h3 class="p-relative txt-c mt-0">Admin</h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="index.php">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="insert.php">
            <i class="fa-solid fa-upload"></i>
              <span>insert</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settings.php">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Settings</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="table-pro.php">
              <i class="fa-solid fa-table"></i>
              <span>Table Product</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="mes-req.php">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>message - Request</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15">
          <div class="icons d-flex align-center justify-content-end">
            <i class="fa-solid fa-right-from-bracket pr-2"></i>
            <form action="sesstion.php" method="post">
              <button type="submit" name="Logout" class="btn btn-outline-danger">log out</button>
            </form>
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Insert</h1>
        <div class="settings-page m-20">
          <!-- Start Settings Box -->
          <div class="p-20 bg-white">
          <form action="" method="POST" enctype="multipart/form-data">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">name</span>
            <input type="text" class="form-control" name="name"  aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">description</span>
            <input type="text" class="form-control" name="description"  aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">price</span>
            <input type="text" class="form-control" name="price"  aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">img</span>
            <input type="file" class="form-control" name="img"  aria-label="Username" aria-describedby="basic-addon1">
          </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
          <?php
            echo $end;
          ?>
          </div>
      </div>
    </div>
  </body>
</html>
