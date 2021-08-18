<!DOCTYPE html>

<html>
    <head>
        <title>Remeras Strno </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?=url_base?>assets/css/styles.css"/>
    </head>
    <body>
        <div id="conteiner">
            <!-- Cabecera-->
            <header id="header" >
                <div id="logo">
                    <img src="<?=url_base?>assets/img/camiseta.png" alt="camiseta logo"/>
                    <a href="index.php">Remeras Strno</a>
                </div>
                <div class="clearfix"></div>
            </header>

            <!--Menu -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="<?=url_base?>">Inicio</a>
                    </li>
                    <?php
                    require_once 'models/Category.php';
                    $categorias= new Category();
                    $categorias = $categorias->getAll();
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <li>
                            <a href=""><?= $categoria['name'] ?></a>
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

            <div id="content">