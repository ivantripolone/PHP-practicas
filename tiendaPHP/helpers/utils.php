<?php

//clase con metodos utiles que vamos a utilizar a lo largo del programa
class utils {

    public static function deleteSession($name) {
        //Borra la sesion con nombre $name
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function showError() {
        //muestra el mensaje de error 404    
        $error = new ErrorController();
        $error->error404();
    }
    
    public static function isAdmin() {
        if(!$_SESSION['admin']){
            header('Location:'.url_base);
        }else{
            return true;
        }
    }
    

}
