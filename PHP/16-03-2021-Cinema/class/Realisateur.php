<?php

class Realisateur extends Personne{

    private $_filmographie;

    public function __construct(String $prenom, String $nom, String $sexe, String $naissance){
        parent::__construct($prenom, $nom, $sexe, $naissance);
        $this->_filmographie = [];
    }
    public function __toString(){
        return parent::__toString();
    }




    public function addFilm(Film $film){
        $this->_filmographie[] = $film;
    }

    public function afficherFilms(){
        $str = "<div><h3>Films de ".$this->_prenom." ".$this->_nom." :</h3><br>";
        if($this->_filmographie == []){
            $str.= " -- Section vide --<br>";
        }
        else{
            foreach($this->_filmographie as $film){
                $str.= $film->getTitre()."<br>";
            }            
        }
        $str.= "</div>";

        return $str;
    }

}