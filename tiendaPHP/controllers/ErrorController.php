<?php

//controlador de errores de la web
class ErrorController{
    
    public function error404(){
        echo '<h1>Error 404: La pagina que buscas no existe</h1>';
    }

}