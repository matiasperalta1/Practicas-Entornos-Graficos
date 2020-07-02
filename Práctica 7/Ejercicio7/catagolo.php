<?php
ob_start("ob_gzhandler");
session_start();
$carrito = mysqli_connect("localhost","root@localhost",'root');
mysqli_select_db($carrito,'Compras');

if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;

$qry=mysqli_query($carrito,"select * from catalogo order by producto asc");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <style>
        .catalogo {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 9px;
            color: #333333;
        }
    </style>
</head>
<body>
    <table width="272" align="center" cellpadding="0" cellspacing="0" style="border: 1px
        solid #000000;">
    <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo">
        <td width="170"><strong>Producto</strong></td>
        <td width="77"><strong>Precio</strong></td>
        <td width="25" align="right"><a href="verCarrito.php?<?php echo SID ?>"
        title="Ver el contenido del carrito"></a></td>
    </tr> 
 <?php 
  while($row=mysqli_fetch_assoc($qry)){
    ?>
    <tr valign="middle" class="catalogo">
    <td><?php echo $row['producto'] ?></td>
    <td><?php echo $row['precio'] ?></td>
    <td align="center"><?php
    if(!$carro || !isset($carro[md5($row['id'])]['identificador']) ||
   $carro[md5($row['id'])]['identificador']!=md5($row['id'])){
    ?><a href="agregarCar.php?<?php echo SID ?>&id=<?php echo $row['id'];
    ?>"></a><?php }
     else 
     {?><a href="borrarCar.php?<?php echo SID ?>&id=<?php echo $row['id'];
        ?>"></a><?php
        } ?></td>
         </tr><?php } ?>
    </table>
    
</body>
</html>
<?php
ob_end_flush();
?> 