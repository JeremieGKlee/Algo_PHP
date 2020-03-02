<?php

class Relation {
    private $_acteur;
    private $_film;
    private $_role;

public function __construct(Acteur $acteur,Film $film,Role $role){
    $this->_acteur=$acteur;
    $this->_film=$film;
    $acteur->ajouterJoueDansFilm($this);
    $this->_role=$role;
    $acteur->ajouterACommeRole($this);
}
public function getActeur(){
    return $this->_acteur;
}
public function getFilm(){
    return $this->_film->getTitreDuFilm();
}
public function getRole(){
    return $this->_role->getNomDuRole();
}
public function setActeur($acteur){
    $this->_acteur=$acteur;
}
public function setFilm($film){
    $this->_film=$film;
}
public function setRole($role){
    $this->_role=$role;
}

}
// class Relation extends Film{
//     private $_acteur;
//     private $_film;
//     private $_role;

//     public function __construct($acteur,$film,$role){
//         parent::__construct($titreDuFilm,$anneeDeSortie,$duree,$synopsis,$realisateur,$genre);
//         $this->_acteur=$acteur;
//         $this->_film=new Film($film);
//         $acteur->ajouterJoueDansFilm($this);
//         $this->_role=$role;
//         $acteur->ajouterACommeRole($this);
//     }
// }

   