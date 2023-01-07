<?php
include "db.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, product_name, product_description, product_price FROM product";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/master.css" />
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
          <div class="search p-relative">
            <form method="post" action="">
              <input class="p-10" type="text"  name="search" placeholder="Type A Keyword" />
              <button type="submit" name="submitsea" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="icons d-flex align-center">
              <form action="" method="POST">
              <button type="submit" class="btn btn-outline-danger" name="Logout">Logout</button>
              </form>
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Table Data</h1>
        <div class="overflow-auto p-4">
        <?php
        if(isset($_POST['submitsea']) && !empty($_POST['search'])){
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "product";
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $sql = $conn->prepare("SELECT * FROM show_product WHERE product_name LIKE :value");
              $searVlue = "%".$_POST['search']."%";
              $sql->bindParam("value", $searVlue);
              $sql->execute();
              if($sql->rowCount() == 0){
                echo "Search not found";
              }else{
              echo "
              <table class='table table-striped w-75'>
              <thead>
                <tr>
                  <th scope='col'>ID</th>
                  <th scope='col'>Name</th>
                  <th scope='col'>Description</th>
                  <th scope='col'>Price</th>
                </tr>
              </thead>";
              foreach($sql as $val){
                      echo "
                      <tbody>
                      <tr>
                        <td>$val[id]</td>
                        <td>$val[product_name]</td>
                        <td>$val[product_description]</td>
                        <td>$val[product_price]</td>
                      </tr>
                      ";
                    }
                  }
                }
                ?>
                </tbody>
              </table>
        </div>
        <table class="table table-striped p-3">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "
                  <tr>
                      <td>$row[id]</td>
                      <td>$row[product_name]</td>
                      <td>$row[product_description]</td>
                      <td>$row[product_price]</td>
                      <td>
                        <form action='Update.php' method='POST'>
                          <input type='hidden' name='idproduct' value='$row[id]'>
                          <input type='hidden' name='namepr' value='$row[product_name]'>
                          <input type='hidden' name='descriptionpr' value='$row[product_description]'>
                          <input type='hidden' name='pricepr' value='$row[product_price]'>
                          <button type='submit' name='updatasub' class='btn btn-success'>Update</button>
                        </form>
                      </td>
                      <td>
                      <form action='Delete.php' method='POST'> 
                          <input type='hidden' name='idproduct' value='$row[id]'>
                          <button type='submit' name='deletesub' class='btn btn-danger'>Delete</button></td>
                      </form>
                    </tr>
                  ";
                }
              }
              ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
