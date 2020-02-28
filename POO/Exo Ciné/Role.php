<?php
class Role{
    private $_nomDuRole;

    public function __construct($nomDuRole){
        $this->_nomDurole=$nomDuRole;
    }
    public function getNomDuRole(){
        return $this->_nomDuRole;
    }
    public function setNomDuRole($nomDuRole){
        $this->_nomDurole= $nomDuRole;
    }
}
