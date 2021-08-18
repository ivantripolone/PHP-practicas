<h1>Gestionar categorias</h1>

<a href="<?=url_base?>categoria/crear" class="button button-small">Crear categoria</a>
<a href="<?=url_base?>categoria/borrar" class="button button-small">Borrar categoria</a>
<a href="<?=url_base?>categoria/modificar" class="button button-small">Modificar categoria</a>
<table>
    <tr>
        <th> Id </th>
        <th> Nombre </th>
    </tr>
    <?php while ($cat = $categorias->fetch_object()) : ?>
        <tr>
            <td> <?= $cat->category_id; ?> </td>
            <td> <?= $cat->name; ?> </td>    
        </tr>
    <?php endwhile; ?>
</table>

