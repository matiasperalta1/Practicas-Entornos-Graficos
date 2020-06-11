<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 6</title>
</head>
<body>
    <?php
        require './Conexion.php';
        require './datos.php';
    ?>

<div class="table">
    <form action="datos.php" method="post">
        <table>
            <tr>
                <th>&nbsp;</th>
                <th>ID</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Habitantes</th>
                <th>Superficie</th>
                <th>Tiene Metro</th>
            </tr>
        <?php
                $result = getCiudades();
                while ($row = $result->fetch_assoc()) {
        echo '<tr>';
            echo "<td><input type='radio' name='group' id='row' value='".$row['id']."'></td>";
                foreach($row as $cell){
        ?>
            <td><?php echo $cell; ?></td>
            <?php                
                }
            ?>
        </tr>
        <?php        
                }
            mysqli_free_result($result);
        ?>
        <tfoot>
            <tr>
                <td><button class="primaryButton" name="editButton">Editar</button></td>
                <td><button class="primaryButton" name="addButton">Añadir</button></td>
                <td><button class="primaryButton" name="deleteButton">Eliminar</button></td>
            </tr>
            </tfoot>
        </table>
    </form>
</div>
</body>
</html>