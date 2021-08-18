
<h1>Crear Categoria</h1>
    
<form  action="<?= url_base ?>categoria/update" method="POST">
    <label for="nombre">Nombre de la categoria</label>
    <input type="text" name="nombre" required/>
    <label for="id">Id de la categoria</label>
    <input type="text" name="id" required/>
    <label for="nuevo">Nuevo Nombre de la categoria</label>
    <input type="text" name="nuevo" required/>
    <input type="submit" name="modificar" value="Modificar" />
</form>