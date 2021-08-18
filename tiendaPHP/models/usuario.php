<?php

class User {

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
        return password_hash($this->db->real_escape_string($this->password),PASSWORD_BCRYPT,['cost'=>4]);
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
        $this->password = $password;
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
    
    function login(){
        $email= $this->email;
        $password= $this->password;
        $result=false;
        //comprobar si existe el usuario en la base de datos
        $sql="SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);
        //si existe el usuario y el resultado de la busqueda es 1 la condicion sera verdadera
        if($login && $login->num_rows==1){
            //combierto al usuario de la base de datos en un objeto
            $usuario= $login->fetch_object();
            //verificar contraseña
            $verify= password_verify($password, $usuario->password);
        
            if($verify){
                $result=$usuario;
            }
        }
        return $result;
        
    }

}
