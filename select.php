<?php


require './connection.php';



$sql = "select * from users";
$stm = $con->prepare($sql);


try {
    $stm->execute();
    //echo "Insert OK";
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}

while ($row = $stm->fetch(PDO::FETCH_ASSOC)){
    echo "ID : ".$row['id']."<br>";
    echo "Name : ".$row['fname']."<br>";
    echo "Lname : ".$row['lname']."<br>";
    echo "--------------------------------"."<br>";
}
?>
