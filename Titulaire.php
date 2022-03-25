<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_naissance;
    private string $_ville;
    private array $_comptes;

    function __construct(string $nom, string $prenom, string $naissance, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_naissance = new DateTime ($naissance);
        $this->_ville = $ville;
        $this->_comptes = [];
    }
        //  GETTERS get Value from _nom _prenom _naissance 
    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getDate() {
        return $this->_naissance;
    }
    public function get_ville() {
        return $this->_ville;
    }
    public function getAge() {
        return $this->getDate()->diff( new Datetime())->format("%y");   
    }

    // SETTERS set Value of $NewName $NewSurname $NewDate $NewAccount
    public function setNom(string $NewName) {
        $this->_nom = $NewName;
    }
    public function setPrenom(string $NewSurname) {
        $this->_prenom = $NewSurname;
    }
    public function setDate(DateTime $NewDate) {
        $this->_date = $NewDate;
    }

    public function ajouterComptes($NewAccount) {
        $this->_comptes[] = $NewAccount;
    }

    public function afficherComptes() {
        foreach ($this->_comptes as $comptes) {
            echo $comptes;
        }
    }

    public function __toString() {
        return "$this->_nom $this->_prenom ". $this->getAge(). " ans ";  
    }

   
}