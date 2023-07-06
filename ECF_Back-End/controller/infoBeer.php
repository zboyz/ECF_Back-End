<?php

require_once '../model/Articles.php';
require_once '../model/commande.php';



    
// if there is a parameter in the url
if(isset($_GET["key"])) {


    // Clear the parameter
    $key = htmlspecialchars($_GET["key"]);
    // Get the information of the article with the corresponding id

    $single_article = getSingleArticle($key);

    
    if (isset($_POST['commandButton'])) {
        $addCommand = addCommand($key, $quantityValue);
    }
}

function commandValid() {
    if (isset($_POST['commandButton'])) {
        echo 'Votre commande a bien été pris en compte';
    }
}

// Afficher la vue de la page d'accueil pour afficher les informations sur les articles
include '../view/infoBeerView.php';

