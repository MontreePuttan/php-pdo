<?php


require './connection.php';

$fname = "มนฑาๆ";
$lname = "เทียนทองๆ";


//$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = "insert into users(fname,lname) value(:p1,:p2)";
$stm = $con->prepare($sql);
$stm->bindParam(':p1',$fname);
$stm->bindParam(':p2',$lname);

try {
    $stm->execute();
    echo "Insert OK";
} catch (Exception $ex) {
    echo $ex->getTraceAsString();
}

?>
