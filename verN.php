<?php
include ("includes/abrirbd.php");

if (array_key_exists('nombre', $_GET) && is_string($_GET['nombre'])
    && (preg_match('/^[A-z0-9-_\s]+$/', $_GET['nombre']) === 1)) {
    $nombre = mysqli_real_escape_string($link, $_GET['nombre']);
    $sql    = "SELECT * FROM productos WHERE nombre ='{$nombre}'";

    if (!$resultado = mysqli_query($link, $sql)) {
        header("Location:error.html");
        exit;
    }
}
?>
<html>
    <head> 
        <title> Ver Productos </title>
        <meta charset="UTF-8">
    </head>
    <body>
    <center>
        <?php
        if (isset($resultado) && mysqli_num_rows($resultado) > 0) {
            echo "<table>";
            while ($prod = mysqli_fetch_assoc($resultado)) {
                echo "<tr><td><img src='Imagenes/{$prod['imagen']}.jpg' width=100 height=200></td>";
                echo "<td> precio={$prod['precio']}<br>talla={$prod['talla']}</td></tr>";
            }
            echo "</table>";
        } else {
            echo 'Producto incorrecto';
        }

        mysqli_close($link);
        ?>
    </body>
</html>