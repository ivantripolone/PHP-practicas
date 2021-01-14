<?php
 require_once 'includes/redireccion.php';
 require_once 'includes/conexion.php';
 
 if(isset($_SESSION['usuario']) && isset($_GET['id'])){
     $idEntrada=$_GET['id'];
     $sql= "DELETE FROM entrada WHERE id=$idEntrada";
     $borrarEntrada = mysqli_query($db, $sql);
 }
 header('Location: index.php');

