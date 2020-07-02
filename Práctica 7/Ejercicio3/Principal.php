
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtmal1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <title>Cookies en PHP</title>

</head>
<body>
    <?php
        if(isset($_POST['username'])){
            setcookie('username', $_POST['username'], time()+(60*60*24*365));
            echo "<meta http-equiv='refresh' content='0'>";
        }
        if(isset($_COOKIE['username'])){
    ?>
    <p>
        A continuación ingrese su nombre:
    </p>
    <form action="Principal.php" >
        <label style="padding: 15px;"> <b>Nombre:</b> <input type="text" name="nombre"></label><br/><br/>
        <input type="submit" value="Ingresar">
    </form>
    <?php
    } else {
        ?>
    <form action="Principal.php" >
        <label style="padding: 15px;"> <b>Nombre:</b> <input type="text" name="nombre"></label><br/><br/>
        <input type="submit" value="Ingresar">
    </form>
        <?php
        }
        ?>
</body>
</htlm>
