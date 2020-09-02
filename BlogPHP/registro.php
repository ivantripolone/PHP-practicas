<?php 
if(isset($_POST)) {
    //Conexion con la base de datos
    require_once './includes/conexion.php';
    
    //Recojer formulario de registro
    $nombre= isset($_POST['name'])? mysqli_real_escape_string($db,$_POST['name']):false ;
    $apellidos= isset($_POST['apellido'])? mysqli_real_escape_string($db,$_POST['apellido']):false;
    $email= isset($_POST['email'])? mysqli_real_escape_string($db,trim($_POST['email'])):false;
    $pass=isset($_POST['pass'])? mysqli_real_escape_string($db,$_POST['pass']):false;
    
    //array de errores
    $errores= array();
    
    //validar los datos antes de guardarlos en db
    
    //validando nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado= true;
    }else{
        $nombre_validado= false;
        $errores['nombre']= 'el nombre no es valido';
    }
    //validando apellido
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado= true;
    }else{
        $apellidos_validado= false;
        $errores['apellidos']= 'el apellido no es valido';
    }
    
    //validando email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado= true;
    }else{
        $email_validado= false;
        $errores['email']= 'el email no es valido';
    }
    
    //validando password
    if(!empty($pass) && preg_match("/[0-9]/", $pass) && preg_match("/[a-zA-Z]/", $pass) && strlen($pass) >= 4){
        $pass_validado= true;
    }else{
        $pass_validado= false;
        $errores['pass']= 'la contraseña no es valida';
    }
    
    $guardar_usuario= false;
    if(count($errores) == 0){
        $guardar_usuario= true;
        //cifrar contraseña
        $pass_segura= password_hash($pass, PASSWORD_BCRYPT , ['cost' => 4]);
        
        $sql= "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$pass_segura', CURDATE())";
        
        //insertar datos del usuario en la tabla de usuarios en la base de datos.
        $guardar= mysqli_query($db, $sql);
        if($guardar){
            $_SESSION['completo']= "el usuario se ha registrado con exito";
        } else {
            $_SESSION['errores']['general']= "Fallo al guardar usuario";
        }
        
    } else {
        //manejar los errores
        $_SESSION['errores']=$errores;
        
    }
    
    

}
header('Location: index.php');

?>
