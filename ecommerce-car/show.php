<?php
include 'session.php';
include 'data/server.php';
$brekcounr = "";
$correct = "";
if(isset($_POST['submitcard'])){

    #$id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    try {
        $sql = "INSERT INTO addcard (name_card, description_card, price_card, img, email_add)
        VALUES ('$name', '$description', '$price', '$img', '$email')";
        $conn->exec($sql);
        
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>show</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <?php
            if(isset($_SESSION['user'])){
                echo "<h2 class='m-0 text-primary'><i class='fa fa-car me-3'></i>$name</h2>";
            }else{
                echo "<h2 class='m-0 text-primary'><i class='fa fa-car me-3'></i>Car</h2>";
            }
            ?>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <?php
                    echo "<a href='show.php' class='nav-item nav-link active'><i class='fa-solid fa-cart-shopping'></i></a>";
                ?>
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="shop.php" class="nav-item nav-link">shop</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.php" class="dropdown-item">Booking</a>
                        <a href="team.php" class="dropdown-item">Technicians</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <?php
            if(isset($_SESSION['user'])){
                echo "
                <form action='' method='post'>
                    <button type='submit' name='Logout' class='btn btn-outline-danger me-4'>Log out</button>
                </form>
                ";
            }else{
                echo "<a href='login-registration/index.php' target='_blank' class='btn btn-primary py-4 px-lg-5 d-none d-lg-block'>log in<i class='fa fa-arrow-right ms-3'></i></a>";
            }
            ?>
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="container d-flex justify-content-center">
        <div class="m-4 w-75">
        <table class="table text-center mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">price</th>
                    <th scope="col">Imges</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <?php
                $count = 0;
                $totolprice = 0;
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql2 = "SELECT * FROM addcard WHERE email_add='$email'";
                $result = $conn->query($sql2);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ++$count;
                        $totolprice +=$row['price_card'];
                        echo "
                        <tbody>
                            <tr>
                                <td>$count</td>
                                <td>$row[name_card]</td>
                                <td>$row[description_card]</td>
                                <td>$row[price_card]</td>
                                <td><img src='img/up/$row[img]' style='width:50px;'></td>
                                <td>
                                    <form action='' method='post'>
                                        <input type='hidden' name='iddele' value='$row[id]'>
                                        <button type='submit' name='deletecard'class='btn btn-danger'>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>     
                        ";
                    }    
                    echo "<p>The number of orders : $count</p>";
                    echo "<p>Total price : $totolprice</p>";
                }else{
                    echo "0 results";
                }
                $brekcounr = $count;
                $conn->close();
                ?>
        </table>
        <?php
if(isset($_POST['deletecard'])){
    $id= $_POST['iddele'];
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM addcard WHERE id=$id";
        $conn->exec($sql);
        echo "
        <div class='alert alert-success text-center' role='alert'>
            Record deleted successfully
        </div>
        ";
    } catch(PDOException $e) {
        echo "
        <div class='alert alert-danger text-center' role='alert'>
            Record deleted successfully
        </div>
        ";
    }
    $conn = null;
}
?>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
