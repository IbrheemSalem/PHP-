<?php

include 'data/server.php';

if(isset($_POST['s'])){
    $key = "%{$_POST['s']}%";
    $sql = "SELECT * FROM product WHERE name LIKE '$key' LIMIT 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $result = $stmt->fetchAll();
        foreach($result as $resul){
            ?>
            <li class="list-group-item ">
                <a href="#"><?=$resul['name']?></a>
            </li>
            <?php
        }
    }else echo "not found";
}
