<?php
 include 'server.php';

$sql = "SELECT * FROM product";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table</title>
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
        <h1 class="p-relative">Table</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">img</th>
                <th scope="col">Up Data</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
          <?php
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "
                <tbody>
                  <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td class='w-50'>$row[description]</td>
                    <td>$$row[price]</td>
                    <td><img src='../img/up/$row[img]' alt='' style='width:50px'></td>
                    <td>
                      <form action='newdata.php' method='POST'>
                        <input type='hidden' name='id' value='$row[id]'>
                        <input type='hidden' name='name' value='$row[name]'>
                        <input type='hidden' name='price' value='$row[price]'>
                        <input type='hidden' name='description' value='$row[description]'>
                        <input type='hidden' name='img' value='$row[img]'>
                        <button type='submit' name='updata' class='btn btn-success'>Up Data</button>
                      </form
                    </td>
                    <td>
                    <form action='updata.php' method='post'>
                      <input type='hidden' name='id' value='$row[id]'>
                      <button type='submit' name='dele' class='btn btn-danger'>Delete</button>
                  </form
                    </td>
                  </tr>
                </tbody>
              ";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
          </table>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>