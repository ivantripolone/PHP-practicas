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
        //comprueba que exista una variable post
        if (isset($_POST)) {

            //compueba qlue existan todos los valores necesarios para registrar a un usuario
            $name = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($name & $apellido & $email & $password) {
                //si existen todos los valores crea al usuario
                //intancia a un usuario nuevo
                $usuario = new User();
                //setea todas sus variables 
                $usuario->setNombre($name);
                $usuario->setApellido($apellido);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                //llama al medoto para guardar el usuario en la base de datos
                $save = $usuario->save();
                if ($save) {
                    //si el usuario se guardo con exito, guarda una sesion rester como complete
                    $_SESSION['register'] = 'complete';
                } else {
                    //si el usuario no se guardo con exito, guarda una sesion rester como filed
                    $_SESSION['register'] = 'failed';
                }
            } else {
                //si no estan los valores necesarios para crear un usuario,guarda una sesion rester como filed
                $_SESSION['register'] = 'failed';
            }
        } else {
            //si no existe la variable post,guarda una sesion rester como filed
            $_SESSION['register'] = 'failed';
        }
        //se redirecciona a la pagina de registro
        header("Location:" . url_base . 'usuario/registro');
    }
    
    public function login(){
        if(isset($_POST)){
            //identificar usuarios
            //consultar la base de datos
            $usuario= new User();
            $usuario->setEmail($_POST['email']) ;
            $usuario->setPassword($_POST['password']);
            //crea una sesion
            $identity = $usuario->login();
            if($identity && is_object($identity)){
                $_SESSION['identity']= $identity;
                
                if($identity->rol == 'admin'){
                    $_SESSION['admin']= true;
                }
            } else {
                $_SESSION['error_login'] = 'Identificacion Fallida';
            }
            
        }
        header("Location:".url_base);
    }
    public function logout(){
        if(isset($_SESSION['identity'])){
            $_SESSION['identity']= false;
            unset($_SESSION['identity']);
        }
        if(isset($_SESSION['admin'])){
            $_SESSION['admin'] = false;
            unset($_SESSION['admin']);
        }
        header("Location:".url_base);
    }
    
}
