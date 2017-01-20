<?php
include ("includes/abrirbd.php");

$sql = "SELECT * FROM productos";

if (!$resultado = mysqli_query($link, $sql)) {
    header("Location:error.html");
    exit;
}
?>
<html>
    <head> 
        <title> Lista Productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
    <center>
        <?php
        echo "<h2> LISTA DE PRODUCTOS </h2> <BR><BR>";
        while ($prod = mysqli_fetch_assoc($resultado)) {
            echo "<A href = ver.php?id={$prod['id']}>{$prod['nombre']}</A><br><br>";
        }
        mysqli_free_result($resultado);
        mysqli_close($link);
        ?>
        <br>
        <hr><br><br>
        <a href="download.php?type=1"> Forma de pago </a><br><br>
        <a href="download.php?type=2"> Forma de envio </a>
    </center>	

</body>
</html>