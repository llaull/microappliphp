<?php

/**
 * Created by PhpStorm.
 * User: laurent
 * Date: 26/06/2016
 * Time: 18:00
 */

require_once "bootstrap.php";

// permet de créer un objet pour se connecter à la base de donnée et faire des requetes
class accesBdd extends PDO
{

    private static $instance = null;

    public function __construct() {
        if(!is_null(self::$instance)) {
            throw new Exception('Impossible d\'instancier 2 fois !');
        }
        try {
            //parent::__construct('mysql:host=localhost;dbname=cityzebook', 'root', '', array(1002 => "SET NAMES 'UTF8'"));
            parent::__construct('mysql:host=localhost;dbname=gac_technology_eval', 'root', '', array(1002 => "SET NAMES 'UTF8'"));
            self::$instance = $this;
        } catch(Exception $e) {
            throw new Exception('Erreur de connexion a la bdd');
        }
    }

    private function __clone() {}

    static function getDb()
    {
        if(is_null(self::$instance)) {
            new self();
        }
        return self::$instance;
    }

}