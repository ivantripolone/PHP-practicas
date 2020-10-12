<?php

if (isset($_POST)) {
    // session_start();
    require_once './includes/conexion.php';
    $nombre = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;
    $apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db, $_POST['apellido']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $usuarioID = $_SESSION['usuario']['id'];
    //array de errores
    $errores = array();
    //validar los datos antes de guardarlos en db
    //validando nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = 'el nombre no es valido';
    }
    //validando apellido
    if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = 'el apellido no es valido';
    }
    //validando email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = 'el email no es valido';
    }

    if (count($errores) == 0) {
        $sql = "UPDATE usuarios SET nombre = '$nombre' , apellido = '$apellido', email = '$email' WHERE usuarios.id = $usuarioID;";
        $guardar = mysqli_query($db, $sql);

        if ($guardar) {
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellido'] = $apellido;
            $_SESSION['usuario']['email'] = $email;
            $_SESSION['completo'] = "el usuario se ha actualizado con exito";
        } else {
            $_SESSION['errores']['general'] = "Fallo al actualizar el usuario";
        }
    } else {

        $_SESSION['errores'] = $errores;
    }
    header('Location: perfil.php');
}