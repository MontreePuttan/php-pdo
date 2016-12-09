<?php


require './connection.php';

$fname = "มนฑาๆ";
$lname = "เทียนทองๆ";

$sql = "insert into users(fname,lname) value(?,?)";
$stm = $con->prepare($sql);
$stm->bindParam("1",$fname);
$stm->bindParam("2",$lname);

try {
    $stm->execute();
    echo "Insert OK";
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}

?>
