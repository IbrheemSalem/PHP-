<?php
header("location: Table.php");
$id = $_POST['id'];
$name = $_POST['Productname'];
$Price = $_POST['Price'];
$Description = $_POST['Description'];
########################
$img = $_FILES['Uploadimg'];
$imgname = $_FILES['Uploadimg']['name'];
$tmp_name = $_FILES['Uploadimg']['tmp_name'];

move_uploaded_file($tmp_name, "imgs/up/".$imgname);

    try {
        include "senddb.php";
        $sql = "UPDATE product SET product_name='$name', product_price='$Price', product_description='$Description', product_img='$imgname' WHERE id =$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount() . " records UPDATED successfully";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
    
    $conn = null;
    ?>
