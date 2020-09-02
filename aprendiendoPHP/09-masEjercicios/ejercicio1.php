<?php
/*ejercicio 1 crear una sesión que aumente su valor en 
 * 1 o disminuya en 1 en función al parámetro GetCounter 
 * que tendremos que crear nosotros en función de si el 
 * parámetro GetCounter está a 1 o a 0.
 */

session_start();

if (!isset($_SESSION["numero"])){
    $_SESSION['numero']= 0;
}
if(isset($_GET["counter"]) && $_GET['counter']== 1){
    $_SESSION["numero"] ++;
} else {
    $_SESSION["numero"] --;
}

?>
<h1>El valor es: <?=$_SESSION["numero"]?></h1>
<a href="ejercicio1.php?counter=1"> Aumentar</a></br>
<a href="ejercicio1.php?counter=0"> Disminuir</a></br>
<a href="ejercicio1alt.php"> 100</a></br>