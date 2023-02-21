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
}

?>