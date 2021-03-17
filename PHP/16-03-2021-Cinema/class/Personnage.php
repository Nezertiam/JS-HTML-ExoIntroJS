<?php

class Personnage{
    private $_nom;
    private $_prenom;
    private $_role;

    // CONSTRUCTEUR ET TOSTRING
    public function __construct(String $prenom, String $nom){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_role = [];
    }
    public function __toString(){
        return $this->_prenom." ".$this->_nom;
    }
    //--------------------------

    public function afficherActeurs(){
        $str = "<div><h3>Liste des acteurs ayant incarné $this :</h3><br>";
        if($this->_role == []){
            $str.= " -- Section vide --<br>";
        }
        else{
            foreach($this->_role as $role){
                $str.= "<li>".$role->getActeur().' "'.$role->getFilm().", ".($role->getFilm())->getAnnee().'"</li><br>';
            }
        }
        $str.= "</div>";
        return $str;
    }

    public function addRole(Role $role){
        $this->_role[] = $role;
    }
}