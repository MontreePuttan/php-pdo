<?php

$dbc = 'mysql:host=localhost;dbname=php-pdo';
$user = 'root';
$pass = 'mohara';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);

try {
    $con = new PDO($dbc, $user, $pass, $options);
    //echo "Connect OK";
} catch (Exception $ex) {
    echo "Connect Fail : ".$ex->getMessage();
}
?>
