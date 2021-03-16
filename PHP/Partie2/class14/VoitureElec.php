<?php

class VoitureElec extends Voiture{

    private $_autonomie;

    public function __construct(String $marque, String $modele, Float $autonomie){
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }


    public function getInfos(){
        $str = parent::getInfos();
        $str.= "Autonomie : ".$this->_autonomie."<br>";

        return $str;
    }
}