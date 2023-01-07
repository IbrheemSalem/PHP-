<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$connp = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$connp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 