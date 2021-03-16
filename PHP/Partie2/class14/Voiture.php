<?php

class Voiture{

    protected $_marque;
    protected $_modele;

    public function __construct(String $marque, String $modele){
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    public function getInfos(){
        $str = "Marque : ".$this->_marque."<br>";
        $str.= "Modele : ".$this->_modele."<br>";
        return $str;
    }

}