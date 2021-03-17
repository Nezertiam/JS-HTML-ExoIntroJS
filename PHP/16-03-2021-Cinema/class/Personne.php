<?php

class Personne{

    protected $_prenom;
    protected $_nom;
    protected $_sexe;
    protected $_naissance;

    public function __construct(String $prenom, String $nom, String $sexe, String $naissance){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_sexe = $sexe;
        $this->_naissance = new DateTime($naissance);
    }

    public function __toString(){
        return $this->_prenom." ".$this->_nom;
    }
}