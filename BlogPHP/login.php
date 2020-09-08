º<?php

//Iniciar sesion y conectar a la bd.
require_once './includes/conexion.php';

if (isset($_POST)) {
//Recojer datos del formulario
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $pass = mysqli_real_escape_string($db, $_POST['pass']);

//consulata a bd para comprobar credenciales
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    $_SESSION['asd']= 0;
    if ($login) {
        $usuario = mysqli_fetch_assoc($login);
        
        $verify = password_verify($pass, $usuario['password']);
        
        //comprobar contraseña
        if ($verify) {
            //utilizar sesion para guardar datos del usuario logeado
            $_SESSION['usuario'] = $usuario;
            
            
            if (isset($_SESSION['error_login'])) {
                unset($_SESSION['error_login']);
            }
            
        } else {
            //si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "Login incorrecto";
            
        }
        
    } else {
        //manejar error usuario no encontrado en bd.
        $_SESSION['error_login'] = "Login incorrecto";
    }
    
}
//redirigir a index.php

header('Location: index.php');
?>
