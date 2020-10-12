<?php require_once './includes/Cabecera.php'; ?>
<?php require_once './includes/barraLateral.php'; ?>

<!--Cuerpo -->
<div id="principal">
    <h1 class="centrar">Todas las entradas</h1>
    <?php
    $entradas = conseguirEntradas($db, cantDeEntradas($db));
    while ($entrada = mysqli_fetch_assoc($entradas)):
        ?>

        <a href="entrada.php?id=<?= $entrada['id'] ?>"> 
            <article class="entrada">
                <h2><?= $entrada['titulo'] ?> </h2>
                <span class="info"><?= $entrada['categoria'] . ' | ' . $entrada['fecha'] ?> </span>
                <p> <?= substr($entrada['descripcion'], 0 , 200) . '...' ?>  </p>

            </article>
        </a>

    <?php endwhile; ?>


    <?php require_once './includes/pieDePagina.php'; ?>


