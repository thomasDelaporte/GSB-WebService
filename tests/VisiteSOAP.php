<?php

    require('./ClientSOAP.php');

    class VisiteSOAP extends ClientSOAP {

        public function testGetVisiteById($id){
            debug($this->client-> __soapCall('getVisiteById', array('id' => $id)));
        }

        public function testGetVisitesByVisiteur(){
            debug($this->client-> __soapCall('getVisitesByVisiteur', array('id' => 1027)));
        }
    }

    $visite = new VisiteSOAP();
    $visite->testCreation();
    
    $visite->testGetVisiteById(1);
    $visite->testGetVisiteById(4);

    $visite->testGetVisitesByVisiteur();