<?php
class Genre{
    private $_genreDeFilm;

    public function __construct($genreDeFilm){
        $this->_genreDeFilm=$genreDeFilm;
    }
    public function getGenreDeFilm(){
        return $this->_genreDeFilm;
    }
    public function setGenre($genreDeFilm){
        $this->_genreDeFilm= $genreDeFilm;
    }
}