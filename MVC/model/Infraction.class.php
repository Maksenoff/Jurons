<?php


class Infraction {

    private int $id_infraction;
    private String $libelle;
    private float $tarif;

    public function __construct(String $libelle, float $tarif)
    {
        $this->libelle = $libelle;
        $this->tarif = $tarif;
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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of tarif
     */ 
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set the value of tarif
     *
     * @return  self
     */ 
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }
}