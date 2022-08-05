<?php
    
    echo "Personne";
    class Personne{
        public $nom;
        public function __construct($nom)
        {
            $this->nom=$nom;
        }
        public function suppnom(){
            $this->nom="";
        }
    }