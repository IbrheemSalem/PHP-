<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$id = $_POST['id'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE users SET active=1 WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;