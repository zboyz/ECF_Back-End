<?php

// Get the connexion to the database
require_once('database/dbconnection.php');

// Requête SQL pour récupérer les données
function getQuantityArticlesWithColor() {
    $response = getPDO()->prepare(
        "SELECT NOM_COULEUR color, COUNT(*) quantite
            FROM article a
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            GROUP BY NOM_COULEUR
            ORDER BY NOM_COULEUR ASC"
    );
    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

?>