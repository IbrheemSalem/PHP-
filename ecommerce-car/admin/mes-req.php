<?php 
 include 'server.php';
$sql = "SELECT * FROM services";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects</title>
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
        <h2 class="pt-20 pl-4 fw-bold m-0 ">services</h2>
          <div class="d-block bg-white p-10 m-20 overflow-auto" style="width:clac(100% - 20px);inline-size:clac(100% - 20px);overflow-wrap: break-word;height: 500px;">
            <table class='table table-striped'>
              <thead>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>service</th>
                    <th>special</th>
                    <th>data</th>
                    <th>phone</th>
                    <th>phone</th>
                  </tr>
                </thead>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "
                      <tbody>
                        <tr>
                          <td>$row[id]</td>
                          <td>$row[name_ser]</td>
                          <td>$row[email_ser]</td>
                          <td>$row[service_ser]</td>
                          <td>$row[special_request]</td>
                          <td>$row[data_ser]</td>
                          <td>$row[phone]</td>
                          <th>
                          <form action='updata.php' method='post'>
                            <input type='hidden' name='id' value='$row[id]'>
                            <button type='submit' name='deleser' class='btn btn-success'>Done</button>
                          </form
                          </th>
                        </tr>
                      </tbody>
                      ";
                    }
                  } else {
                    echo "0 results";
                  }
                  ?>
              </table>
      </div>

      <h2 class="pt-20 pl-4 fw-bold m-0 ">Catalog</h2>
          <div class="d-block bg-white p-10 m-20 overflow-auto" style="width:clac(100% - 20px);inline-size:clac(100% - 20px);overflow-wrap: break-word;height: 500px;">
            <table class='table table-striped'>
              <thead>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>data send</th>
                  </tr>
                </thead>
                <?php
                $sql1 = "SELECT * FROM catalog";
                $result = $conn->query($sql1);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "
                      <tbody>
                        <tr>
                          <td>$row[id]</td>
                          <td>$row[name_book]</td>
                          <td>$row[email_book]</td>
                          <td>$row[subject_book]</td>
                          <td>$row[data_send]</td>
                          <td>
                          <form action='updata.php' method='post'>
                            <input type='hidden' name='id' value='$row[id]'>
                            <button type='submit' name='delecat' class='btn btn-danger'>Delete</button>
                          </form
                          </td>
                        </tr>
                      </tbody>
                      ";
                    }
                  } else {
                    echo "0 results";
                  }
                  ?>
              </table>
      </div>

      <h2 class="pt-20 pl-4 fw-bold m-0 "></h2>
          <div class="d-block bg-white p-10 m-20 overflow-auto" style="width:clac(100% - 20px);inline-size:clac(100% - 20px);overflow-wrap: break-word;height: 500px;">
            <table class='table table-striped'>
              <thead>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                    <th>data</th>
                  </tr>
                </thead>
                <?php
                $sql2 = "SELECT * FROM contact";
                $result = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "
                      <tbody>
                        <tr>
                          <td>$row[id_con]</td>
                          <td>$row[name_con]</td>
                          <td>$row[email_con]</td>
                          <td>$row[subject_con]</td>
                          <td>$row[message_con]</td>
                          <td>$row[data_con]</td>
                        <th>
                          <form action='updata.php' method='post'>
                            <input type='hidden' name='id' value='$row[id_con]'>
                            <button type='submit' name='delecon' class='btn btn-danger'>Delete</button>
                          </form
                          </th>
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
  </body>
</html>
