<?php
    if(isset($_POST['share']))
    {
      
        $name= $_POST['name'];
        $from= $_POST['email'];
        $to = "matias_peralta1@hotmail.com";
        $message= "Te recomiendo que veas la siguiente pagina: www.google.com"; ///imaginando que google es la pagina desde la que se está mandando el mail
        $subject= "Mira esta página";
        

        $headers="MIME-Version:1.0\r\n";
        $headers="Content-type:text/html; charset=iso-8859-1\r\n";
        $headers.= "From: ".$from. "\r\n";
        $headers.= "Reply-To: matias_peralta1@hotmail.com\r\n";
        $headers.= "Cc: peraltamatias905214@gmail.com"; ///Pruebo copias

        mail($to, $subject, $message, $additional_headers = null , $additional_parameters= null);
        

    }
?>