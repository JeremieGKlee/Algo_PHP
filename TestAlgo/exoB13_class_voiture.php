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

public function __construct($marque = "",$modele = "",$nbPortes = 0,$vitesseActuelle =0,$contact=false){
    $this->_marque =$marque;
    $this->_modele =$modele;
    $this->_nbPortes =$nbPortes;
    $this->_vitesseActuelle =$vitesseActuelle;
    $this->_contact = $contact;
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
    $this->_vitesseActuelle = $vitesseActuelle;
}
public function demarrer(){
    if($this->_contact == false){
        $this->_contact = true;
        echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." démarre.<br>";
    }
    else{
        echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." est déjà démarre.<br>";
    }
}
public function accelerer(){
    if($this->_contact == true){
        $this->_vitesseActuelle = $this->_vitesseActuelle + 50;
        echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." accélère de ".$this->getVitesseActuelle()." km/h.<br>";
    }
    else{
        echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." veut accélérer de ".$this->getVitesseActuelle()." km/h.<br>Pour accelérer, il faut démarrer le véhicule ".$this->getMarque()." ".$this->getModele()."!<br>";
    }
}
public function stopper(){
    if($this->_contact == true){
        $this->_contact = false;
        echo $this->getMarque()." ".$this->getModele()." est stoppé.<br>";
    }
    else{    
        echo $this->getMarque()." ".$this->getModele()." est à l'arrêt.<br>";
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





