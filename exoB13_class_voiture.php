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
public function demarrer(){
    $this->_contact = true;
}
public function accelerer(){
    if($this->_contact == true){
        $this->_vitesseActuelle = $this->_vitesseActuelle + 30;
    }
    else{
        echo "Mettre le contact";
    }
        
}
public function stopper(){
    if($this->_contact == true){
        $this->_contact = false;
    }
    else{    
        echo "Ne peux pas arreter un vehicule deja arreté";
    }
}
}





