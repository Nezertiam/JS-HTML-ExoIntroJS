<?php

    class Comptes{

        private $_libelle;
        private $_solde;
        private $_devise;
        private $_titulaire;

        public function __construct(string $libelle = "inconnu", float $solde, string $devise = "", Titulaires $titulaire){
            $this->_libelle = $libelle;
            $this->_solde = $solde;
            $this->_devise = $devise;
            $this->_titulaire = $titulaire;
            $titulaire->addCompte($this);
        }

        public function __toString(){
            return $this->afficherInfosCompte();
        }

        public function afficherInfosCompte(){
            $str = "<br>Libellé du compte : ".$this->_libelle."<br>";
            $str.= "Titulaire du compte : ".$this->_titulaire->getNom()." ".$this->_titulaire->getPrenom()."<br>";
            $str.= "Solde : ".$this->_solde." ".$this->_devise."<br>";
            return $str;
        }


        // Libellé
        public function getLibelle()
        {
                return $this->_libelle;
        }
        public function setLibelle($libelle)
        {
                $this->_libelle = $libelle;
                return $this;
        }

        // Solde
        public function getSolde()
        {
                return $this->_solde;
        }
        public function setSolde($solde)
        {
                $this->_solde = $solde;
                return $this;
        }

        // Devise
        public function getDevise()
        {
                return $this->_devise;
        }

        // Titulaire
        public function getTitulaire()
        {
                return $this->_titulaire;
        }


        // Fonctions
        public function crediter(float $montant){
            $this->_solde = $this->_solde + $montant;
        }
        public function debiter(float $montant){
            $this->_solde = $this->_solde - $montant;
        }
        public function virement(Comptes $beneficiaire, float $montant){
            $beneficiaire->crediter($montant);
            $this->debiter($montant);
        }

    }