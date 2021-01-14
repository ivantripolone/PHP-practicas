<?php require_once './includes/Cabecera.php'; ?>
<?php require_once './includes/barraLateral.php'; ?>

<!--Cuerpo -->
<div id="principal">
    
    <?php
        $entrada = mysqli_fetch_assoc(conseguirEntradas($db, cantDeEntradas($db),'c.id' ,$_GET['id']));
        $id=$entrada['id'];
        if (!isset($entrada['id'])){
            header("Location: index.php");
        }
    ?>
     
                
    <h1 class="centrar"><?= $entrada['titulo'] ?> </h1>
    <a href="categoria.php?id=<?= $entrada['categoria_id'] ?>&nombre=<?= $entrada['categoria'] ?>">
        <h2 class="centrar"><?= $entrada['categoria']?> </h2>
    </a>
    <h4 class="centrar"><?=$entrada['fecha'] ?></h4>
    <p class="centrar"> <?= $entrada['descripcion']?> </p>
    
    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada['usuario_id']): ?>
        <a href="editarEntrada.php?id=<?=$_GET['id']?>" class="boton boton-naranja">Editar Entrada</a>
        <a href="borrarEntrada.php?id=<?=$_GET['id']?>" class="boton boton-violeta">Borrar Entrada</a>
                
   <?php endif ?> 
        
    <?php require_once './includes/pieDePagina.php'; ?>



