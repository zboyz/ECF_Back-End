<?php

require_once '../model/Articles.php';
require_once '../model/commande.php';

// Vérification si le formulaire a été soumis
if (isset($_GET['searchInput'])) {
    // Récupération de la valeur de recherche
    $articleName = (string)htmlspecialchars($_GET['searchInput']);
    
    $searchArticle = searchArticle();

}
if (isset($_POST['commandButton'])) {
    $addCommand = addCommandSearch ($quantityValue, $searchInput);
}

// Afficher la vue de la page d'accueil pour afficher les informations sur les articles
include '../view/searchBeerView.php';

