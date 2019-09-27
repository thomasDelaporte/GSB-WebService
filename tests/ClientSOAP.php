<?php

    function debug($data){
        echo '<pre>'; print_r($data); echo '</pre>';
    }

    class ClientSOAP  {

        protected $client;

        public function testCreation(){

            $this->client = new \SoapClient('http://127.0.0.1:8080/webservice/services.wsdl', [
                'trace' => 1,
                'exceptions' => 1
            ]);
            
            debug($this->client);
        }

        public function testTypes(){

            $types = $this->client-> __getTypes();
            debug($types);
        }

        public function testFonctions(){

            $fonctions = $this->client-> __getFunctions();
            debug($fonctions);
        }
    }

    $client = new ClientSOAP();
    $client->testCreation();
    $client->testTypes();
    $client->testFonctions();