<?php

class Category {

    private $category_id;
    private $name;
    private $db;

    function __construct() {
        $this->db = Database::connect();
    }

    function getCategoria_id() {
        return $this->category_id;
    }

    function getNombre() {
        return $this->name;
    }

    function setCategoria_id($categoria_id) {
        $this->category_id = $categoria_id;
    }

    function setNombre($nombre) {
        $this->name = $this->db->real_escape_string($nombre);
    }

    public function getAll() {
        $categorias = $this->db->query("SELECT * FROM categorias ORDER BY category_id DESC;");
        return $categorias;
    }

    function save() {
        $insert = "INSERT INTO Categorias VALUE (NULL,'{$this->getNombre()}')";
        $save = $this->db->query($insert);
        return $save;
    }

    function delete() {
        $res = false;
        
        $delete = "DELETE FROM Categorias WHERE name = '{$this->getNombre()}' AND category_id = '{$this->getCategoria_id()}';";
        $delete = $this->db->query($delete);
        return $res;
    }

    function update($newName) {
        $update = "UPDATE Categorias SET name = '$newName' WHERE name = '{$this->getNombre()}' AND category_id = '{$this->getCategoria_id()}';";
        $update = $this->db->query($update);
        return $update;
    }

}
