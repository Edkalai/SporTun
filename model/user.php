<?php

class user{
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $solde;
    private $datenaissance;
    private $sexe;
    private $numtel;
    private $adresse;
    private $loggedin;
    private $loggedindashboard;
    private $ban;
    private $admin;



public function getNom()
    {
        return $this->nom;
    }

    public function getprenom()
    {
        return $this->prenom;
    }

    public function getemail()
    {
        return $this->email;
    }
    public function getmdp()
    {
        return $this->mdp;
    }

    public function getsolde()
    {
        return $this->solde;
    }

    public function getdatenaissance()
    {
        return $this->datenaissance;
    }
    public function getsexe()
    {
        return $this->sexe;
    }

    public function getnumtel()
    {
        return $this->numtel;
    }
   

    public function adresse()
    {
        return $this->adresse;
    }
    public function getloggedin()
    {
        return $this->loggedin;
    }
    public function getloggedindashboard()
    {
        return $this->loggedindashboard;
    }

    public function getban()
    {
        return $this->ban;
    }

    public function getadmin()
    {
        return $this->admin;
    }
    public function getTitre()
    {
        return $this->titre;
    }

    public function __construct($nom, $prenom, $email, $mdp, $solde, $datenaissance, $sexe, $numtel, $adresse, $loggedin, $loggedindashboard, $ban, $admin)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->solde = $solde;
        $this->datenaissance = $datenaissance;
        $this->sexe = $sexe;
        $this->numtel = $numtel;
        $this->adresse = $adresse;
        $this->loggedin = $loggedin;
        $this->loggedindashboard = $loggedindashboard;
        $this->ban = $ban;
        $this->admin = $admin;
       
    }