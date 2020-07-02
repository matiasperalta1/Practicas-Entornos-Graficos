<?php
    $hostname = 'localhost';
    $user = 'root@localhost';
    $password = 'root';
    $db = 'prueba';


    $connection = mysqli_connect($GLOBALS['hostname'],$GLOBALS['password'],$GLOBALS['user'],$GLOBALS['db']);
    mysqli_select_db($connection,$GLOBALS['db']);


?>