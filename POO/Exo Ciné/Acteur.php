<?php
class Acteur extends Personne{
    private $_nbreDeFilmJoue;
    private $_nbreDeRoleJoue;

    public function __construct($nom,$prenom,$dateDeNaissance){
        parent::__construct($nom,$prenom,$dateDeNaissance);
        $this->_nbreDeFilmJoue=[];
        $this->_nbreDeRoleJoue=[];
    }

    public function getInfoActeur(){
        echo "Prénom de l'acteur : " .$this->getPrenom() ."</br>
            Nom de l'acteur : " .$this->getNom() ."</br>
            Age de l'acteur : ".$this->getAge()." ans.</br>";
        echo "Nombre de film à son actif : ".count($this->_nbreDeFilmJoue).".</br>";
        //     echo "Il a joué dans : </br>";
        // foreach($this->_nbreDeFilmJoue as $nbreDeFilmJoue){
        //     echo $nbreDeFilmJoue->getFilm()."</br>";
        // }
        echo "Nombre de rôle à son actif : ".count($this->_nbreDeRoleJoue).".</br>";
            echo "Il a joué comme rôle de : </br>" ;
        foreach($this->_nbreDeRoleJoue as $nbreDeRoleJoue){
            echo $nbreDeRoleJoue->getFilm()."</br>";

        }
    }
    public function ajouterJoueDansFilm($nbreDeFilmJoue){
            $this->_nbreDeFilmJoue[] =$nbreDeFilmJoue;
        }
    public function ajouterACommeRole($nbreDeRoleJoue){
            $this->_nbreDeRoleJoue[] =$nbreDeRoleJoue;
    }   
}   