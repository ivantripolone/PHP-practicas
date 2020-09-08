<?php require_once 'includes/helpers.php'; ?>

<!--Barra lateral -->
<aside id="sidebar">
    
    <?php if(isset($_SESSION['usuario'])): ?>
    <div id="usuario-logueado" class="bloque">
        <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido'];?></h3>
        <!--Botones-->
        <a href="perfil.php" class="boton boton-verde">Mi Perfil</a>
        <a href="crearEntrada.php" class="boton boton-naranja">Crear Entrada</a>
        <a href="crearCategoria.php" class="boton boton-violeta">Crear Categorias</a>
        <a href="cerrarSesion.php" class="boton">Cerrar Sesion</a>
    </div>
    <?php endif;?>
    <?php if(!isset($_SESSION['usuario'])): ?>
    <div id="login" class="bloque">
        
        <h3>Identificate</h3>
        
        <?php if(isset($_SESSION['error_login'])): ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['error_login'];?>
        </div>
        <?php endif;?>
        
        <form action="login.php" method="POST">
            
            <!-- Email -->
            <label for="email">Email</label>
            <input type="text" name="email" id="email"/>
            
            <!-- Contraseña-->
            <label for="password">Conteaseña</label>
            <input type="password" name="pass" id="pass"/>
            
            <!-- Entrar-->
            <input type="submit" value="Entrar" />
        </form>
    </div>
    <div id="registro" class="bloque">
        
        <h3>Registrate</h3>
        
        <form action="registro.php" method="POST">
            <?php if(isset($_SESSION['completo'])):?> 
                <div class="alerta alerta-exito"> <?=$_SESSION['completo'] ?> </div>
            <?php elseif (isset($_SESSION['errores']['general'])):?>
                <div class="alerta alerta-error"> <?= $_SESSION['errores']['general']?></div>
            <?php endif;?> 
            <!-- Nombres -->
            <label for="name">Nombre</label>
            <input type="text" name="name" />
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'nombre') : '';?>
        
            <!-- Apellidos -->
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido"/>              
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'apellidos') : '';?>
            
            <!-- Email -->
            <label for="email">Email</label>
            <input type="text" name="email" />
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'email') : '';?>
            
            <!-- Contraseña-->
            <label for="password">Conteaseña</label>
            <input type="password" name="pass"/>
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'pass') : '';?>
            
            <!-- Registrar-->
            <input type="submit" name="submit" value="Registrarse" />
        
        </form>
    </div>
    <?php endif;?>
    <?php borrarErrores();?>
</aside>