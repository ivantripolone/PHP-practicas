<?php

$conexion= mysqli_connect('localhost', 'admin', '', 'phpmysql');

if(mysqli_connect_errno($conexion)){
    echo '<h1> error en la conexion </h1>';
}
else{
    echo '<h1> Se conecto a my sql </h1>';
};

mysqli_query($conexion, "set names 'utf8'");

$query= mysqli_query($conexion, "select * from notas");

while($nota = mysqli_fetch_assoc($query)){
   // var_dump($nota);
    
   echo $nota['titulo'].'<br/>';
}
