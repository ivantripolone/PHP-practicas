<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/Cabecera.php'; ?>
<?php require_once './includes/barraLateral.php'; ?>

<!--Cuerpo -->
<div id="principal">
    <h1 class="centrar">Mi perfil</h1>
    <form action="modificarDatos.php" method="POST">
        <?php if (isset($_SESSION['completo'])): ?> 
            <div class="alerta alerta-exito"> <?= $_SESSION['completo'] ?> </div>
        <?php elseif (isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error"> <?= $_SESSION['errores']['general'] ?></div>
        <?php endif; ?>
        <!-- Nombres -->
        <label for="name">Modificar Nombre</label>
        <input type="text" name="name" value="<?= $_SESSION['usuario']['nombre']; ?>" placeholder="Ingrese un nuevo Nombre"/>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

        <!-- Apellidos -->
        <label for="apellido">Modificar Apellido</label>
        <input type="text" name="apellido" value="<?= $_SESSION['usuario']['apellido']; ?>" placeholder="Ingrese un nuevo Apellido"/>              
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
        <!-- Email -->
        <label for="email">Email</label>
        <input type="text" name="email" value="<?= $_SESSION['usuario']['email']; ?>" placeholder="Ingrese un nuevo Email" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
        <!-- Registrar-->
        <input type="submit" name="submit" value="Modificar" />

    </form> 
    <?php borrarErrores(); ?>
</div>
<?php require_once './includes/pieDePagina.php'; ?>
        