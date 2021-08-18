
<h1>Borrar Categoria</h1>

<form  action="<?= url_base ?>categoria/delete" method="POST">
    <label for="nombre">Nombre de la categoria</label>
    <input type="text" name="nombre" required/>
    <label for="id">id de la categoria</label>
    <input type="text" name="id" required/>
    <input type="submit" name="Borrar" value="Borrar" />
</form>