<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Blog en PHP</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    </head>
    <body>
        <!--Cabecera -->
        <header id="cabecera">
            <!--Logo -->
            <div id="logo">
                <a href="index.php">
                    Blog de video juegos
                </a>
            </div>
            <!--Menu -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <?php
                    $categorias = conseguirCategoria($db);
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <li>
                            <a href="categoria.php?id=<?= $categoria['id'] ?>&nombre=<?= $categoria['nombre'] ?>"><?= $categoria['nombre'] ?></a>
                        </li>
                    <?php endwhile; ?>

                    <li>
                        <a href="index.php">Sobre mi</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul> 
            </nav>
            <div class="clearfix"></div>

        </header>
        <div id="contenedor">