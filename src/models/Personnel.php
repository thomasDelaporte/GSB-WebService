<?php

    namespace App\Models;

    class Personnel extends Personne {

        protected $email;
        
        public function __construct(string $nom, string $prenom, string $adresse, string $ville, int $codePostal, string $email){
            parent::__construct($nom, $prenom, $adresse, $ville, $codePostal);
            $this->email = $email;
        }

    }