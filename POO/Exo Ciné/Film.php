<?php

class Film{
    private $_titreDuFilm;
    private $_anneeDeSortie;
    private $_duree;
    private $_synopsis;
    private $_realisateur;
    private $_genre;

    public function __construct($titreDuFilm,$anneeDeSortie,$duree,$synopsis,$realisateur,$genre){
        $this->_titreDuFilm=$titreDuFilm;
        $this->_anneeDeSortie=new DateTime($anneeDeSortie);
        $this->_duree=$duree;
        $this->_synopsis=$synopsis;
        $this->_realisateur=$realisateur;
        $this->_genre=$genre;
    }
    public function getTitreDuFilm(){
        return $this->_titreDuFilm;
    }
    public function getAnneeDeSortie(){
        return $this->_anneeDeSortie;
    }
    public function getDuree(){
        return $this->_duree;
    }
    public function getSynopsis(){
        return $this->_synopsis;
    }
    public function getRealisateur(){
        return $this->_realisateur;
    }
    public function getGenre(){
        return $this->_genre;
    }

    public function setTitreDuFilm($titreDuFilm){
        $this->_titreDuFilm= $titreDuFilm;
    }
    public function setAnneeDeSortie($anneeDeSortie){
        $this->_anneeDeSortie= $anneeDeSortie;
    }
    public function setDuree($duree){
        $this->_duree=$duree;
    }
    public function setSynopsis($synopsis){
        $this->_synopsis= $synopsis;
    }
    public function setRealisateur($realisateur){
        $this->_realisateur= $realisateur;
    }
    public function setGenre($genre){
        $this->_genre= $genre;
    }
}
