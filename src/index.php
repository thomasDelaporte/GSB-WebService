<?php

    namespace App;

    use App\Core\Model;
    use \SoapServer;

    class LaboratoireServer {

        use Operations\VisiteOperations;
        use Operations\VisiteurOperations;
        use Operations\DelegueOperations;

        public function __construct(){

            $config = parse_ini_file('config.ini');
            Model::connection($config['DB_HOST'], $config['DB_DATABASE'], $config['DB_USERNAME'], $config['DB_PASSWORD']);
        }
    }

