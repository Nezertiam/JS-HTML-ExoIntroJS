<?php

class Role{

    private $_film;
    private $_acteur;
    private $_personnage;

    public function __construct(Film $film, Acteur $acteur, Personnage $personnage){
        $this->_film = $film;
        $this->_acteur = $acteur;
        $this->_personnage = $personnage;
        $acteur->addRole($this);
        $film->addRole($this);
        $personnage->addRole($this);
    }

    public function getPersonnage(){
        return $this->_personnage;
    }

    public function getActeur(){
        return $this->_acteur;
    }

    public function getFilm(){
        return $this->_film;
    }





}