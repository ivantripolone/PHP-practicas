<!DOCTYPE html>
<html>
    <head>
        <title>Validacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Validacion</h1>
        <?php
            if(isset($_GET['error'])){
                $error= $_GET['error'];
                if($error == 'faltanValores'){
                    echo '<strong style="color:red"> Introduce todos los datos </strong>';
                }
                if($error == 'email'){
                    echo '<strong style="color:red"> Introduce un Email valido</strong>';
                }
                if($error == 'contraseña'){
                    echo '<strong style="color:red"> Introduce una contraseña valida (minusculas, mayusculas, numeros, y una longitud mayor a 6 carecteres) </strong>';
                }
            }
        ?>
        
        
        <form action="procesarFormulario.php" method="POST">
            
            <label for="nombre">Nombre:</label><br>
            <input name="nombre" type="text"  pattern="[A-Za-z]+"/><br> 
            
            <label for="apellido">Apellido:</label><br>
            <input name="apellido" type="text" required="required" pattern="[A-Za-z]+"/><br> 
            
            <label for="edad">Edad:</label><br>
            <input name="edad" type="number" required="required" pattern="[0-9]+"/><br> 
            
            <label for="email">Email:</label><br>
            <input name="email" type="email" required="required" /><br> 
            
            <label for="contraseña">Contraseña:</label><br>
            <input name="contraseña" type="password" required="required" /><br> 
            
            <p>
            <input type="submit" name="Enviar"/>
            </p>
            
        </form>
    </body>
</html>