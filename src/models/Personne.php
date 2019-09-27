<?php

    namespace App\Models;
    
    use App\Core\Model;

    class Personne extends Model {
        
        protected $nom;
        protected $prenom;
        protected $adresse;
        protected $ville;
        protected $codePostal;
        
        public function __construct(string $nom, string $prenom, string $adresse, string $ville, int $codePostal){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse;
            $this->ville = $ville;
            $this->codePostal = $codePostal;
        }
    }