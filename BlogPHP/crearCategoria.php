<?php require_once './includes/redireccion.php';?>
<?php require_once './includes/Cabecera.php'; ?>
<?php require_once './includes/barraLateral.php'; ?>



<!--Cuerpo -->
<div id="principal">
    <h1>Crear Categorias</h1>
    <div class="form">
        <form  action="guardarCategoria.php" method="POST">
            <label>Nombre de Categoria</label>
            <input type="text" name="nombre" placeholder="Ingrese un nombre para crear una categoria nueva"/>

            <input type="submit" value="Crear" name="crear" />
        </form>
    </div>
</div>


<?php require_once './includes/pieDePagina.php'; ?>