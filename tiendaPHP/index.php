<?php

//iniciamos sesion
session_start();
//se cargan todos los requerimientos para la pagina
require_once 'autoload.php';
require_once 'config/database.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

//controla si se pasa algun parametro por url 
if (isset($_GET['controller'])) {
    $controller_name = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    //si no se pasa ningun argumento por la url se establece el controller_default
    $controller_name = controller_default;
}

//instancia al controlador $controller_name si existe la clase 
if (class_exists($controller_name)) {
    $controller = new $controller_name();

    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        //si el metodo action existe en la clase controller
        $action = $_GET['action'];
        $controller->$action();
    } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        //si no se especifica ningun action se establece la action_default
        $action_default = action_default;
        $controller->$action_default();
    } else {
        utils::showError();
    }
} else {
    utils::showError();
}
//muestra la vista del footer
require_once 'views/layout/footer.php';
