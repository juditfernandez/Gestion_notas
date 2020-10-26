<?php
require_once 'persona.php';
class Administrador extends Persona{
//Atributos
    private $id_admin;
    //private $email;
    //private $passwd;
//Constructor
    public function __construct($email, $passwd) {
        parent::__construct($email,$passwd);
    }
//Metodos Getters y setters
//Getters: para devolver valores y Setters: para meter valores

   

    /**
     * Get the value of id_admin
     */ 
    public function getId_admin()
    {
        return $this->id_admin;
    }

    /**
     * Set the value of id_admin
     *
     * @return  self
     */ 
    public function setId_admin($id_admin)
    {
        $this->id_admin = $id_admin;

        return $this;
    }
}