<?php
setcookie("noticia","",time()-3600);
echo "Cookie borrada correctamente";
echo "<a href = 'Principal.php'>Volver a la página inicial</a>";