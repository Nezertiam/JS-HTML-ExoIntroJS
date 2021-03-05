<?php

    class Titulaires{

        private $_nom;
        private $_prenom;
        private $_naissance;
        private $_ville;
        private $_comptes;

        public function __construct(string $nom = "inconnu", string $prenom = "inconnu", string $naissance = "", string $ville){
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_naissance = new DateTime($naissance);
            $this->_ville = $ville;
            $this->_comptes = [];
        }

        public function __toString(){
            return $this->afficherInfosTitulaire();
        }

        public function afficherInfosTitulaire(){
            $str = "<br>".$this->_nom." ".$this->_prenom."<br>";
            $str.= "Age : ".$this->getAge()." ans<br>";
            $str.= "Ville : ".$this->_ville."<br>";
            $i = 1;
            foreach ($this->_comptes as $compte) {
                $str.= "<br>Compte ".$i."<br>";
                $str.= "Libellé du compte : ".$compte->getLibelle()."<br>";
                $str.= "Solde disponible : ".$compte->getSolde()." ".$compte->getDevise()."<br>";
                $i++;
            }
            return $str;
        }

        

        // Nom
        public function getNom(){
                return $this->_nom;
        }
        public function setNom($nom){
                $this->_nom = $nom;

                return $this;
        }

        // Prenom
        public function getPrenom(){
                return $this->_prenom;
        }
        public function setPrenom($prenom){
                $this->_prenom = $prenom;

                return $this;
        }

        // Naissance
        public function getNaissance(){
                return $this->_naissance;
        }

        // Ville
        public function getVille(){
                return $this->_ville;
        }
        public function set_ville($ville){
                $this->_ville = $ville;

                return $this;
        }
        
        // Compte
        public function getComptes(){
                return $this->_comptes;
        }

        public function getAge(){
            return date_diff(new DateTime(), $this->_naissance)->format("%y");
        }


        public function addCompte(Comptes $compte){
            $this->_comptes[] = $compte;
        }
    }