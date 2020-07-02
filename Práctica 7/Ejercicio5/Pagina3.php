<?php
    session_start();
?>
<h1>Variables</h1>
<p>Username: <?php echo $_SESSION['username']?></p>
<p>Password: <?php echo $_SESSION['password']?></p>

<a href="Principal.php">Volver a la pagina principal</a>