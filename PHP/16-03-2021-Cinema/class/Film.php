<?php

class Film{

    private $_titre;
    private $_annee;
    private $_duree;
    private $_realisateur;
    private $_genre;
    private $_casting;


    // CONSTRUCTEUR ET TOSTRING
    public function __construct(String $titre, String $annee, String $duree, Realisateur $realisateur, Genre $genre){
        $this->_titre = $titre;
        $this->_annee = $annee;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_casting = [];
        $realisateur->addFilm($this);
        $genre->addFilm($this);
    }
    public function __toString(){
        return $this->_titre;
    }
    //---------------------------


    public function addRole(Role $role){
        $this->_casting[] = $role;
    }

    public function afficherCasting(){
        $str = "<div><h3>Casting de $this :</h3><br>";
        if($this->_casting == []){
            $str.= " -- Section vide --<br>";
        }
        else{
            foreach($this->_casting as $role){
                $str.= "<li style='list-style: square;'>".$role->getPersonnage()." a été incarné par ".$role->getActeur()."</li><br>";
            }
        }
        $str.="</div>";
        
        return $str;
    }


    // GETTERS ET SETTERS
    public function getTitre(){
        return $this->_titre;
    }
    public function getAnnee(){
        return $this->_annee;
    }

}