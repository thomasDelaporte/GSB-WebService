<?php

    namespace App\Core;

    use \PDO;

    class Model {

        public static $bdd;

        public static function connection($host, $database, $username, $password){

            try { 

                $bdd = new PDO("odbc:Driver={SQL Server Native Client 11.0};server=$host;database=$database", $username, $password);
                $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                self::$bdd = $bdd;

            } catch(exception $exception) {
                die($exception->getMessage());
            }
        }
    }