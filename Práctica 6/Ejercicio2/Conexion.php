<?php
    $hostname = 'localhost';
    $user = 'root@localhost';
    $password = 'root';
    $db = 'capitales';

    function getCiudades (){
        $connection = mysqli_connect($GLOBALS['hostname'],$GLOBALS['password'],$GLOBALS['user'],$GLOBALS['db']);
        if(mysqli_select_db($connection,$GLOBALS['db'])){
            $query = 'Select * from ciudades';
            $result = $connection -> query($query) or die($connection->error);
            $connection->close();
            return $result;
        }
        else {
            throw new Exception ('Error al conectar con la base de datos');
        }
    }

?>