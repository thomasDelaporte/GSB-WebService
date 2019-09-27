<?php

    namespace App\Operations;

    use App\Models\Visite;

    trait VisiteOperations {
        
        public function getVisiteById(int $idVisite){
                
            $req = Visite::$bdd->prepare("SELECT * FROM visites WHERE idVisite = :idVisite");
            $req->execute([
                'idVisite' => $idVisite
            ]);
            
            $visite = $req->fetch();            
            return Visite::fromDatabase($visite);
        }

        public function getVisitesByVisiteur(int $idVisiteur){

            $req = Visite::$bdd->prepare("SELECT * FROM visites WHERE idVisiteurMedical = :idVisiteur");
            $req->execute([
                'idVisiteur' => $idVisiteur
            ]);
            
            $visites = $req->fetchAll();            
            return Visite::listFromDatabase($visites);
        }
    }