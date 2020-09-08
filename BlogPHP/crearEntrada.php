<?php require_once './includes/redireccion.php';?>
<?php require_once './includes/Cabecera.php'; ?>
<?php require_once './includes/barraLateral.php'; ?>



<!--Cuerpo -->
<div id="principal">
    <h1>Crear Entradas</h1>
    <div class="form">
        <form  action="guardarEntrada.php" method="POST">
            <label for="titulo">Titulo de Entrada:</label>
            <input type="text" name="titulo" placeholder="Ingrese el titulo de su entrada nueva"/>
            <label for="descripcion">Descripcion de Entrada:</label>
            <textarea name="descripcion" placeholder="Ingrese la descripcion de su entrada nueva"></textarea>
            <label for="categoria">Categorias:</label>
            
            <select class="select-css" name="categoria">
                <?php 
                    $categorias= conseguirCategoria($db);
                    if(!empty($categorias)):
                        while ($categoria= mysqli_fetch_assoc($categorias)):
                ?>
                <option value="<?=$categoria['id']?>"><?= $categoria['nombre']?></option>
                     
                <?php   
                        endwhile;
                    endif;
                ?>
                
            </select>
            <input type="submit" value="Crear" name="crear" />
            
        </form>
    </div>
</div>


<?php require_once './includes/pieDePagina.php'; ?>
