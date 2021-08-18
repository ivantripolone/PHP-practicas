<h1>Registrarse</h1>

<?PHP
//Comprueba si el registro se realizo con exito.
$register='register';
if(isset($_SESSION[$register])&& $_SESSION[$register]== 'complete'): ?>
<strong class="alert_green">Registro completo correcatamente</strong>
<?php elseif(isset($_SESSION[$register])&& $_SESSION[$register]== 'failed'):?>
<strong class="alert_red">Registro fallido</strong>
<?php endif;?>

<?php
//borra la variable de sesion del registro
    utils::deleteSession($register)
?>

 <!--Formulario de Registro -->
<form action="<?=url_base?>usuario/save" method="POST">
    <label for="nombre">Nombres</label>
    <input type="text" name="nombre" required />
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" required />
    <label for="email">Email</label>
    <input type="email" name="email" required />
    <label for="password">Contraseña</label>
    <input type="password" name="password" required />
    <input type="submit" name="registrarse" value="Registrarse" />
</form>
 