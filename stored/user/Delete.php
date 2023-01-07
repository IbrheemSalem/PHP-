<?php
header("location: Table.php");

$id = $_POST['idproduct'];

include "senddb.php";

try {
    $sql = "DELETE FROM product WHERE id =$id";
    $conn->exec($sql);
    echo "Record deleted successfully";
}catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;