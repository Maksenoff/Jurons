<?php
    
class Profil
{
    //on définit les attributs de la classe
    private string $grade;

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
}


?>