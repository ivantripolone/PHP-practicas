<?php require_once './includes/Cabecera.php'; ?>
<?php require_once './includes/barraLateral.php'; ?>

<!--Cuerpo -->
<div id="principal">
    
    <?php
        $entradas = conseguirEntradas($db, cantDeEntradas($db),'c.id' ,$_GET['id']);
        if ($entradas):
            while ($entrada = mysqli_fetch_assoc($entradas)):
                ?>
                
                        <h1 class="centrar"><?= $entrada['titulo'] ?> </h1>
                        <a href="categoria.php?id=<?= $entrada['categoria_id'] ?>&nombre=<?= $entrada['categoria'] ?>">
                            <h2 class="centrar"><?= $entrada['categoria']?> </h2>
                        </a>
                        <h4 class="centrar"><?=$entrada['fecha'] ?></h4>
                        <p class="centrar"> <?= $entrada['descripcion']?> </p>
                        
      

            <?php endwhile;
        else:
    ?>
        <div class="alerta">No hay entradas en esta categoria.</div>
    <?php 
        endif;
    ?>

    <?php require_once './includes/pieDePagina.php'; ?>



