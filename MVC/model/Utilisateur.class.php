<?php
include_once "Personne.class.php";
include_once "Profil.class.php";

class Utilisateur extends Personne
{
    //on définit les attributs de la classe
    private string $mail;
    private string $login;
    private string $password;
    private float $solde;
    private Profil $_profil;
    // La classe profil n existe pas encore
    

    //Constructeur d'initialisation
    public function __construct(string $nom, string $prenom, string $mail, string $login, string $password, float $solde, Profil $_profil )
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->login = $login;
        $this->password = $password;
        $this->solde = $solde;
        $this->_profil = $_profil;
    }

    //===================== Méthodes =====================

    public function affiche(){
        echo "Je suis là pour que la fonction abstraite fonctionne \n". ucfirst($this->prenom). " ". strtoupper($this->nom). PHP_EOL. "grade: ". $this->_profil->getGrade();
    }

    //===================== Méthodes d'accès =====================

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of _profil
     */ 
    public function get_profil()
    {
        return $this->_profil;
    }

    /**
     * Set the value of _profil
     *
     * @return  self
     */ 
    public function set_profil($_profil)
    {
        $this->_profil = $_profil;

        return $this;
    }
}


?>