<!-- Barra lateral-->
<aside id="lateral">
    <!--Formulario de login -->
    <div id="login" class="block_aside">
        <?php if(!isset($_SESSION['identity'])): ?>
        <h3>Entrar a la web</h3>
        <form action="<?php url_base?>usuario/login" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />
            <label for="password">Contraseña</label>
            <input type="password" name="password" />
            <input type="submit" value="Enviar"/>
        </form>
        <?php else: ?>
        <h3><?=$_SESSION['identity']->nombres?> <?=$_SESSION['identity']->apellidos?></h3>
        <?php endif;?>
        <ul>
            <?php if(isset($_SESSION['admin'])): ?>
            <li><a href="">Gestionar pedidos</a></li>
            <li><a href="<?=url_base?>categoria/index">Gestionar categorias</a></li>
            <?php endif;?>
            <?php if(isset($_SESSION['identity'])): ?>
            <li><a href="">Mis pedidos</a></li>
            <li><a href="<?=url_base?>Usuario/logout">Cerrar sesion</a></li>
            <?php else:?>
            <li><a href="<?=url_base?>Usuario/registro">Registrarse</a></li>
            <?php endif;?>
        </ul>
    </div>

</aside>
<!-- contenido central-->
<div id="central">
