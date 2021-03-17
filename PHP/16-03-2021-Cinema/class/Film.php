<?php

class Film{

    private $_titre;
    private $_annee;
    private $_duree;
    private $_realisateur;
    private $_genre;
    private $_casting;


    // CONSTRUCTEUR ET TOSTRING
    public function __construct(String $titre, Int $annee, Int $dureeEnMinutes, Realisateur $realisateur, Genre $genre){
        $this->_titre = $titre;
        $this->_annee = $annee;
        $this->_duree = $this->formatDuree($dureeEnMinutes);
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

    public function afficherInfos(){
        $str = "<div><h3>$this</h3><br>";
        $str.= "Réalisateur : ".$this->_realisateur."<br>";
        $str.= "Genre : ".$this->_genre."<br>";
        $str.= "Durée du film : ".$this->_duree."<br>";
        $str.= "Année de sortie : ".$this->_annee."<br>";
        return $str;
    }

    public function formatDuree($duree){
        $minutes = $duree;
        if($minutes < 60){
            return "$minutes minutes";  // Si la durée(en minutes) < 60, il est inutile d'afficher les heures.
        }
        else{
            $heures = 0;                // Boucle qui permet de compter le nombre d'heures contenu
            while($minutes >= 60){      // dans un Int symbolisant la duree en minutes.
                $heures++;
                $minutes-= 60;
            }
            if($minutes == 0){          // Si les minutes == 0, il est inutile de les afficher
                return $heures."h";     // on retourne uniquement les heures dans ce cas.
            }
            else return $heures."h".$minutes;   // Autrement, on affiche par défaut les heures et les minutes.
        }
    }


    // GETTERS ET SETTERS
    public function getTitre(){
        return $this->_titre;
    }
    public function getAnnee(){
        return $this->_annee;
    }

    public function getDuree(){
        return $this->_duree;
    }

}