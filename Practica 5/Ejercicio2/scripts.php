<?php
    if(isset($_POST['send']))
    {
      
        $name= $_POST['name'];
        $from= $_POST['email'];
        $to = "matias_peralta1@hotmail.com";
        $message= $_POST['comment'];
        $subject= "Consultas practica 5";
        

        $headers="MIME-Version:1.0\r\n";
        $headers="Content-type:text/html; charset=iso-8859-1\r\n";
        $headers.= "From: ".$from. "\r\n";
        $headers.= "Reply-To: matias_peralta1@hotmail.com\r\n";
        $headers.= "Cc: peraltamatias905214@gmail.com"; ///Pruebo copias

        mail($to, $subject, $message, $additional_headers = null , $additional_parameters= null);
        

    }
?>