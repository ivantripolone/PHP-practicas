<?php

require_once 'models/Usuario.php';

class UsuarioController {

    public function index() {
        echo 'Usuario Controller';
    }

    public function registro() {
        //importar views
        require_once 'views/usuarios/registro.php';
    }

    public function save() {
        if (isset($_POST)) {

            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $save = $usuario->save();
            if ($save) {
                $_SESSION['register'] = 'complete';
            } else {
                $_SESSION['register'] = 'failed';
            }
        } else {
            $_SESSION['register'] = 'failed';
        }
      header("Location:" . url_base . 'usuario/registro');
      
    }

}
