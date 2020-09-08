<?php require_once './includes/Cabecera.php'; ?>

<?php require_once './includes/barraLateral.php'; ?>

<!--Cuerpo -->
<div id="principal">
    <h1>Ultimas entradas</h1>
    <?php 
        $entradas= conseguirEntradas($db);
        while ($entrada= mysqli_fetch_assoc($entradas)):
    ?>
    <a href="entrada.php?id=<?=$entrada['id']?>"> 
        <article class="entrada">
            <h2><?=$entrada['titulo']?> </h2>
            <span class="info"><?=$entrada['categoria'] .' | '. $entrada['fecha']?> </span>
            <p> <?= substr($entrada['descripcion'], 1, 200).'...'?> </p>
            
        </article>
    </a>
    
    <?php endwhile;?>
    <div id="ver-todas">
        <a href="">Ver todas las entradas</a>
    </div>
</div>


<?php require_once './includes/pieDePagina.php'; ?>
        