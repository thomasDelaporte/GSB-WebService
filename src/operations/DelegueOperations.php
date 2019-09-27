<?php

    namespace App\Operations;

    use App\Models\Delegue;

    trait DelegueOperations {
        
        public function getDelegueById(int $idDelegue){
            
            $req = Delegue::$bdd->prepare("SELECT * FROM personnelDelegues WHERE idDelegue = :idDelegue");
            $req->execute(array(
                'idDelegue' => $idDelegue
            ));

            $delegue = $req->fetch();
            return Delegue::fromDatabase($delegue);
        }
    }