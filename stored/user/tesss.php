<?php
echo sha1("ebrheem");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
if(isset($_POST['submit'])){
    $sql = $conn->prepare("SELECT * FROM show_product WHERE product_name LIKE :value");
    $searVlue = "%".$_POST['search']."%";
    $sql->bindParam("value", $searVlue);
    $sql->execute();
 

    foreach($sql as $val){
        echo $val['product_id'] ."<br>";
        echo $val['product_name']."<br>";
        echo $val['product_price']."<br>";
        echo $val['product_description']."<br>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <h2>My Customers</h2>
    <form method="post" action="">
        <input type="text" name="search">
        <input type="submit" name="submit">
    </form action="post">

</body>
</html>
