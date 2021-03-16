<?php

class Voiture{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_demarree;


    public function __construct(String $marque = "inconnue", String $modele = "inconnue", Int $nbPortes = 0){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_demarree = false;
    }

    public function __toString(){
        return $this->_marque." ".$this->_modele;
    }




    public function demarrer(){
        if($this->_demarree) {
            return "Le véhicule $this est déjà démarré.<br>";
        }
        else {
            $this->_demarree = true;
            return "Le véhicule $this démarre.<br>";
        }
    }

    public function accelerer(Int $acceleration){
        if($this->_demarree){
            $str = "Le véhicule $this accélère de $acceleration km/h.<br>";
            $str.= "Wow ! Quelle accélération ! On vient de passer de ".$this->_vitesseActuelle." à ";
            $this->_vitesseActuelle+= $acceleration;
            $str.= $this->_vitesseActuelle." km/h !<br>";
            return "$str";
        }
        else return "Arrête de faire semblant, et mets le contact...<br>";
    }

    public function ralentir(Int $ralentir){
        if($this->_vitesseActuelle < $ralentir){
            $this->_vitesseActuelle = 0;
            return "T'as tellement ralentis qu'on est à l'arrêt maintenant !<br>";
        }
        else{
            $vit = $this->_vitesseActuelle;
            $this->_vitesseActuelle-= $ralentir;
            return "Wow ! Quelle décellération ! On vient de passer de $vit à ".$this->_vitesseActuelle." km/h !<br>";
        }
    }

    public function stopper(){
        if($this->_demarree && $this->_vitesseActuelle > 0){
            return "T'es malade ! Pouraquoi tu veux couper le moteur maintenant ?<br>
                    Arrête-toi d'abord !<br>";
            }
        else{
            $this->_demarree = false;
            return "Le véhicule $this a coupé le moteur.";
        }
    }











    public function getMarque(){
        return $this->_marque;
    }

    public function setMarque($marque){
        $this->_marque = $marque;
        return $this;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function setModele($modele){
        $this->modele = $modele;
        return $this;
    }

    public function getNbPortes(){
        return $this->_nbPortes;
    }

    public function setNbPortes($nbPortes){
        $this->_nbPortes = $nbPortes;
        return $this;
    }

    public function getVitesseActuelle(){
        return $this->_vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle){
        $this->_vitesseActuelle = $vitesseActuelle;
        return $this;
    }
}