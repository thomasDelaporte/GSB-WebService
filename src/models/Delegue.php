<?php

    namespace App\Models;
    
    class Delegue extends Personnel {

        protected $idDelegue;
        protected $salaire;

        public function __construct($idDelegue, string $nom, string $prenom, string $adresse, string $ville, int $codePostal, string $email, float $salaire){
            parent::__construct($nom, $prenom, $adresse, $ville, $codePostal, $email);

            $this->idDelegue = $idDelegue;
            $this->salaire = $salaire;
        }

        public static function fromDatabase($d){
            if($d == null) throw new \SoapFault("undefined", "Aucun délégué avec ces paramètres");
            return new Delegue($d['idDelegue'], $d['nom'], $d['prenom'], $d['adresse'], $d['ville'], $d['codePostal'], $d['email'], $d['salaire']);
        }
    }