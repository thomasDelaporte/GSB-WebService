<?php

    namespace App\Operations;

    trait VisiteurOperations {

        protected $rounds = 10;

        public function getHashPassword(string $password){

            $hash = password_hash($value, PASSWORD_BCRYPT, [
                'cost' => $this->rounds,
            ]);

            if ($hash === false) {
                throw new SoapFault('Bcrypt hashing not supported.');
            }

            return $hash;
        }
    }