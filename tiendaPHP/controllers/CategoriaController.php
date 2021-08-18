<?php

require_once 'models/Category.php';

class CategoriaController {

    public function index() {
        utils::isAdmin();
        $categorias = new Category();
        $categorias = $categorias->getAll();

        require_once 'views/categoria/index.php';
    }

    public function crear() {
        utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function borrar() {
        utils::isAdmin();
        require_once 'views/categoria/borrar.php';
    }

    public function modificar() {
        utils::isAdmin();
        require_once 'views/categoria/modificar.php';
    }

    public function save() {
        utils::isAdmin();
        //compueba qlue existan todos los valores necesarios para crear a una categoria
        $name = !empty($_POST['nombre']) ? $_POST['nombre'] : false;
        if ($name) {
            //si existen todos los valores crea la categoria
            //intancia a una categoria nueva
            $categoria = new Category();
            //setea todas sus variables 
            $categoria->setNombre($name);
            //llama al medoto para guardar la categoria en la base de datos
            $save = $categoria->save();
            $this->creaSessionCompleteOrFailed($save, 'crearCategoria');
        }
        $this->creaSessionCompleteOrFailed($name, 'crearCategoria');

        //se redirecciona a la pagina de crear categoria
        header("Location:" . url_base . 'categoria/crear');
    }

    public function delete() {
        utils::isAdmin();
        //compueba que existan todos los valores necesarios para borrar a una categoria
        $name = !empty($_POST['nombre']) ? $_POST['nombre'] : false;
        $id = !empty($_POST['id']) ? $_POST['id'] : false;
        $bool = $name && $id;
        if ($bool) {
            //si existen todos los valores crea la categoria
            //intancia a una categoria nueva
            $categoria = new Category();
            //setea todas sus variables 
            $categoria->setNombre($name);
            $categoria->setCategoria_id($id);
            //llama al medoto para guardar la categoria en la base de datos
            $borrar = $categoria->delete();
            
        }
        //se redirecciona a la pagina de crear categoria
        header("Location:" . url_base . 'categoria/borrar');
    }

    public function update() {
        utils::isAdmin();
        //compueba que existan todos los valores necesarios para modificar una categoria
        $name = !empty($_POST['nombre']) ? $_POST['nombre'] : false;
        $id = !empty($_POST['id']) ? $_POST['id'] : false;
        $newName = !empty($_POST['nuevo']) ? $_POST['nuevo'] : false;
        $bool = $name && $id && $newName;
        if ($bool) {
            //si existen todos los valores crea la categoria
            //intancia a una categoria nueva
            $categoria = new Category();
            //setea todas sus variables 
            $categoria->setNombre($name);
            $categoria->setCategoria_id($id);
            //llama al medoto para guardar la categoria en la base de datos
            $modificar = $categoria->update($newName);
        }
        //se redirecciona a la pagina de crear categoria
        header("Location:" . url_base . 'categoria/modificar');
    }

    private function creaSessionCompleteOrFailed($bool, $string) {
        if ($bool) {
            //si la categoria se guardo con exito, guarda una sesion rester como complete
            $_SESSION[$string] = 'complete';
        } else {
            //si la categoria no se guardo con exito, guarda una sesion rester como filed
            $_SESSION[$string] = 'failed';
        }
    }

}
