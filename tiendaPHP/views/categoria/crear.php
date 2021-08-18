
<h1>Crear Categoria</h1>
<?PHP
//Comprueba si la categoria se creo con exito.
$crearCategoria = 'crearCategoria';
if (isset($_SESSION[$crearCategoria]) && $_SESSION[$crearCategoria] == 'complete'):?>
    <strong class="alert_green">Categoria creada correcatamente</strong>
<?php elseif (isset($_SESSION[$crearCategoria]) && $_SESSION[$crearCategoria] == 'failed'): ?>
    <strong class="alert_red">La categoria no pudo crearse correctamente</strong>
<?php endif; ?>

<?php
//borra la variable de sesion de la categoria
utils::deleteSession($crearCategoria)
?>
    
<form  action="<?= url_base ?>categoria/save" method="POST">
    <label for="nombre">Nombre de la nueva categoria</label>
    <input type="text" name="nombre" />
    <input type="submit" name="crear" value="Crear" />
</form>