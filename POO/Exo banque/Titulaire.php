<?php
class Titulaire{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_ville;
    private $_compte;

    public function __construct($nom,$prenom,$dateNaissance,$ville){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateNaissance= new DateTime($dateNaissance);
        $this->_ville=$ville;
        $this->_compte=[];
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getDateNaissance(){
        return $this->_dateNaissance;
    }
    public function getAge(){
        $datemaintenant = new DateTime();
        return $this->_dateNaissance->diff($datemaintenant)->format('%y'); 
    }
    public function getVille(){
        return $this->_ville;
    }
    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }
    public function setVille($ville){
        $this->_ville=$ville;
    }
    public function getInfosTitulaire(){
        return "Nom du titulaire : $this->_prenom <br>
                Prenom du titulaire :$this->_nom <br>
                Age du titulaire :" .$this->getAge()."<br>";
    }
}