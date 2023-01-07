<?php
    header("location:../not.html");

if(isset($_POST['submit'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "upimg";
    

    $error_array = [];

    $img = $_FILES['file'];
    $imgname = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    $size = $_FILES['file']['size'];

    /*
    echo "<pre>";
        print_r($img);
    echo "</pre>";
    */
    #move_uploaded_file($tmp_name,  $_SERVER['DOCUMENT_ROOT'] . /img/up');


    if(empty($error_array)){
        
        move_uploaded_file($tmp_name, 'C:\xampp\htdocs\form\user\imgs\up\\' . $imgname);
        $imsstr = implode("", $img);

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO product (img)
            VALUES ('$imsstr')";
            // use exec() because no results are returned
            $conn->exec($sql);
           # echo "New record created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          
          $conn = null;
    /*
    }else{ 

        foreach($error_array as $error) :
            echo $error;
        endforeach;
    }
    */
}
}

















?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" name="submit">
</form>