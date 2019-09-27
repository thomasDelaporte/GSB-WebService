<?php

    require('./ClientSOAP.php');

    class VisiteSOAP extends ClientSOAP {

        public function testGetHashPassword(string $password){
            debug($this->client->__soapCall('getHashPassword', ['password' => $password]));
        }

        public function testDelegueById(){
            debug($this->client->__soapCall('getDelegueById', ['idDelegue' => 1]));
        }
    }

    $visite = new VisiteSOAP();
    $visite->testCreation();
    
    $visite->testGetHashPassword("123");
    $visite->testDelegueById("123");