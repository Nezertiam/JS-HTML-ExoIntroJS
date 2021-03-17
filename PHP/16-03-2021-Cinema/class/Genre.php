<?php

class Genre{

    private $_genre;
    private $_films;

    public function __construct(String $nomGenre){
        $this->_genre = $nomGenre;
        $this->_films = [];
    }
    public function __toString(){
        return $this->_genre;
    }




    public function addFilm(Film $film){
        $this->_films[] = $film;
    }

    public function afficherParGenre(){
        $str = "<div><h3>Liste des films dans la catégorie $this :</h3><br>";
        if($this->_films == []){
            $str.= " -- Section vide --<br>";
        }
        else{
            foreach($this->_films as $film){
                $str.= "<li>".'"'.$film->getTitre().", ".$film->getAnnee().'"</li><br>';
            }
        }
        $str.= "</div>";
        return $str;
    }


}

