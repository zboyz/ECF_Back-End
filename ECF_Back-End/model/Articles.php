<?php

session_start();

// Get the connexion to the database
require_once 'database/dbconnection.php';

// Select all the articles with their images and returns an associative array
function getAllArticles() {

    $response = getPDO()->prepare(
        'SELECT * FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE'
    );

    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

function searchArticle() {
    $response = getPDO()->prepare(
        "SELECT *
            FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE
            INNER JOIN fabricant f ON f.ID_FABRICANT = m.ID_FABRICANT
            INNER JOIN pays p ON p.ID_PAYS = m.ID_PAYS
            INNER JOIN continent co ON co.ID_CONTINENT = p.ID_CONTINENT
            WHERE a.NOM_ARTICLE = :articleName"
    );
    $response->bindParam(':articleName', $_GET['searchInput'], PDO::PARAM_STR);
    $response->execute();
    return $response->fetch(PDO::FETCH_ASSOC);
    // Récupération du résultat
}



    // Select only one article with its image and returns an associative array
    function getSingleArticle($key) {
        
        $key = $_GET['key'];
        $sql = "SELECT *
                FROM article a
                INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
                INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
                INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE
                INNER JOIN fabricant f ON f.ID_FABRICANT = m.ID_FABRICANT
                INNER JOIN pays p ON p.ID_PAYS = m.ID_PAYS
                INNER JOIN continent co ON co.ID_CONTINENT = p.ID_CONTINENT
                WHERE ID_ARTICLE = :key";

        $stmt = getPDO()->prepare($sql);
        $stmt->execute([':key' => $key]);
        
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
