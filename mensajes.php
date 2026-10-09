<?php
require "conexion.php";

$resultado = $conexion->query("SELECT nombre, ciudad, mensaje FROM mensajes WHERE publico = 1 ORDER BY id DESC LIMIT 50");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes - Gracias, Lionel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans:wght@400;500;700&family=Lora:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="barra">
    <div class="barra-marca">
        <div class="numero">10</div>
        <p>Eternamente agradecidos</p>
    </div>
    <nav>
        <a class="boton" href="index.html#gracias">Sumar mi gracias</a>
    </nav>
</header>

<main>
    <div class="mensajes">
        <div class="mensajes-cabecera">
            <div>
                <h2>Mensajes de la hinchada.</h2>
                <p>Lo que cada hincha quiso decirle a Leo.</p>
            </div>
            <a class="boton oscuro" href="index.html#gracias">Escribí el tuyo</a>
        </div>

        <div class="mensajes-lista">
            <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <div class="mensaje">
                    <div class="comillas">“</div>
                    <p class="mensaje-texto"><?php echo htmlspecialchars($fila["mensaje"]); ?></p>
                    <hr>
                    <p class="mensaje-ciudad">De <?php echo htmlspecialchars($fila["ciudad"]); ?></p>
                    <p class="mensaje-autor"><?php echo htmlspecialchars($fila["nombre"]); ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<footer class="pie">
    <div class="barra-marca">
        <div class="numero">10</div>
        <p>Gracias, Capitán</p>
    </div>
    <nav>
        <a href="index.html">El homenaje</a>
        <a href="mensajes.php">Mensajes</a>
        <a href="index.html#gracias">Sumá tu gracias</a>
    </nav>
    <p>☆ ☆ ☆</p>
    <p class="pie-legal">Hecho con cariño argentino.</p>
</footer>

</body>
</html>
<?php $conexion->close(); ?>
