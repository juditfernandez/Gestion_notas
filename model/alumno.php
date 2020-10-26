<?php
require_once 'persona.php';
class Alumno extends Persona {
    private $id_alumno;
    private $nom_alumno;
    private $apellido_alum;
    private $apellido2_alum;
    private $grupo_alum;

    function __construct($email, $passwd, $id_alumno, $nom_alumno, $apellido_alum, $apellido2_alum, $grupo_alum) {
        parent::__construct($email,$passwd);
        $this->id_alumno=$id_alumno;
        $this->nom_alumno=$nom_alumno;
        $this->apellido_alum=$apellido_alum;
        $this->apellido2_alum=$apellido2_alum;
        $this->grupo_alum=$grupo_alum;

    /**
     * Get the value of id_alumno
     */ 
    public function getId_alumno()
    {
        return $this->id_alumno;
    }

    /**
     * Set the value of id_alumno
     *
     * @return  self
     */ 
    public function setId_alumno($id_alumno)
    {
        $this->id_alumno = $id_alumno;

        return $this;
    }

    /**
     * Get the value of nom_alumno
     */ 
    public function getNom_alumno()
    {
        return $this->nom_alumno;
    }

    /**
     * Set the value of nom_alumno
     *
     * @return  self
     */ 
    public function setNom_alumno($nom_alumno)
    {
        $this->nom_alumno = $nom_alumno;

        return $this;
    }

    /**
     * Get the value of apellido_alum
     */ 
    public function getApellido_alum()
    {
        return $this->apellido_alum;
    }

    /**
     * Set the value of apellido_alum
     *
     * @return  self
     */ 
    public function setApellido_alum($apellido_alum)
    {
        $this->apellido_alum = $apellido_alum;

        return $this;
    }

    /**
     * Get the value of apellido2_alum
     */ 
    public function getApellido2_alum()
    {
        return $this->apellido2_alum;
    }

    /**
     * Set the value of apellido2_alum
     *
     * @return  self
     */ 
    public function setApellido2_alum($apellido2_alum)
    {
        $this->apellido2_alum = $apellido2_alum;

        return $this;
    }

    /**
     * Get the value of grupo_alum
     */ 
    public function getGrupo_alum()
    {
        return $this->grupo_alum;
    }

    /**
     * Set the value of grupo_alum
     *
     * @return  self
     */ 
    public function setGrupo_alum($grupo_alum)
    {
        $this->grupo_alum = $grupo_alum;

        return $this;
    }

    /**
     * Get the value of email_alum
     */ 
    public function getEmail_alum()
    {
        return $this->email_alum;
    }

    /**
     * Set the value of email_alum
     *
     * @return  self
     */ 
    public function setEmail_alum($email_alum)
    {
        $this->email_alum = $email_alum;

        return $this;
    }

    /**
     * Get the value of password_alum
     */ 
    public function getPassword_alum()
    {
        return $this->password_alum;
    }

    /**
     * Set the value of password_alum
     *
     * @return  self
     */ 
    public function setPassword_alum($password_alum)
    {
        $this->password_alum = $password_alum;

        return $this;
    }
    }



?>