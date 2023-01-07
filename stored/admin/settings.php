<?php
include 'DB.php';
include 'session.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
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
        <div class="projects p-20 bg-white rad-10 mt-20">
          <h2 class="mt-0 mb-20">user</h2>
          <div class=" - ">
          <table class='able table-striped'>
                    <thead>
                      <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Company</td>
                        <td>Country</td>
                        <td>Finish Date</td>
                        <td>Price</td>
                        <td>Active</td>
                        <td>Activating</td>
                      </tr>
                    </thead>
            <?php 
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    if($row['active'] == 1){
                    }else{
                      $row['active'] = 'inactive';
                      echo"
                      <tbody>
                        <tr '>
                          <td>$row[username]</td>
                          <td>$row[email]</td>
                          <td>$row[company]</td>
                          <td>$row[country]</td>
                          <td>$row[finish_date]</td>
                          <td>$$row[price]</td>
                          <td>$row[active]</td>
                          <td>
                          <form action='upactive.php' method='POST'>
                            <input type='hidden' name='id' value='$row[id]'>
                            <input type='submit' value='activating' class='text-white  w-100 btn btn-success'>
                          </form>
                          </td>
                        </tr>
                      ";
                    }
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
            ?>
              </tbody>
            </table>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
