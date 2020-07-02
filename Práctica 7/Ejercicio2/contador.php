<?php
    if ( isset( $_COOKIE[ 'contador' ] ) ) {  //Verificamos si es la primera vez o no que entra al sitio web
        setcookie( 'contador', $_COOKIE[ 'contador' ] + 1, time() + 60*60*24*365 );
        $mensaje = 'Usted ha visitado '.$_COOKIE[ 'contador' ].' vez/veces este sitio web';
    }
    else {
        setcookie( 'contador', 1, time() + 60*60*24*365 );
        $mensaje = 'Bienvenido a nuestro sitio web';
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador con Cookies</title>
</head>
    <body>
        <h2 id="mostrar">
           <?php echo $mensaje;?>
        </h2>
    </body>
</html>