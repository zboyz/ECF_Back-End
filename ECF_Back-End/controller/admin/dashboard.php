<?php

// Get the connexion to the database
require_once '../../model/database/dbconnection.php';
// Vérification si le bouton "quitButton" a été cliqué
if (isset($_POST['quitButton'])) {
    // Requête SQL pour supprimer la table users
    $sql = getPDO()->prepare("DROP TABLE users");

    // Exécution de la requête
    $sql->execute();

    // Redirection vers la page d'accueil
    header("Location: ../../controller/index.php");
    exit;
}



/*
//function insertTableUsers () {
    $response = getPDO()->prepare(
        "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
        )"
    );
    $response->execute();


    // Nom d'utilisateur à vérifier
    $username = 'admin';
    
    // Requête SQL pour vérifier si une ligne avec le nom d'utilisateur spécifié existe dans la table users
    $sql = "SELECT * FROM users WHERE username = :username";
    
    // Préparation de la requête
    $stmt = getPDO()->prepare($sql);
    
    // Exécution de la requête avec les paramètres
    $stmt->execute([':username' => $username]);
    
    // Vérification du résultat
    if ($stmt->rowCount() > 0) {
        // Une ligne avec le nom d'utilisateur spécifié existe déjà dans la table
    } else {
        // Aucune ligne trouvée, insertion d'une nouvelle ligne
        $password = 'admin';
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    
        // Préparation de la requête
        $stmt = getPDO()->prepare($sql);
    /*
        // Exécution de la requête avec les paramètres
        if ($stmt->execute([':username' => $username, ':password' => $password])) {
            echo "Nouvelle ligne insérée avec succès";
        } else {
            echo "Erreur lors de l'insertion de la nouvelle ligne";
        }
    }
    */
    
include '../../view/admin/dashboardView.php';


