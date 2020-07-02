<?php
    $hostname = 'localhost';
    $user = 'root@localhost';
    $password = 'root';
    $db = 'base2';


    $connection = mysqli_connect($GLOBALS['hostname'],$GLOBALS['password'],$GLOBALS['user'],$GLOBALS['db']);
    mysqli_select_db($connection,$GLOBALS['db']);


?>