<?php
    
class Profil
{
    //on définit les attributs de la classe
    private string $grade;
    private int $id_profil;

    //Constructeur d'initialisation
    public function __construct(string $grade)
    {
        $this->grade = $grade;
    }

    //===================== Méthodes =====================

    //===================== Méthodes d'accès =====================


    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get the value of id_profil
     */ 
    public function getId_profil()
    {
        return $this->id_profil;
    }

    /**
     * Set the value of id_profil
     *
     * @return  self
     */ 
    public function setId_profil($id_profil)
    {
        $this->id_profil = $id_profil;

        return $this;
    }
}


?>