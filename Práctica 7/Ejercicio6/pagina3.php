<?php
session_start();
?>
<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    if (isset($_SESSION['usuario'])) {
        echo "Bienvenido a la página " . $_SESSION['usuario'];
        ?>
        <a href="index.html">Ingresar con otro mail</a> <?php
    } else {
        echo "No tiene permitido visitar esta página.";
    }
    session_destroy();
    ?>
</body>
</html>