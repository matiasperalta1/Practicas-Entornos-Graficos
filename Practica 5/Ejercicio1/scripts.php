<?php

    $to = "matias_peralta1@hotmail.com";
    $subject = "Ejercicio 1";
    $from = "peraltamatias905214@gmail.com";
    $message = "Es una prueba de envio de email";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $headers .= "From: ".$from."\r\n";
    $headers .= "Reply-To: " .$to."\r\n";

    ///$headers .= "Cc: copia@gmail.com\r\n";
    ///En caso que haya que mandar copias

    ///$headers .= "Bcc: copiaoculta@gmail.com\r\n";
    ///En caso que haya que mandar copias ocultas

    mail($to,$subject,$message,$headers);
?>