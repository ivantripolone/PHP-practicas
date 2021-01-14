<?php require_once './includes/redireccion.php'; ?>
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

    
    <!--Cuerpo -->
    <div id="principal">
    <h1>Editar Entrada</h1>
    <div class="form">
        <form  action="guardarEntrada.php?editar=<?=$_GET['id']?>" method="POST">
            <label for="titulo">Titulo de Entrada:</label>
            <input type="text" name="titulo" value="<?= $entrada['titulo'] ?>"/>
            <?php echo isset($_SESSION['erroresEntrada']) ? mostrarError($_SESSION['erroresEntrada'], 'titulo') : ''; ?>
            <label for="descripcion">Descripcion de Entrada:</label>
            <textarea name="descripcion"><?= $entrada['descripcion'] ?></textarea>
            <?php echo isset($_SESSION['erroresEntrada']) ? mostrarError($_SESSION['erroresEntrada'], 'descripcion') : ''; ?>
            <label for="categoria">Categorias:</label>

            <select class="select-css" name="categoria">
                <?php
                $categorias = conseguirCategoria($db);
                if (!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <option value="<?= $categoria['id'] ?>" <?= ($categoria['id'] == $entrada['categoria_id']) ? 'selected="selected"' : ''?> > <?= $categoria['nombre'] ?></option>

                        <?php
                    endwhile;
                endif;
                ?>

            </select>
            <?php echo isset($_SESSION['erroresEntrada']) ? mostrarError($_SESSION['erroresEntrada'], 'categoria') : ''; ?>
            <input type="submit" value="Editar" name="editar" />

            <?php
            borrarErrores()
            ?>
        </form>
    </div>

</div>
 <!-- Fin Cuerpo -->
    
    
    <?php require_once './includes/pieDePagina.php'; ?>


