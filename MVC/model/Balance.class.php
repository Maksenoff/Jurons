<?php

class Balance
{
    //on définit les attributs de la classe
    private int $id_utilisateur;
    private int $id_infraction;
    private string $dateBalance;
    private int $id_balance;

    //Constructeur d'initialisation
    public function __construct(int $id_utilisateur, int $id_infraction,  string $dateBalance, int $id_balance)
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->id_infraction = $id_infraction;
        $this->dateBalance = $dateBalance;
        $this->id_balance = $id_balance; 
    }

    //===================== Méthodes =====================

    //===================== Méthodes d'accès =====================

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
     * Get the value of id_infraction
     */ 
    public function getId_infraction()
    {
        return $this->id_infraction;
    }

    /**
     * Set the value of id_infraction
     *
     * @return  self
     */ 
    public function setId_infraction($id_infraction)
    {
        $this->id_infraction = $id_infraction;

        return $this;
    }

    /**
     * Get the value of dateBalance
     */ 
    public function getDateBalance()
    {
        return $this->dateBalance;
    }

    /**
     * Set the value of dateBalance
     *
     * @return  self
     */ 
    public function setDateBalance($dateBalance)
    {
        $this->dateBalance = $dateBalance;

        return $this;
    }

    /**
     * Get the value of id_balance
     */ 
    public function getId_balance()
    {
        return $this->id_balance;
    }

    /**
     * Set the value of id_balance
     *
     * @return  self
     */ 
    public function setId_balance($id_balance)
    {
        $this->id_balance = $id_balance;

        return $this;
    }
}

?>