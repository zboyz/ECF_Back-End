<?php

// Get the connexion to the database
require_once('database/dbconnection.php');


function getFiveArticles() {
    // Select all the articles with their images and returns an associative array

        $response = getPDO()->prepare(
            'SELECT * FROM article a
                INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
                INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
                INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE
                ORDER BY RAND() LIMIT 5'
        );

        $response->execute();
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }
