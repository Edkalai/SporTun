<?php

class promo
{
    private $titre;
    private $description;
    private $prix;





    public function getidpromo()
    {
        return $this->idpromo;
    }

    public function gettitre()
    {
        return $this->titre;
    }
    public function getdescription()
    {
        return $this->description;
    }
    public function getprix()
    {
        return $this->prix;
    }
    public function settitre($titre)
    {
        $this->titre = $titre;
    }
    public function setdescription($description)
    {
        $this->description = $description;
    }
    public function setprix($prix)
    {
        $this->prix = $prix;
    }


    public function __construct($titre, $description, $prix)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
    }
}
