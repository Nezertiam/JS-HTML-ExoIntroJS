<?php

class Acteur extends Personne{

    private $_roles;

    // CONSTRUCTEUR ET TOSTRING
    public function __construct(String $prenom, String $nom, String $sexe, String $naissance){
        parent::__construct($prenom, $nom, $sexe, $naissance);
        $this->_roles = [];
    }
    public function __toString(){
        return parent::__toString();
    }
    //-----------------------------


    public function addRole(Role $role){
        $this->_roles[] = $role;
    }
    public function afficherFilms(){
        $str = "<div><h3>Filmographie de $this :</h3><br>";
        if($this->_roles == []){
            $str.= " -- Section vide --<br>";
        }
        else{
            foreach($this->_roles as $role){
                $str.= "<li>".$role->getPersonnage().' "'.$role->getFilm().", ".($role->getFilm())->getAnnee().'"</li><br>';
            }
        }
        $str.= "</div>";
        return $str;
    }

}