<h1>Registrarse</h1>
<?PHP
$register='register';
if(isset($_SESSION[$register])&& $_SESSION[$register]== 'complete'): ?>
<strong class="complete">Registro completo correcatamente</strong>
<?php elseif(isset($_SESSION[$register])&& $_SESSION[$register]== 'failed'):?>
<strong class="failed">Registro fallido</strong>
<?php endif;?>
<?php utils::deleteSession($register)?>

 
<form action="<?=url_base?>usuario/save" method="POST">
    <label for="nombre">Nombres</label>
    <input type="text" name="nombre" required />
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" required />
    <label for="email">Email</label>
    <input type="email" name="email" required />
    <label for="password">Contraseña</label>
    <input type="password" name="password" required />
    <input type="submit" name="registrarse" />
</form>