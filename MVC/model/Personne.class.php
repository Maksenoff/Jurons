<?php


abstract class Personne
{
    //on définit les attributs de la classe
    protected string $nom;
    protected string $prenom;    

    //Constructeur d'initialisation
    
    //===================== Méthodes =====================

    abstract protected function affiche();
   

    //===================== Méthodes d'accès =====================

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}

?>