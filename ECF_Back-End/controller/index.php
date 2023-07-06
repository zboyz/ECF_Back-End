<?php

// Récupère les fonctions pour interroger la table des articles et les tables jointes à la table des artciles
require_once '../model/Articles.php';
require_once '../model/FiveArticlesRandom.php';
require_once '../model/ColorQuantity.php';
// Récupère tous les articles sous forme de tableau associatif
$fiveArticles = getFiveArticles();
$colors = getQuantityArticlesWithColor();

if (isset($_GET['info'])) {

    $info = $_GET['info'];
    // Redirection vers la page d'accueil
    header("Location: ../controller/$info");
}

// Afficher la vue de la page d'accueil pour afficher les informations sur les articles
include '../view/indexView.php';


?>