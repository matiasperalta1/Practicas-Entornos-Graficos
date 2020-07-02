<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
<?php
include("conexion.php");
$letras = $_POST['Letras'];
if ($letras) {
$resp = mysqli_query($connection, "select * FROM buscador WHERE canciones LIKE '%" . $letras . "%'") or die('Se produjo un error dentro de la busqueda');
if (mysqli_num_rows($resp) == "0") {
    echo "No hay resultados.";
} else {
    echo "RESULTADOS: <br>";
    while ($cat = mysqli_fetch_array($resp)) { ?>
        <td><?php echo ($cat['canciones']); ?></td></br>
        <tr>
            <td colspan="5">
                

    <?php   }
}
} else {
echo "Campo vacio";
} ?>
<p><a href="Principal.html">Volver a página principal</a></p>
</body>

</html>