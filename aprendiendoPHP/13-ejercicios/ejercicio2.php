<?php
        $resultado=false;
    if(isset($_POST['n1'])&&isset($_POST['n2'])){
        
        
        if(isset($_POST['sumar'])){
            $resultado= $_POST['n1'] + $_POST['n2'];
        }
        if(isset($_POST['restar'])){
            $resultado= $_POST['n1'] - $_POST['n2'];
        }
        if(isset($_POST['dividir'])){
            $resultado= $_POST['n1'] * $_POST['n2'];
        }
        if(isset($_POST['dividir'])){
            if($_POST['n2'] == 0){
                $resultado= "No se puede dividir por CERO";
            }else{
            $resultado= $_POST['n1'] / $_POST['n2'];
            }   
        }
    }



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="" method="POST">
            <br/>
            <label for="n1">numero1:</label><br>
            <input name="n1" type="number" required="required" pattern="[0-9]+"/><br><br>
            <label for="n2">numero2:</label><br>
            <input name="n2" type="number" required="required" pattern="[0-9]+"/><br> 
            <br/>
            <input type="submit" value="Sumar" name="sumar" />
            <input type="submit" value="Restar" name="restar" />
            <input type="submit" value="Multiplicar" name="multiplicar"/>
            <input type="submit" value="Dividir" name="dividir" />
                                    
            
            
        </form>
    </body>
</html>

<?php
    if($resultado != false){
        
        echo "<h1> $resultado <h1/>";
    }

?>
