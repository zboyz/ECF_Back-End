<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'sdbm_v2');

define('DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);

    function getPDO() {


        //require_once 'config.php';
        $bdd = new PDO(DSN, DB_USER, DB_PASSWORD);
        return $bdd;
    }
    /*
// Fonction pour renvoyer une instance d'objet PDO connecté à votre base de données
function getPDO() {
    require_once "config.php";
   // $DSN = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
    try {
        $bdd = new PDO(DSN, DB_USER, DB_PASSWORD);
    } catch (Exception $error) {
        die('Une erreur s\'est produite lors de la connection à votre base de données : ' . $error->getMessage());
    }
    return $bdd;
}
*/