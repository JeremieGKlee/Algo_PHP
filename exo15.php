<?php
class Personne{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;

public function __construct($nom,$prenom,$dateNaissance){
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_dateNaissance = $dateNaissance = new DateTime($dateNaissance); //permet de connaitre le format de la date new DateTime($dateNaissance)
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
public function setNom($nom){
    $this->_nom = $nom;
}
public function setPrenom($prenom){
    $this->_prenom = $prenom;
}
public function setDateNaissance($dateNaissance){
    $this->_dateNaissance = $dateNaissance;
}
public function __toString(){
     return $this->getNom()." ". $this->getPrenom() . " a ".$this->getAge()." ans.</br>";
     
     
     // autre soluce $this->_nom etc...
}
}
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1;
echo $p2;