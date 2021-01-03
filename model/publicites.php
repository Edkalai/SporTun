<?php

class publicite
{
    private $titre;
    private $description;
    private $image;
    private $lien;




    public function getidpublicite()
    {
        return $this->idpublicite;
    }

    public function gettitre()
    {
        return $this->titre;
    }
    public function getdescription()
    {
        return $this->description;
    }
    public function getimage()
    {
        return $this->image;
    }
    public function getlien()
    {
        return $this->lien;
    }
    public function getUrlImage()
    {
        return $this->urlImage;
    }
    public function getNotifCreateur()
    {
        return $this->notifCreateur;
    }

    public function settitre($titre)
    {
        $this->titre = $titre;
    }
    public function setdescription($description)
    {
        $this->description = $description;
    }
    public function setimage($image)
    {
        $this->image = $image;
    }
    public function setlien($lien)
    {
        $this->lien = $lien;
    }


    public function __construct($titre, $description, $image, $lien)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->image = $image;
        $this->lien = $lien;

    }
}
