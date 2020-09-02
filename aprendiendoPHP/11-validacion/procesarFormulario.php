<?php
    $error= 'faltanValores';
    if(!empty($_POST['nombre']) && !empty($_POST['edad']) && 
       !empty($_POST['apellido']) && !empty($_POST['contraseña']) && 
       !empty($_POST['email'])){
        
        $error= 'ok';
        
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $edad= $_POST['edad'];
        $email= $_POST['email'];
        $contraseña= $_POST['contraseña'];    
        
        if(!is_string($email)|| !filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error= 'email';
        }
        if(empty($contraseña)|| strlen($contraseña)<6 || !preg_match("/[A-Z]+/", $contraseña)|| !preg_match("/[a-z]+/", $contraseña)|| !preg_match("/[0-9]+/", $contraseña))
        { 
                $error= 'contraseña';
        }
       /* var_dump($error);
        var_dump($_POST);
        die();*/
        
        
        
    }else{
        $error= 'faltanValores';
       
    }
    if($error != 'ok')  header("location:index.php?error=$error");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if($error == 'ok'):?>
        <h1>Datos validados</h1>
        <p><?= $nombre ?> </p>
        <p><?= $apellido ?> </p>
        <p><?= $edad ?> </p>
        <p><?= $email ?> </p>
        <p><?= $contraseña ?> </p>
        <?php endif ?>
    </body>
</html>
