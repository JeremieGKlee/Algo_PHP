<?php
class Role{
    private $_nomDuRole;
    private $_castings;
    private static $_allRole=


    public function __construct($nomDuRole){
        $this->_nomDuRole=$nomDuRole;
        $this->_castings=[];
    }
    public function getNomDuRole(){
        return $this->_nomDuRole;
    }
    public function getCastings(){
        return $this->_castings;
    }

    public function setNomDuRole($nomDuRole){
        $this->_nomDurole= $nomDuRole;
    }
    public function ajouterCasting($castings){
        $this->_castings[]= $castings;
    }
    //  public function getListActeurRole(){
    //     foreach($this->_castings as $castings){
    //         echo $castings->getNomDuRole()."</br>";

    //     }       
    //  }
     public static function getListActeurRole(){
        foreach($this->_castings as $castings){
            echo $castings->getNomDuRole()."</br>";

        }       
     }


}
