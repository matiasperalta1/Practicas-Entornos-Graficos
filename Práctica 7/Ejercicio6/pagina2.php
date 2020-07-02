<?php
session_start();
?>
<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    include("conexion.php");
    $mail = $_POST['mail'];
    $vSql = "select * FROM alumnos WHERE mail ='$mail' ";
    $vResultado = mysqli_query($connection, $vSql) or die(mysqli_error($connection));
    $fila = mysqli_fetch_array($vResultado);
    if (mysqli_num_rows($vResultado) == 0) {
        echo ("No existe un usuario con ese mail <br>");?>
        <a href="index.html">Intente nuevamente</a> <?php
    } else {
        $_SESSION['usuario'] = $fila['nombre'];?>
        <a href="pagina3.php">Ingresar a pagina principal</a> <?php
    }
    ?>
    
</body>

</html>