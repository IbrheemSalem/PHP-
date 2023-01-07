<?php
include 'server.php';

if(isset($_POST['submit'])){
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$img = $_FILES['img'];
$imgname = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name, "../img/up/".$imgname);

    try {
        $sql = "UPDATE product SET name='$name',description='$description',price='$price',img='$imgname' WHERE id='$id'";
        $stmt = $connp->prepare($sql);
        $stmt->execute();
            echo $stmt->rowCount() . " records UPDATED successfully";
        header('location: table-pro.php');
    } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
    }
    $connp = null;
}

if(isset($_POST['dele'])){
    $id = $_POST['id'];
    try {
        $sql = "DELETE FROM product WHERE id='$id'";
        $connp->exec($sql);
        echo "Record deleted successfully";
        header('location: table-pro.php');
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $connp = null;
}

if(isset($_POST['deleser'])){
    $id = $_POST['id'];
    try {
        $sql = "DELETE FROM services WHERE id='$id'";
        $connp->exec($sql);
        echo "Record deleted successfully";
        header('location: mes-req.php');
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $connp = null;
}

if(isset($_POST['delecat'])){
    $id = $_POST['id'];
    try {
        $sql = "DELETE FROM catalog WHERE id='$id'";
        $connp->exec($sql);
        echo "Record deleted successfully";
        header('location: mes-req.php');
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $connp = null;
}

if(isset($_POST['delecon'])){
    $id = $_POST['id'];
    try {
        $sql = "DELETE FROM catalog WHERE id='$id'";
        $connp->exec($sql);
        echo "Record deleted successfully";
        header('location: mes-req.php');
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $connp = null;
}
