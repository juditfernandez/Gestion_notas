<?php

class Notas {
    private $id_notas;
    private $nom_asig_nota;
    private $id_alumno;
    private $nota;

    function __construct() {


       /**
     * Get the value of id_notas
     */ 
    public function getId_notas()
    {
        return $this->id_notas;
    }

    /**
     * Set the value of id_notas
     *
     * @return  self
     */ 
    public function setId_notas($id_notas)
    {
        $this->id_notas = $id_notas;

        return $this;
    }

    /**
     * Get the value of nom_asig_nota
     */ 
    public function getNom_asig_nota()
    {
        return $this->nom_asig_nota;
    }

    /**
     * Set the value of nom_asig_nota
     *
     * @return  self
     */ 
    public function setNom_asig_nota($nom_asig_nota)
    {
        $this->nom_asig_nota = $nom_asig_nota;

        return $this;
    }

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
     * Get the value of nota
     */ 
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     *
     * @return  self
     */ 
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    

?>