<?php

class ProductoController{
    public function index(){
        //accion por defecto muestra la pagina de productos destacados
        //se carga la vista desde la carpeta views 
        require_once 'views/productos/destacados.php';
    }
}