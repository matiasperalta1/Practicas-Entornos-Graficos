<?php 
    if(isset($_POST['session'])){
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
?>
<p>Variabres almacenadas correctamente</p>
<?php
    }
?>
<a href="Principal.php">Volver a la pagina principal</a>
