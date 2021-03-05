<?php

    class Personne{
        private $_nom;
        private $_prenom;
        private $_dateNaissance;

        // Constructeur
        public function __construct($nom = "inconnu", $prenom = "inconnu", $dateNaissance = "")
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_dateNaissance = new dateTime($dateNaissance);
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
        public function getAge(){
            return date_diff(new dateTime(), $this->_dateNaissance)->format("%y");
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
            return $this->_prenom." ".$this->_nom." a ".$this->getAge()." ans.<br>";
        }
    }