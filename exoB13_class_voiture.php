<?php
// Créer une classe Voiture possédant les propriétés
//  suivantes : marque, modèle, nbPortes et
// vitesseActuelle ainsi que les méthodes
//  demarrer( ), accelerer( ) et stopper( ) en
// plus des accesseurs (get) et mutateurs (set) traditionnels.
//  La vitesse initiale de chaque véhicule
// instancié est de 0.
//  Une méthode personnalisée pourra afficher toutes
//   les informations d’un véhicule.
// v1  "Peugeot","408",5
// v2  "Citroën","C4",3


class Voiture{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_contact;

public function __construct($marque = "",$modele = "",$nbPortes = 0){
    $this->_marque =$marque;
    $this->_modele =$modele;
    $this->_nbPortes =$nbPortes;
    $this->_vitesseActuelle =0;
    $this->_contact = false;
}
public function getMarque(){
    return $this ->_marque;
}
public function getModele(){
    return $this ->_modele;
}
public function getNbPorte(){
    return $this ->_nbPortes;
}
public function getVitesseActuelle(){
    return $this ->_vitesseActuelle;
}
public function getContact(){
    return $this ->_contact;
}
public function setVitesseActuelle($vitesseActuelle){
    $this->_vitesseActuelle = 0;
}
public function demarrer(){
    if($this->_contact == false) // ou if(!$this->_contact)
    {
        $this->_contact = true;// ou if($this->_contact)
        echo "Le véhicule $this  démarre <br>";
    }
    else{
        echo "Le véhicule $this est déjà démarré.<br>";
    }
}
public function accelerer($vitesse){
    if($this->_contact == true){
        $this->_vitesseActuelle += $vitesse;
        echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." accélère de ".$this->getVitesseActuelle()." km/h.<br>";
    }
    else{
        echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." veut accélérer de ".$this->getVitesseActuelle()." km/h.<br>Pour accelérer, il faut démarrer le véhicule ".$this->getMarque()." ".$this->getModele()."!<br>";
    }
}
public function stopper(){
    if($this->_contact == true){
        $this->_contact = false;
        echo "$this-> est stoppé.<br>";
    }
    else{  
        echo "$this est déjà à l'arrêt.<br>";
    }
}
public function vitesseEnCours(){
    if($this->_contact == true){
        $this->_contact = false;
        echo "La vitesse du véhicule ".$this->getMarque()." ".$this->getModele()." est de ".$this->getVitesseActuelle()." km/h.<br>";
    }
    else{    
        echo $this->getMarque()." ".$this->getModele()." est stoppé. Veuillez le démarrer et accélérer.<br>";
    }
}
public function ralentir(){
    if($this->_vitesseActuelle >= 50 ){
        $this->_vitesseActuelle = $this->_vitesseActuelle - 50;
        echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." ralenti de ".$this->getVitesseActuelle()." km/h.<br>";
    }
    else{
        echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." veut ralentir de ".$this->getVitesseActuelle()." km/h.<br>Pour ralentir, il faut que le véhicule ".$this->getMarque()." ".$this->getModele()." roule!<br>";
    }
}
public function __toString(){
    return "Nom et modèle du véhicule :" .$this->getMarque()." ".$this->getModele()."</br>"."Nombre de portes :".$this->getNbPorte()."</br>";
   
}
}





