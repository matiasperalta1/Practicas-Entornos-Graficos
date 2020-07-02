<?php
if (isset($_POST["noticia"])) {
    echo "<meta http-equiv='refresh' content='0'>";
    $noticia = $_POST["noticia"];
    setcookie("noticia", $noticia, time() + (60 * 60 * 24 * 365));
} else {
    if (isset($_COOKIE["noticia"])) {
        $noticia = $_COOKIE["noticia"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <p>NOTICIAS</p>
<div class="formulario">
            <p>Seleccione que tipo de noticias son de su preferencia</p>
            <br />
            <form action="Principal.php" method="post" id="noticia">
                <input type="radio" name="noticia" value="politicas" id="politicas" /><label> Noticias políticas</label>
                <input type="radio" name="noticia" value="economicas" id="economicas" /><label> Noticias económicas</label>
                <input type="radio" name="noticia" value="deportivas" id="deportivas" /><label> Noticias deportivas</label><br /><br />
                <div class="submit">
                    <input type="submit" value="Aceptar" />
                </div>
            </form>

        </div>
    <?php if (isset($_COOKIE["noticia"])) {
        echo "<h1>Noticias ", $noticia, "</h1>";
        echo "<a href='borrarCookie.php'> Borrar cookie</a>";
    } ;?>
</body>
</html>

