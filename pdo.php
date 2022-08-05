<?php
include 'poo.php';
 class pdop{
    public $pdo;
    public function __construct()
    {
       $user="root";
       $pass="";
       $this->pdo=new PDO('mysql:host=localhost;dbname=php', $user, $pass);
    }
     public function GetAll(){
        $tab=array();
        foreach($this->pdo->query('SELECT * from person') as $row) {
            $tab[]=new Personne($row['nom']);
        }
        return $tab;
     }
     public function Insert($p){
        $this->pdo->query("INSERT INTO `person` (`id`, `nom`) VALUES (NULL, '"+$p->nom+"')");
        
     }
     public function supp($id=1){
        echo 'OK';
     }
    
 }