<?php

// Get the connexion to the database
require_once('database/dbconnection.php');

// Déterminer le nombre d'articles par page
$parPage = 21;

// Récupérer la page courante à partir de $_GET
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int) strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

// Calculer l'index du premier article à récupérer
$premier = ($currentPage - 1) * $parPage;

// Préparer la requête SQL pour récupérer les articles de la page courante
$query = getPDO()->prepare(
    "SELECT * FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE
            WHERE c.NOM_COULEUR = 'Ambrée'
            LIMIT :premier, :parpage"
);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$query->execute();

// Récupérer les articles de la page courante
$articles = $query->fetchAll(PDO::FETCH_ASSOC);


// Préparer la requête SQL pour compter le nombre total d'articles
$query = getPDO()->prepare(
    "SELECT COUNT(*) AS nb_articles FROM article"
);
$query->execute();

// Récupérer le nombre total d'articles
$result = $query->fetch();
$nbArticles = (int) $result['nb_articles'];

// Calculer le nombre total de pages
$nbPages = ceil($nbArticles / $parPage);


