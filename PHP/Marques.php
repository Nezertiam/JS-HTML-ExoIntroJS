<?php

    class Marque {

        private $_nomMarque;
        private $_pays;

        public function __construct($nomMarque = "inconnue", $pays = "inconnu") {
            $this->_nomMarque = $nomMarque;
            $this->_pays = $pays;
        }


        // NOM
        public function getNomMarque()
        {
                return $this->_nomMarque;
        }
        public function set_nomMarque($_nomMarque)
        {
                $this->_nomMarque = $_nomMarque;
                return $this;
        }


        // PAYS
        public function getPays()
        {
                return $this->_pays;
        }
        public function setPays($_pays)
        {
                $this->_pays = $_pays;
                return $this;
        }

        public function __toString(){
            return $this->getNomMarque()." (".$this->_pays.")";
        }
    }

?>