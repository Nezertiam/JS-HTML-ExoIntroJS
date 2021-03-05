<?php

    class Personne{
        private $_nom;
        private $_prenom;
        private $_dateNaissance;
        private $_age;

        // Constructeur
        public function __construct($nom = "inconnu", $prenom = "inconnu", $dateNaissance = "")
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateNaissance = new dateTime($dateNaissance);
            $this->_age = date_diff(new dateTime(), $this->_dateNaissance)->format("%y");
        }

        // Getters
        public function getNom(){
            return $this->_nom;
        }
        public function getPrenom(){
            return $this->_prenom;
        }
        public function getDateNaissance(){
            return $this->_dateNaissance->format("d-m-Y");
        }

        // Setters
        public function setNom($nom){
            $this->_nom = $nom;
        }
        public function setPrenom($prenom){
            $this->_prenom = $prenom;
        }
        public function setDateNaissance($dateNaissance){
            $this->_dateNaissance = $dateNaissance;
        }

        public function __toString() {
            return $this->_prenom." ".$this->_nom." a ".$this->_age." ans.<br>";
        }
    }