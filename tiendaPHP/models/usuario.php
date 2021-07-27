<?php

class Usuario {

    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $rol;
    private $img;
    private $db;

    function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRol() {
        return $this->rol;
    }

    function getImg() {
        return $this->img;
    }

    function getDb() {
        return $this->db;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellido($apellido) {
        $this->apellido = $this->db->real_escape_string($apellido);
    }

    function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }

    function setPassword($password) {
        $this->password = password_hash($this->db->real_escape_string($password),PASSWORD_BCRYPT,['cost'=>4]);
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function save() {
        $insert = "INSERT INTO Usuarios VALUE (NULL,'{$this->getNombre()}','{$this->getApellido()}','{$this->getEmail()}','{$this->getPassword()}','user',NULL)";
        $save = $this->getDb()->query($insert);
        
        if($save){
            return true;
        } else {
            return false;
        }
    }

}
