<?php

    require('./vendor/autoload.php');
/*
    use App\Models\Delegue;
    use App\Core\Model;

    $config = parse_ini_file('src/config.ini');
    Model::connection($config['DB_HOST'], $config['DB_DATABASE'], $config['DB_USERNAME'], $config['DB_PASSWORD']);

    $req = Delegue::$bdd->prepare("SELECT * FROM personnelDelegues WHERE idDelegue = :idDelegue");
    $req->execute(array(
        'idDelegue' => 1
    ));

    $result = $req->fetch();
    $delegue = Delegue::fromDatabase($result);
    */
    
    
    $server = new SoapServer('http://localhost:8080/webservice/services.wsdl');

    $server->setClass('App\LaboratoireServer');
    $server->handle();
