<?php
include_once "Personne.class.php";
include_once "Profil.class.php";

class Utilisateur extends Personne
{
    //on définit les attributs de la classe
    private string $mail;
    private string $loginUser;
    private string $password;
    private float $solde;
    private int $id_utilisateur;
    private int $_profil;
    // La classe profil n existe pas encore
    

    //Constructeur d'initialisation
    public function __construct(string $nom, string $prenom, string $mail, string $loginUser, string $password, float $solde, int $_profil )
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->loginUser = $loginUser;
        $this->password = $password;
        $this->solde = $solde;
        $this->_profil = $_profil;
    }

    //===================== Méthodes =====================

    public function affiche(){
        echo "Je suis là pour que la fonction abstraite fonctionne \n". ucfirst($this->prenom). " ". strtoupper($this->nom). PHP_EOL. "grade: ". $this->_profil;
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
     * Get the value of loginUser
     */ 
    public function getLoginUser()
    {
        return $this->loginUser;
    }

    /**
     * Set the value of loginUser
     *
     * @return  self
     */ 
    public function setLoginUser($loginUser)
    {
        $this->loginUser = $loginUser;

        return $this;
    }

    /**
     * Get the value of id_utilisateur
     */ 
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */ 
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

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