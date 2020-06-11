<?php
    session_start();
?>
<!Doctype html>
<html>
<head>
    <meta chatset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php
        require './conteo.php';
    ?>
    <h1>Es una pagina para practicar contadores</h1>

    <p>
    <?php
        echo "Visitaste ".S_SESSION['contador']."páginas";
    ?></p>
</body>
</html>